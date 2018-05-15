<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravolt\Indonesia\Facade as Indonesia;

class IndonesiaController extends Controller
{
    public function allProvincies(){
        return Indonesia::allProvinces();
    }

    public function getProvince($id){
        return Indonesia::findProvince($id);
    }

    public function getCitiesByProvince($id){
        return Indonesia::findProvince($id, ['cities']);
    }

    public function allCities(){
        return Indonesia::allCities();
    }

    public function getCity(){
        return Indonesia::findCity($cityId);
    }

}
