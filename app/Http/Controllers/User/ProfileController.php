<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Profile;
use App\Models\User\User;
use App\Models\City;
use App\Models\Course;
use Laravolt\Indonesia\Facade as Indonesia;

class ProfileController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {                
        if(User::find($id)){
            $userProfile = Profile::where('user_id', $id)->first() ?? [];                                                          
            $userCourse = Course::where('user_id', $id)->get() ?? [];            
            $userData = User::find($id);                
            if($userProfile){
                $kotaName = Indonesia::findCity($userProfile->kota)->name;                                    
                $provinsiName = Indonesia::findProvince($userProfile->provinsi)->name;                                 
                $kotaMengajarName = Indonesia::findCity($userProfile->kota_mengajar)->name;                     
            }
            return view('user.profile.show', 
                compact('id', 'userProfile', 'userData', 'userCourse','kotaName', 'kotaName', 'provinsiName', 'kotaMengajarName')
            );                   
        }
        return view('user.notfound');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        if(User::find($id)){            
            $provinces = Indonesia::allProvinces();
            $cities = Indonesia::allCities();
            $userProfile = Profile::where('user_id', $id)->first();                                              
            $userData = User::find($id);
            if($userProfile){
                $kotaName = Indonesia::findCity($userProfile->kota)->name;   
                $provinsiName = Indonesia::findProvince($userProfile->provinsi)->name;         
                $kotaMengajar = Indonesia::findCity($userProfile->kota_mengajar);                                 
            }
            return view('user.profile.edit', 
                compact('id', 'provinces', 'cities', 'userProfile', 'userData', 'kotaName', 'provinsiName', 'kotaMengajar')
            );            
        }        
        return view('user.notfound');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {                   
        $this->validate($request, [
            'name' => 'required|string|max:255',    
            'no_telepon' => 'regex:/[0-9]+/'
        ]);           
        if(User::find($id)->email != $request->email){            
            $this->validate($request, [                
                'email' => 'required|string|email|max:255|unique:users',                  
            ]); 
        }               
        User::find($id)->profile()->updateOrCreate(                 
            ['user_id' => $id],
            [
                'no_telepon' => $request->no_telepon ?? '',
                'jenis_kelamin' => $request->jenis_kelamin ?? '',
                'provinsi' => $request->provinsi ?? '',
                'kota' => $request->kota ?? '',
                'alamat' => $request->alamat ?? '',
                'kota_mengajar' => $request->kota_mengajar ?? '',
                'tentang' => $request->tentang ?? '',
                'biodata' => $request->biodata ?? ''
            ]
        );
        Profile::where('user_id', $id)->first()->user()->update([
            'name' => $request->name,
            'email'=> $request->email,
        ]);        
        return redirect()->route('user.profile.show', compact('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
