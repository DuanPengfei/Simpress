<?php
class UserTableSeeder extends DatabaseSeeder {
  public function run()
  {
    $users = [
      [
        "username" => "forge",
        "password" => Hash::make("forge"),
        "email" => "forge@example.com"
      ]
    ];

    foreach ($users as $user)
    {
      User::create($user);
    }
  }
}