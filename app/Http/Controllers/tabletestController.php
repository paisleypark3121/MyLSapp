<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabletest;

class tabletestController extends Controller
{
    public function index() {
        //echo "hello world";
        return tabletest::all();
    }
}
