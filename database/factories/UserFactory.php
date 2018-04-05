<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name'      => $faker->name,
        'lastname'  => $faker->lastname,
        'email'     => $faker->email,
        'password'  => bcrypt('123456'),  
        'ci'        => $faker->unique()->randomNumber(5),
        'phone'     =>  $faker->e164PhoneNumber(),
        'additional_phone'  =>  $faker->e164PhoneNumber(),
        'description'       =>  $faker->realText($maxNbChars = 500, $indexSize = 2),
        'dbirth'            =>  $faker->date($format = 'd-m-Y', $max = 'now')
    ];
});

$factory->define(App\Models\Address::class, function ($faker) {
    return [
        'province'		=>	$faker->city,
        'country'		=>	$faker->country,
        'city'			=>	$faker->city,
        'sector'		=>	$faker->address,
        'street'		=>	$faker->streetName,
        'residential'	=>	$faker->secondaryAddress,
        'cpostal'		=>	$faker->postcode,
        'map'			=> 	$faker->latitude($min = -90, $max = 90).', '.$faker->longitude($min = -180, $max = 180)
    ];
});

$factory->define(App\Models\Bank_account::class, function ($faker) {
    return [
	    'name'		=>	$faker->name,
	    'account'	=>	$faker->bankAccountNumber,
	    'entity'	=>	$faker->randomElement($array = array ('Caribe', 'Banesco', 'Provincial', 'Activo')),
	    'type'		=>	$faker->randomElement($array = array ('corriente','ahorro'))
    ];
});

$factory->define(App\Models\Project::class, function ($faker) {
    $arrayUser = App\User::pluck('id')->all();
    $arrayService = App\Models\Service::pluck('id')->all();
    return [
        'title'         =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description'   =>  $faker->text($maxNbChars = 500),
        'status'        =>  1,
        'schedule'      =>  $faker->randomElement($array = array('Emergencia','Tandas','Indefinido')),
        'type'          =>  $faker->randomElement($array = array ('Mañana','Tarde')),
        'maximum'       =>  $faker->randomNumber($nbDigits = NULL, $strict = false),
        'user_id'       =>  $faker->randomElement($arrayUser),
        'service_id'    =>  $faker->randomElement($arrayService)
    ];
});