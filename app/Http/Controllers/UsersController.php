<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index() {
      $categories =  User::all()->toJson();
      return  response()->json($categories);
    }

    // public function show($id) {
    //   return $id
    // }
    // public function deleteConnection($iduser) {
    //
    // }

    // $validator = Validator::make(
    //   array(
    //     'fname' => 'required',
    //     'lname' => 'required',
    //     'color' => 'required',
    //   );
    // );
}
