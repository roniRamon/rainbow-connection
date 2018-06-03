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
          // $conn_arr = (array) $conn
          // $conn_id = array_map(function ($n){ $n["userb"]}, $conn_arr);
          $test = [];
          foreach ($conn as $link) {
            $info = User::find($link['userb']);
            $info = $info['fname'] . " " . $info['lname'];
            array_push($test, $info);
          }
          $user['connection'] = $test;
        }

      return  $users;
    }

    public function show($id) {
      // $conn = User::find($id)->connections;
      // $test = [];
      // foreach ($conn as $link) {
      //   $info = User::find($link['userb']);
      //   $info = $info['fname'] . " " . $info['lname'];
      //   array_push($test, $info);
      // }
      // $conn['connection'] = $test;
      //
      // return  $conn;
      $users =  User::all();


      // foreach ($users as $key => $user) {
        foreach ($users as $user) {
          $conn = User::find($user['id'])->connections;
          // $conn_arr = (array) $conn
          // $conn_id = array_map(function ($n){ $n["userb"]}, $conn_arr);
          $test = [];
          foreach ($conn as $link) {
            $info = User::find($link['userb']);
            $info = $info['fname'] . " " . $info['lname'];
            array_push($test, $info);
          }
          $user['connection'] = $test;
        }

      return  $users;
    }


}
