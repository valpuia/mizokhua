<?php

namespace Valpuia\Mizokhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\Mizokhua\Models\Village;

class SerchhipDistrictVillageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $villages = [
            ['id' => '720', 'district_id' => '10', 'name' => 'Baktawng Vengpui'],
            ['id' => '721', 'district_id' => '10', 'name' => 'Bawktlang'],
            ['id' => '722', 'district_id' => '10', 'name' => 'Buangpui'],
            ['id' => '723', 'district_id' => '10', 'name' => 'Buhkangkawn'],
            ['id' => '724', 'district_id' => '10', 'name' => 'Bungtlang'],
            ['id' => '725', 'district_id' => '10', 'name' => 'Chekawn'],
            ['id' => '726', 'district_id' => '10', 'name' => 'Chhiahtlang North'],
            ['id' => '727', 'district_id' => '10', 'name' => 'Chhiahtlang South'],
            ['id' => '728', 'district_id' => '10', 'name' => 'Chhingchhip'],
            ['id' => '729', 'district_id' => '10', 'name' => 'Chhuanthar Tlangnuam'],
            ['id' => '730', 'district_id' => '10', 'name' => 'Darnam'],
            ['id' => '731', 'district_id' => '10', 'name' => 'E.Lungdar'],
            ['id' => '732', 'district_id' => '10', 'name' => 'Hmawngkawn'],
            ['id' => '733', 'district_id' => '10', 'name' => 'Hmuntha'],
            ['id' => '734', 'district_id' => '10', 'name' => 'Hmunzawl'],
            ['id' => '735', 'district_id' => '10', 'name' => 'Hriangtlang'],
            ['id' => '736', 'district_id' => '10', 'name' => 'Hualtu'],
            ['id' => '737', 'district_id' => '10', 'name' => 'Kanghmun South'],
            ['id' => '738', 'district_id' => '10', 'name' => 'Keitum'],
            ['id' => '739', 'district_id' => '10', 'name' => 'Khawbel'],
            ['id' => '740', 'district_id' => '10', 'name' => 'Khawlailung'],
            ['id' => '741', 'district_id' => '10', 'name' => 'Khumtung'],
            ['id' => '742', 'district_id' => '10', 'name' => 'Leng'],
            ['id' => '743', 'district_id' => '10', 'name' => 'Lungchhuan'],
            ['id' => '744', 'district_id' => '10', 'name' => 'Lungkawlh'],
            ['id' => '745', 'district_id' => '10', 'name' => 'Lungpho'],
            ['id' => '746', 'district_id' => '10', 'name' => 'Mualcheng'],
            ['id' => '747', 'district_id' => '10', 'name' => 'Mualpui Chhingchhip'],
            ['id' => '748', 'district_id' => '10', 'name' => 'Neihloh'],
            ['id' => '749', 'district_id' => '10', 'name' => 'New Serchhip North'],
            ['id' => '750', 'district_id' => '10', 'name' => 'New Serchhip South'],
            ['id' => '751', 'district_id' => '10', 'name' => 'Ngentiang'],
            ['id' => '752', 'district_id' => '10', 'name' => 'North Vanlaiphai'],
            ['id' => '753', 'district_id' => '10', 'name' => 'Piler'],
            ['id' => '754', 'district_id' => '10', 'name' => 'Rullam'],
            ['id' => '755', 'district_id' => '10', 'name' => 'Sailulak'],
            ['id' => '756', 'district_id' => '10', 'name' => 'Serchhip Chanmari Veng'],
            ['id' => '757', 'district_id' => '10', 'name' => 'Serchhip I'],
            ['id' => '758', 'district_id' => '10', 'name' => 'Serchhip II'],
            ['id' => '759', 'district_id' => '10', 'name' => 'Serchhip III'],
            ['id' => '760', 'district_id' => '10', 'name' => 'Serchhip IV'],
            ['id' => '761', 'district_id' => '10', 'name' => 'Serchhip V'],
            ['id' => '762', 'district_id' => '10', 'name' => 'Serchhip VI'],
            ['id' => '763', 'district_id' => '10', 'name' => 'Serchhip VII'],
            ['id' => '764', 'district_id' => '10', 'name' => 'Serchhip VIII'],
            ['id' => '765', 'district_id' => '10', 'name' => 'Sialhau'],
            ['id' => '766', 'district_id' => '10', 'name' => 'Sialsir'],
            ['id' => '767', 'district_id' => '10', 'name' => 'Thentlang'],
            ['id' => '768', 'district_id' => '10', 'name' => 'Thenzawl East'],
            ['id' => '769', 'district_id' => '10', 'name' => 'Thenzawl Kanan'],
            ['id' => '770', 'district_id' => '10', 'name' => 'Thenzawl Vengthar'],
            ['id' => '771', 'district_id' => '10', 'name' => 'Thenzawl West'],
            ['id' => '772', 'district_id' => '10', 'name' => 'Thinglian'],
            ['id' => '773', 'district_id' => '10', 'name' => 'Vanchengte'],
            ['id' => '774', 'district_id' => '10', 'name' => 'Zote S'],
        ];

        Village::upsert($villages, ['id']);
    }
}
