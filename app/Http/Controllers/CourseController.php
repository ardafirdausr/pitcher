<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\User\User;
use Illuminate\Support\Facades\Auth;

use Laravolt\Indonesia\Facade as Indonesia;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user()->id;
        $courses = Course::where('user_id', $user)->get();                
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('course.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required|max:255',
            'harga' => 'required|numeric'
        ]);        
        User::find($request->id)->course()->create([
            'judul' => $request->judul,
            'category_id' => $request->kategori,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Course::where('id', $id)->first();        
        $categories = Category::get();
        return view('course.edit', compact('result', 'categories'));
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
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required|max:255',
            'harga' => 'required|numeric'
        ]);        
        Course::where('id', $id)->update([
            'judul' => $request->judul,
            'category_id' => $request->kategori,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::where('id', $id)->delete();        
        return redirect()->route('course.index');
    }
    
    public function addCourse(Request $request){                        
        User::find(Auth::user()->id)->take()->attach([$request->id]);
        return response("Pelajaran Berhasil ditambahkan"); 
    }

    public function deleteCourse(Request $request){
        $price = Course::find($request->id)->first()->harga;
        User::find(Auth::user()->id)->take()->detach([$request->id]);         
        return response($price); 
    }

    public function payment(){           
        $courses = Course::whereHas('takenBy', function($q){                
                $q->where('user_id', Auth::user()->id);
            })->get();                                            
        // $c = User::find(1);                
        // foreach($c->take as $tes){
        //     dd($tes->pivot->user_id);
        // }        
        return view('course.pay', compact('courses'));
    }
}
