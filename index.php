<?php
require_once ('vendor/autoload.php');
require_once('./Classes/User.php');
use Ramsey\Uuid\Uuid;


// $user1 = new User("Sonia", 53);
// dump($user1);
// $uuid = Uuid::uuid4();
// echo "id : ". $uuid;



// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('fr_FR');
// generate data by calling methods
for ($i=0; $i<=20 ; $i++){
echo $faker->name() . " ";
// 'Vince Sporer'
echo $faker->email() . " <br>";
// 'walter.sophia@hotmail.com'
}