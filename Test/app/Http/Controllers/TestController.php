<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function postData(){



        foreach (\request()->food as $key => \request()->food){
            echo $key .' '. \request()->food;
        }
    }
}
