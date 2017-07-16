<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
use App\User;

class UsersTableSeeder extends Seeder {
  public function run() {
    DB::table('users')->delete();
    User::create([
      'name'                   => 'Admin',
      'password'               => bcrypt('ff101090'),
      'email'                  => 'firas.ra10@gmail.com'
    ]);
  }
}