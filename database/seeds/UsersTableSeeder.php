<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Connection;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [];
      $faker = Faker::create();

      DB::table('connections')->delete();
      DB::table('users')->delete();

    	foreach ( range(0, 200) as $index) {
        array_push($users, [
          'fname' => $faker->firstName,
          'lname' => $faker->lastName,
          'color' => $faker->safeColorName
        ]);
      }
      // Insert users into database
      DB::table('users')->insert($users);

      $users = User::all();

      foreach($users as $user):
          $connectionCount = rand(0,50);
          $conns = array();
          for($i = 0; $i < $connectionCount; $i++){
            $conn = $users[rand(0,count($users) - 1)];
            if(!array_key_exists($conn->id, $conns)){
              $newConn = new Connection;
              $newConn->usera = $user->id;
              $newConn->userb = $conn->id;
              $newConn->save();
            }
            $conns[$conn->id] = true;
          }
      endforeach;
    }
}
