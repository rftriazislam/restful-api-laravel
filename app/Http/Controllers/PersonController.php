<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
class PersonController extends Controller
{
public function personStore( $id){
    $p=Person::find($id);
    return response()->json($p,200);
}
}
