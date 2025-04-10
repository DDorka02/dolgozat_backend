<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index(){
        return Kategoria::all();
    }
    public function show($id){
        $kategoia = Kategoria::where('id',$id)
        ->get();
        return $kategoia;
    }
    public function store(Request $request){
        $record = new Kategoria();
        $record->fill($request->all());
        $record->save();
    }
    public function update(Request $request, $id){
        $record =Kategoria::find($id);
        $record->fill($request->all());
        $record->save();
    }
    public function destroy($id){
        Kategoria::find($id)->delete;
    }
}
