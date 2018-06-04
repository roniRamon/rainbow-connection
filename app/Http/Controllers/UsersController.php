<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index() {
      $users =  User::all();

      // foreach ($users as $key => $user) {
        foreach ($users as $user) {
          $conn = User::find($user['id'])->connections;
          $names = [];
          foreach ($conn as $link) {
            $info = User::find($link['userb']);
            $full_name = $info['fname'] . " " . $info['lname'];
            array_push($names, ['id' => $info['id'], 'full_name' => $full_name, 'color' => $info['color']]);
          }
          $user['names'] = $names;
        }

        $users = $users->toArray();

      return response()->json( [ 'users' => $users ] );
    }

    public function show($id) {
      $conn = User::find($id)->connections;
      $names = [];
      $user_json = [];
      foreach ($conn as $link) {
        $info = User::find($link['userb']);
        $full_name = $info['fname'] . " " . $info['lname'];
        array_push($names, ['id' => $info['id'], 'full_name' => $full_name, 'color' => $info['color'], "conn_id" => $link['id']]);
      }
      $user_json['fname'] = User::find($id)->fname;
      $user_json['lname'] = User::find($id)->lname;
      $user_json['color'] = User::find($id)->color;
      $user_json['id'] = $id;
      $user_json['names'] = $names;

      return  response()->json( [ 'user' => $user_json ] );
    }

    public function destroy($id) {

      return Connection::destroy($id);;
    }


}
