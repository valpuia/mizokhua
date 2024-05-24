<?php

namespace Valpuia\Mizokhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\Mizokhua\Models\Village;

class KolasibDistrictVillageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $villages = [
            ['id' => '204', 'district_id' => '5', 'name' => 'Bairabi North'],
            ['id' => '205', 'district_id' => '5', 'name' => 'Barabi South'],
            ['id' => '206', 'district_id' => '5', 'name' => 'Bilkhawthlir North'],
            ['id' => '207', 'district_id' => '5', 'name' => 'Bilkhawthlir South'],
            ['id' => '208', 'district_id' => '5', 'name' => 'Bualpui North'],
            ['id' => '209', 'district_id' => '5', 'name' => 'Buhchangphai'],
            ['id' => '210', 'district_id' => '5', 'name' => 'Bukpui'],
            ['id' => '211', 'district_id' => '5', 'name' => 'Bukvannei'],
            ['id' => '212', 'district_id' => '5', 'name' => 'Hortoki'],
            ['id' => '213', 'district_id' => '5', 'name' => 'Kawnpui I'],
            ['id' => '214', 'district_id' => '5', 'name' => 'Kawnpui II'],
            ['id' => '215', 'district_id' => '5', 'name' => 'Kawnpui III'],
            ['id' => '216', 'district_id' => '5', 'name' => 'Kawnpui Venglai'],
            ['id' => '217', 'district_id' => '5', 'name' => 'Khamrang'],
            ['id' => '218', 'district_id' => '5', 'name' => 'Kolasib College Veng'],
            ['id' => '219', 'district_id' => '5', 'name' => 'Kolasib Diakkawn'],
            ['id' => '220', 'district_id' => '5', 'name' => 'Kolasib Electric Veng'],
            ['id' => '221', 'district_id' => '5', 'name' => 'Kolasib Gosen'],
            ['id' => '222', 'district_id' => '5', 'name' => 'Kolasib Hmar Veng'],
            ['id' => '223', 'district_id' => '5', 'name' => 'Kolasib Khuangpuilam'],
            ['id' => '224', 'district_id' => '5', 'name' => 'Kolasib New Diakkawn'],
            ['id' => '225', 'district_id' => '5', 'name' => 'Kolasib Project Veng'],
            ['id' => '226', 'district_id' => '5', 'name' => 'Kolasib Rengtekawn'],
            ['id' => '227', 'district_id' => '5', 'name' => 'Kolasib Saidan'],
            ['id' => '228', 'district_id' => '5', 'name' => 'Kolasib Tuitha Veng'],
            ['id' => '229', 'district_id' => '5', 'name' => 'Kolasib Tumpui'],
            ['id' => '230', 'district_id' => '5', 'name' => 'Kolasib Venglai'],
            ['id' => '231', 'district_id' => '5', 'name' => 'Kolasib Venglai East'],
            ['id' => '232', 'district_id' => '5', 'name' => 'Kolasib Vengthar'],
            ['id' => '233', 'district_id' => '5', 'name' => 'Lungdai'],
            ['id' => '234', 'district_id' => '5', 'name' => 'Lungmuat'],
            ['id' => '235', 'district_id' => '5', 'name' => 'Meidum'],
            ['id' => '236', 'district_id' => '5', 'name' => 'Mualkhang'],
            ['id' => '237', 'district_id' => '5', 'name' => 'N.Chawnpui'],
            ['id' => '238', 'district_id' => '5', 'name' => 'N.Chhimluang'],
            ['id' => '239', 'district_id' => '5', 'name' => 'New Builum'],
            ['id' => '240', 'district_id' => '5', 'name' => 'N.Hlimen'],
            ['id' => '241', 'district_id' => '5', 'name' => 'Nisapui'],
            ['id' => '242', 'district_id' => '5', 'name' => 'North Chaltlang - I'],
            ['id' => '243', 'district_id' => '5', 'name' => 'North Chaltlang - II'],
            ['id' => '244', 'district_id' => '5', 'name' => 'N.Thinglian'],
            ['id' => '245', 'district_id' => '5', 'name' => 'Pangbalkawn'],
            ['id' => '246', 'district_id' => '5', 'name' => 'Phainuam'],
            ['id' => '247', 'district_id' => '5', 'name' => 'Phaisen'],
            ['id' => '248', 'district_id' => '5', 'name' => 'Saihapui K'],
            ['id' => '249', 'district_id' => '5', 'name' => 'Saihapui V'],
            ['id' => '250', 'district_id' => '5', 'name' => 'Saiphai'],
            ['id' => '251', 'district_id' => '5', 'name' => 'Saipum'],
            ['id' => '252', 'district_id' => '5', 'name' => 'S.Chhimluang'],
            ['id' => '253', 'district_id' => '5', 'name' => 'Serkhan'],
            ['id' => '254', 'district_id' => '5', 'name' => 'Thingdawl'],
            ['id' => '255', 'district_id' => '5', 'name' => 'Thingthelh'],
            ['id' => '256', 'district_id' => '5', 'name' => 'Vairengte I'],
            ['id' => '257', 'district_id' => '5', 'name' => 'Vairengte II'],
            ['id' => '258', 'district_id' => '5', 'name' => 'Vairengte III (Ioc Veng)'],
            ['id' => '259', 'district_id' => '5', 'name' => 'Vairengte IV (State Veng)'],
            ['id' => '260', 'district_id' => '5', 'name' => 'Zanlawn'],
        ];

        Village::upsert($villages, ['id']);
    }
}
