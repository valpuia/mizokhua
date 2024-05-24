<?php

namespace Valpuia\Mizokhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\Mizokhua\Models\Village;

class HnahthialDistrictVillageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $villages = [
            ['id' => '134', 'district_id' => '3', 'name' => 'Aithur'],
            ['id' => '135', 'district_id' => '3', 'name' => 'Bualpui H'],
            ['id' => '136', 'district_id' => '3', 'name' => 'Bualpui V'],
            ['id' => '137', 'district_id' => '3', 'name' => 'Chawngtui South'],
            ['id' => '138', 'district_id' => '3', 'name' => 'Cherhlun'],
            ['id' => '139', 'district_id' => '3', 'name' => 'Chhipphir'],
            ['id' => '140', 'district_id' => '3', 'name' => 'Darzo'],
            ['id' => '141', 'district_id' => '3', 'name' => 'Denlung'],
            ['id' => '142', 'district_id' => '3', 'name' => 'Hnahthial North I'],
            ['id' => '143', 'district_id' => '3', 'name' => 'Hnahthial North II'],
            ['id' => '144', 'district_id' => '3', 'name' => 'Hnahthial South I'],
            ['id' => '145', 'district_id' => '3', 'name' => 'Hnahthial South II'],
            ['id' => '146', 'district_id' => '3', 'name' => 'Hnahthial South III'],
            ['id' => '147', 'district_id' => '3', 'name' => 'Khawhri'],
            ['id' => '148', 'district_id' => '3', 'name' => 'Leite'],
            ['id' => '149', 'district_id' => '3', 'name' => 'Lungmawi'],
            ['id' => '150', 'district_id' => '3', 'name' => 'Lungpuitlang'],
            ['id' => '151', 'district_id' => '3', 'name' => 'Muallianpui'],
            ['id' => '152', 'district_id' => '3', 'name' => 'New Kawnpui (Hnahthial)'],
            ['id' => '153', 'district_id' => '3', 'name' => 'New Ngharchhip'],
            ['id' => '154', 'district_id' => '3', 'name' => 'Ngharchhip'],
            ['id' => '155', 'district_id' => '3', 'name' => 'Pangzawl North'],
            ['id' => '156', 'district_id' => '3', 'name' => 'Pangzawl South'],
            ['id' => '157', 'district_id' => '3', 'name' => 'Phaileng South'],
            ['id' => '158', 'district_id' => '3', 'name' => 'Rawpui'],
            ['id' => '159', 'district_id' => '3', 'name' => 'Rotlang East'],
            ['id' => '160', 'district_id' => '3', 'name' => 'South Lungleng'],
            ['id' => '161', 'district_id' => '3', 'name' => 'South Vanlaiphai'],
            ['id' => '162', 'district_id' => '3', 'name' => 'Tarpho'],
            ['id' => '163', 'district_id' => '3', 'name' => 'Thiltlang'],
            ['id' => '164', 'district_id' => '3', 'name' => 'Thingsai'],
            ['id' => '165', 'district_id' => '3', 'name' => 'Tuipui D'],
        ];

        Village::upsert($villages, ['id']);
    }
}
