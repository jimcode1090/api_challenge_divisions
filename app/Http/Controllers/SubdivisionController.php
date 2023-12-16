<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class SubdivisionController extends Controller
{
    public function index(){
        return Division::tree()->where("level", 2)->with("parent")->get();
    }
}
