<?php

namespace Valpuia\Mizokhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\Mizokhua\Models\Village;

class AizawlDistrictVillageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $villages = [
            ['id' => '1', 'district_id' => '1', 'name' => 'Aibawk'],
            ['id' => '2', 'district_id' => '1', 'name' => 'Chamring'],
            ['id' => '3', 'district_id' => '1', 'name' => 'Chawilung'],
            ['id' => '4', 'district_id' => '1', 'name' => 'Chhanchhuahna Khawpui'],
            ['id' => '5', 'district_id' => '1', 'name' => 'Darlawn Chhim Veng'],
            ['id' => '6', 'district_id' => '1', 'name' => 'Darlawng'],
            ['id' => '7', 'district_id' => '1', 'name' => 'Darlawn Venghlun'],
            ['id' => '8', 'district_id' => '1', 'name' => 'Darlawn Vengpui'],
            ['id' => '9', 'district_id' => '1', 'name' => 'East Damdiai'],
            ['id' => '10', 'district_id' => '1', 'name' => 'E.Phaileng'],
            ['id' => '11', 'district_id' => '1', 'name' => 'Falkawn'],
            ['id' => '12', 'district_id' => '1', 'name' => 'Hmuifang'],
            ['id' => '13', 'district_id' => '1', 'name' => 'Hmunnghak'],
            ['id' => '14', 'district_id' => '1', 'name' => 'Hualngohmun'],
            ['id' => '15', 'district_id' => '1', 'name' => 'Kelsih'],
            ['id' => '16', 'district_id' => '1', 'name' => 'Kepran'],
            ['id' => '17', 'district_id' => '1', 'name' => 'Khawpuar'],
            ['id' => '18', 'district_id' => '1', 'name' => 'Khawruhlian'],
            ['id' => '19', 'district_id' => '1', 'name' => 'Lamchhip'],
            ['id' => '20', 'district_id' => '1', 'name' => 'Lengpui'],
            ['id' => '21', 'district_id' => '1', 'name' => 'Lungleng I'],
            ['id' => '22', 'district_id' => '1', 'name' => 'Lungsei'],
            ['id' => '23', 'district_id' => '1', 'name' => 'Lungsum'],
            ['id' => '24', 'district_id' => '1', 'name' => 'Maubuang'],
            ['id' => '25', 'district_id' => '1', 'name' => 'Mauchar'],
            ['id' => '26', 'district_id' => '1', 'name' => 'Melriat'],
            ['id' => '27', 'district_id' => '1', 'name' => 'Muallungthu'],
            ['id' => '28', 'district_id' => '1', 'name' => 'Muthi'],
            ['id' => '29', 'district_id' => '1', 'name' => 'Nausel'],
            ['id' => '30', 'district_id' => '1', 'name' => 'New Vervek'],
            ['id' => '31', 'district_id' => '1', 'name' => 'N.Khawdungsei'],
            ['id' => '32', 'district_id' => '1', 'name' => 'N.Lungleng'],
            ['id' => '33', 'district_id' => '1', 'name' => 'N.Serzawl'],
            ['id' => '34', 'district_id' => '1', 'name' => 'N.Tinghmun'],
            ['id' => '35', 'district_id' => '1', 'name' => 'Palsang'],
            ['id' => '36', 'district_id' => '1', 'name' => 'Pehlawn'],
            ['id' => '37', 'district_id' => '1', 'name' => 'Phulmawi'],
            ['id' => '38', 'district_id' => '1', 'name' => 'Phulpui'],
            ['id' => '39', 'district_id' => '1', 'name' => 'Ratu'],
            ['id' => '40', 'district_id' => '1', 'name' => 'Sailam'],
            ['id' => '41', 'district_id' => '1', 'name' => 'Sailutar'],
            ['id' => '42', 'district_id' => '1', 'name' => 'Sairang'],
            ['id' => '43', 'district_id' => '1', 'name' => 'Sairang Dinthar'],
            ['id' => '44', 'district_id' => '1', 'name' => 'Sairang Sihhmui'],
            ['id' => '45', 'district_id' => '1', 'name' => 'Sakawrdai'],
            ['id' => '46', 'district_id' => '1', 'name' => 'Samlukhai'],
            ['id' => '47', 'district_id' => '1', 'name' => 'Samtlang'],
            ['id' => '48', 'district_id' => '1', 'name' => 'Sateek'],
            ['id' => '49', 'district_id' => '1', 'name' => 'Sawleng'],
            ['id' => '50', 'district_id' => '1', 'name' => 'Seling'],
            ['id' => '51', 'district_id' => '1', 'name' => 'Sesawng I'],
            ['id' => '52', 'district_id' => '1', 'name' => 'Sesawng II'],
            ['id' => '53', 'district_id' => '1', 'name' => 'Sesawng III'],
            ['id' => '54', 'district_id' => '1', 'name' => 'Sialsuk'],
            ['id' => '55', 'district_id' => '1', 'name' => 'Sihphir'],
            ['id' => '56', 'district_id' => '1', 'name' => 'Sihphir Venghlun'],
            ['id' => '57', 'district_id' => '1', 'name' => 'Sumsuih'],
            ['id' => '58', 'district_id' => '1', 'name' => 'Sunhluchhip'],
            ['id' => '59', 'district_id' => '1', 'name' => 'Tachhip'],
            ['id' => '60', 'district_id' => '1', 'name' => 'Thiak'],
            ['id' => '61', 'district_id' => '1', 'name' => 'Thingsat'],
            ['id' => '62', 'district_id' => '1', 'name' => 'Thingsulthliah - I'],
            ['id' => '63', 'district_id' => '1', 'name' => 'Thingsulthliah - II'],
            ['id' => '64', 'district_id' => '1', 'name' => 'Thingsul Tlangnuam'],
            ['id' => '65', 'district_id' => '1', 'name' => 'Tlungvel'],
            ['id' => '66', 'district_id' => '1', 'name' => 'Tuirial'],
            ['id' => '67', 'district_id' => '1', 'name' => 'Tuirial Airfield'],
            ['id' => '68', 'district_id' => '1', 'name' => 'Upper Sakawrdai'],
            ['id' => '69', 'district_id' => '1', 'name' => 'Vaitin'],
            ['id' => '70', 'district_id' => '1', 'name' => 'Zohmun'],
            ['id' => '71', 'district_id' => '1', 'name' => 'Zokhawthiang'],
        ];

        Village::upsert($villages, ['id']);
    }
}
