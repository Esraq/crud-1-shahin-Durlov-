<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;
class ViewController extends Controller
{

      public function index(){

        $cruds=Crud::all();
       
        view()->share('cruds',$cruds);
        return view('view');
      }


}



