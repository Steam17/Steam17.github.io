<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $items = [
            ['name' => 'Copenhagen', 'description' => ''],
            ['name' => 'Aarhus', 'description' => '']
        ];

        foreach ($items as $item) {
            Location::updateOrCreate($item);
        }
    }
}
