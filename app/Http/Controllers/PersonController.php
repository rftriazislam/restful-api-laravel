<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
class PersonController extends Controller
{
public function personShow( $id){
    $p=Person::find($id);
    return response()->json($p,200);
}
public function personStore(Request $request ){
    return Person::create($request->all());
}

}
