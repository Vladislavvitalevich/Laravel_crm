<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function run()
    {
        factory(App\Company::class, 50)->make();
    }
}
