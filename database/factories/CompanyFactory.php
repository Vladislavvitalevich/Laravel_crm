<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'email' =>  $faker->companyEmail,
        'phone' => $faker->e164PhoneNumber,
        'website' => $faker->domainName,
        'logo' => 'company_name.jpg',
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
