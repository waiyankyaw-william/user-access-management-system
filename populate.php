<?php

require "vendor/autoload.php";

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Faker\Factory as Faker;

$faker = Faker::create();

echo "Start Populating \n";

$table = new UsersTable(new MySQL());
for ($i = 0; $i < 20; $i++) {
    $table->insert([
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'password' => "password",
        'role_id' => rand(1, 3),
    ]);
}

echo "Done Populating \n";
