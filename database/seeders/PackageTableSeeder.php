<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Package;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
              'name' => 'Silver',
              'description' => 'None',
              'price' => '100',
              'sanctions' => '10',
              'start_date' => now(),
              'end_date' => Carbon::now()->addYear(),
              'status' => 'active'
            ],
            [
              'name' => 'Gold',
              'description' => 'None',
              'price' => '200',
              'sanctions' => '20',
                'start_date' => now(),
                'end_date' => Carbon::now()->addYear(),
                'status' => 'active'
            ],
            [
              'name' => 'Platinum',
              'description' => 'none',
              'price' => '300',
              'sanctions' => '30',
                'start_date' => now(),
                'end_date' => Carbon::now()->addYear(),
                'status' => 'active'
            ],
        ];

        foreach($items as $item){
            Package::create($item);
        }
    }
}
