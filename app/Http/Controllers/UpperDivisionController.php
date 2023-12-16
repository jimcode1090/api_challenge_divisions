<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class UpperDivisionController extends Controller
{
    public function index(){
        $upperDivisions = Division::isRoot()->tree()->get()->toTree();
        dd($upperDivisions);
    }
}
