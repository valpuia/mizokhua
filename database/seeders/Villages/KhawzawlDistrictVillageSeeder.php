<?php

namespace Valpuia\Mizokhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\Mizokhua\Models\Village;

class KhawzawlDistrictVillageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $villages = [
            ['id' => '166', 'district_id' => '4', 'name' => 'Aiduzawl'],
            ['id' => '167', 'district_id' => '4', 'name' => 'Arro'],
            ['id' => '168', 'district_id' => '4', 'name' => 'Biate'],
            ['id' => '169', 'district_id' => '4', 'name' => 'Chalrang'],
            ['id' => '170', 'district_id' => '4', 'name' => 'Chawngtlai'],
            ['id' => '171', 'district_id' => '4', 'name' => 'Chhawrtui'],
            ['id' => '172', 'district_id' => '4', 'name' => 'Dulte'],
            ['id' => '173', 'district_id' => '4', 'name' => 'Hmuncheng'],
            ['id' => '174', 'district_id' => '4', 'name' => 'Kawlkulh North'],
            ['id' => '175', 'district_id' => '4', 'name' => 'Kawlkulh South'],
            ['id' => '176', 'district_id' => '4', 'name' => 'Khawhai'],
            ['id' => '177', 'district_id' => '4', 'name' => 'Khawzawl Arro Veng'],
            ['id' => '178', 'district_id' => '4', 'name' => 'Khawzawl Darngawn'],
            ['id' => '179', 'district_id' => '4', 'name' => 'Khawzawl Dinthar'],
            ['id' => '180', 'district_id' => '4', 'name' => 'Khawzawl Electric'],
            ['id' => '181', 'district_id' => '4', 'name' => 'Khawzawl Hermon'],
            ['id' => '182', 'district_id' => '4', 'name' => 'Khawzawl Kawnzar'],
            ['id' => '183', 'district_id' => '4', 'name' => 'Khawzawl Vengthar'],
            ['id' => '184', 'district_id' => '4', 'name' => 'Khawzawl Zaingen'],
            ['id' => '185', 'district_id' => '4', 'name' => 'Khawzawl Zuchhip'],
            ['id' => '186', 'district_id' => '4', 'name' => 'Khualen'],
            ['id' => '187', 'district_id' => '4', 'name' => 'Lungtan'],
            ['id' => '188', 'district_id' => '4', 'name' => 'Lungvar'],
            ['id' => '189', 'district_id' => '4', 'name' => 'Neihdawn'],
            ['id' => '190', 'district_id' => '4', 'name' => 'New Chalrang'],
            ['id' => '191', 'district_id' => '4', 'name' => 'Ngaizawl'],
            ['id' => '192', 'district_id' => '4', 'name' => 'Pamchung'],
            ['id' => '193', 'district_id' => '4', 'name' => 'Puilo'],
            ['id' => '194', 'district_id' => '4', 'name' => 'Rabung'],
            ['id' => '195', 'district_id' => '4', 'name' => 'Riangtlei'],
            ['id' => '196', 'district_id' => '4', 'name' => 'Sialhawk'],
            ['id' => '197', 'district_id' => '4', 'name' => 'Tlangmawi'],
            ['id' => '198', 'district_id' => '4', 'name' => 'Tlangpui'],
            ['id' => '199', 'district_id' => '4', 'name' => 'Tualpui'],
            ['id' => '200', 'district_id' => '4', 'name' => 'Tualte'],
            ['id' => '201', 'district_id' => '4', 'name' => 'Vanchengpui'],
            ['id' => '202', 'district_id' => '4', 'name' => 'Vangtlang'],
            ['id' => '203', 'district_id' => '4', 'name' => 'Vankal'],
        ];

        Village::upsert($villages, ['id']);
    }
}
