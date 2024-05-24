<?php

namespace Valpuia\Mizokhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\Mizokhua\Models\Village;

class SaitualDistrictVillageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $villages = [
            ['id' => '676', 'district_id' => '9', 'name' => 'Buhban'],
            ['id' => '677', 'district_id' => '9', 'name' => 'Changzawl'],
            ['id' => '678', 'district_id' => '9', 'name' => 'Chiahpui'],
            ['id' => '679', 'district_id' => '9', 'name' => 'Daido'],
            ['id' => '680', 'district_id' => '9', 'name' => 'Dilkhan'],
            ['id' => '681', 'district_id' => '9', 'name' => 'Hliappui'],
            ['id' => '682', 'district_id' => '9', 'name' => 'Hrianghmun'],
            ['id' => '683', 'district_id' => '9', 'name' => 'Kawlbem'],
            ['id' => '684', 'district_id' => '9', 'name' => 'Keifang Leitan'],
            ['id' => '685', 'district_id' => '9', 'name' => 'Keifang Venghlun'],
            ['id' => '686', 'district_id' => '9', 'name' => 'Keifang Venglai'],
            ['id' => '687', 'district_id' => '9', 'name' => 'Khanpui'],
            ['id' => '688', 'district_id' => '9', 'name' => 'Khawkawn'],
            ['id' => '689', 'district_id' => '9', 'name' => 'Khawlian'],
            ['id' => '690', 'district_id' => '9', 'name' => 'Lailak'],
            ['id' => '691', 'district_id' => '9', 'name' => 'Lamherh'],
            ['id' => '692', 'district_id' => '9', 'name' => 'Lamzawl'],
            ['id' => '693', 'district_id' => '9', 'name' => 'Lenchim'],
            ['id' => '694', 'district_id' => '9', 'name' => 'Luangpawn'],
            ['id' => '695', 'district_id' => '9', 'name' => 'Maite'],
            ['id' => '696', 'district_id' => '9', 'name' => 'Mimbung'],
            ['id' => '697', 'district_id' => '9', 'name' => 'Mualpheng'],
            ['id' => '698', 'district_id' => '9', 'name' => 'N.E.Khawdungsei'],
            ['id' => '699', 'district_id' => '9', 'name' => 'N.E.Tlangnuam'],
            ['id' => '700', 'district_id' => '9', 'name' => 'Ngopa'],
            ['id' => '701', 'district_id' => '9', 'name' => 'N.Khawlek'],
            ['id' => '702', 'district_id' => '9', 'name' => 'N.Lungpher'],
            ['id' => '703', 'district_id' => '9', 'name' => 'Pawlrang'],
            ['id' => '704', 'district_id' => '9', 'name' => 'Phuaibuang'],
            ['id' => '705', 'district_id' => '9', 'name' => 'Phullen'],
            ['id' => '706', 'district_id' => '9', 'name' => 'Ruallung'],
            ['id' => '707', 'district_id' => '9', 'name' => 'Rulchawm'],
            ['id' => '708', 'district_id' => '9', 'name' => 'Saichal'],
            ['id' => '709', 'district_id' => '9', 'name' => 'Saitual I'],
            ['id' => '710', 'district_id' => '9', 'name' => 'Saitual II'],
            ['id' => '711', 'district_id' => '9', 'name' => 'Saitual III'],
            ['id' => '712', 'district_id' => '9', 'name' => 'Sihfa'],
            ['id' => '713', 'district_id' => '9', 'name' => 'Suangpuilawn'],
            ['id' => '714', 'district_id' => '9', 'name' => 'Tawizo'],
            ['id' => '715', 'district_id' => '9', 'name' => 'Teikhang'],
            ['id' => '716', 'district_id' => '9', 'name' => 'Thanglailung'],
            ['id' => '717', 'district_id' => '9', 'name' => 'Tualbung'],
            ['id' => '718', 'district_id' => '9', 'name' => 'Vanbawng'],
            ['id' => '719', 'district_id' => '9', 'name' => 'Zawngin'],
        ];

        Village::upsert($villages, ['id']);
    }
}
