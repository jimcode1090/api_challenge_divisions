<?php

namespace App\Http\Controllers;

use App\Http\Requests\DivisionRequest;
use App\Http\Resources\DivisionResource;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index(){
        $divisions = Division::tree()->where("level", 1)->with("descendants")->paginate(5);
        return DivisionResource::make($divisions);
    }

    public function store(DivisionRequest $request)
    {
        $division = Division::create($request->all());
        return DivisionResource::make($division);
    }
    public function show($id)
    {
        $division =  Division::where("id", $id)->with('descendants')->get();
        return DivisionResource::make($division);
    }

    public function update(DivisionRequest $request, Division $division)
    {
        $division->update($request->all());
        return DivisionResource::make($division);
    }

    public function destroy(Division $division)
    {
        $division->delete();
        return DivisionResource::make($division);
    }
}
