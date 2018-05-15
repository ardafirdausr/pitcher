<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User\User;

class IdentityController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->id == $id ){
            $userData = User::find($id);
            $userIdentity = $userData->identity;
            return view('user.identity.show', compact('id', 'userData', 'userIdentity'));
        }        
        else{
            return redirect()->route('user.profile.show', compact('id'));
        }        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->id == $id ){
            $userData = User::find($id);
            $userIdentity = $userData->identity;
            return view('user.identity.edit', compact('id', 'userData', 'userIdentity'));
        }        
        else{
            return redirect()->route('user.profile.show', compact('id'));
        }
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
        if(Auth::user()->id == $id){            
            $request->validate([
                'nik' => 'required',
                'nama_bank' => 'required',
                'nomor_rekening' => 'required',
                'pemilik_rekening' => 'required'
            ]);            
            User::find($id)->identity()->updateOrCreate(
                ['user_id' => $id],
                [
                    'nik' => $request->nik,
                    'nama_bank' => $request->nama_bank,
                    'nomor_rekening' => $request->nomor_rekening,
                    'pemilik_rekening' => $request->pemilik_rekening
                ]
            );
            return redirect()->route('user.identity.show', compact('id'));
        }        
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
