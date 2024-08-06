<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
class VendorUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendor =  User::create([
            'name' => 'Vendor',
            'email' => 'vendor@vendor.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'type' => 'System User',
            'status' => 'Active',
            'country_id' => 237,
            'mobile_number' => '0123456789',
            'office_number' => '0123456789',
            'company_name' => 'XYZ',
            'address' => 'XYZ',
            'unique_id' => uniqid(time()),

        ]);
        $vendor->assignRole('vendor_user');
    }
}
