<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        dd($facker->e164PhoneNumber);
        'name' => $faker->company,
        'email' =>  $faker->companyEmail,
        'phone' => $facker->e164PhoneNumber,
        'website' => $facker->domainName,
        'logo' => 'company_name.jpg',
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
