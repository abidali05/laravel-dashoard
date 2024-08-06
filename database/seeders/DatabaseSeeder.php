<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanyDetailTableSeeder::class);
        $this->call(BoardOfDirectorTableSeeder::class);
        $this->call(CompanyAccountingTableSeeder::class);
        $this->call(MarketShareTableSeeder::class);
        $this->call(ShareholderTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CountryInformationTableSeeder::class);
        $this->call(PackageTableSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(VendorUserSeeder::class);

    }
}
