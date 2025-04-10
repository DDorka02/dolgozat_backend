<?php

namespace App\Http\Controllers;

use App\Models\Tevekenyseg;
use Illuminate\Http\Request;

class TevekenysegController extends Controller
{
    public function index(){
        return Tevekenyseg::all();
    }
    public function show($id){
        $kategoia = Tevekenyseg::where('id',$id)
        ->get();
        return $kategoia;
    }
    public function store(Request $request){
        $record = new Tevekenyseg();
        $record->fill($request->all());
        $record->save();
    }
    public function update(Request $request, $id){
        $record =Tevekenyseg::find($id);
        $record->fill($request->all());
        $record->save();
    }
    public function destroy($id){
        Tevekenyseg::find($id)->delete;
    }
}
