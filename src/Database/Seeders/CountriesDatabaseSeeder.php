<?php

namespace Lwwcas\LaravelCountries\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\pt\CountrySeeder as CountriesPT;

class CountriesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(BaseCountriesRegionsSeeder::class);
        $this->call(BaseCountriesSeeder::class);

        $this->call(CountriesPT::class);
    }
}
