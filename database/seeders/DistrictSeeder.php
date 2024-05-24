<?php

namespace Valpuia\Mizokhua\Database\Seeders;

use Illuminate\Database\Seeder;
use Valpuia\Mizokhua\Models\District;

class DistrictSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $districts = [
            ['id' => '1', 'name' => 'Aizawl'],
            ['id' => '2', 'name' => 'Champhai'],
            ['id' => '3', 'name' => 'Hnahthial'],
            ['id' => '4', 'name' => 'Khawzawl'],
            ['id' => '5', 'name' => 'Kolasib'],
            ['id' => '6', 'name' => 'Lawngtlai'],
            ['id' => '7', 'name' => 'Lunglei'],
            ['id' => '8', 'name' => 'Mamit'],
            ['id' => '9', 'name' => 'Saitual'],
            ['id' => '10', 'name' => 'Serchhip'],
            ['id' => '11', 'name' => 'Siaha'],
        ];

        District::upsert($districts, ['id']);
    }
}
