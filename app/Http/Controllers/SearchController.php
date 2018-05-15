<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use Laravolt\Indonesia\Facade as Indonesia;

class SearchController extends Controller
{
    public function search(Request $request){                
        $categories = Category::all();
        $cities = Indonesia::allCities();                                                        
        // $results = Course::where('name', 'like', "%$request->pelajaran%")->with([
        //     'user',
        //     'category' => function($query){
        //         $query->where('id', 9);
        //     }
        // ])->get();          
        $results = Course::where('judul', 'like', "%$request->pelajaran%")
                      ->where('harga', '<=', $request->nominal ?? 100000000)
                      ->whereHas('category', function($q){
                        global $request;
                         $q->where('id', 'like', $request->kategori ?? "%%");
                    })->whereHas('user.profile', function($q){ //wtf
                        global $request;
                        $q->where('kota_mengajar', 'like', $request->kota ?? "%%");
                    })->paginate(9)->appends($request->except('page'));       //wew             
        return view('search', compact('categories', 'results', 'cities'));
    }
}
