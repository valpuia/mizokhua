<?php

namespace Valpuia\Mizokhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\Mizokhua\Models\Village;

class ChamphaiDistrictVillageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $villages = [
            ['id' => '72', 'district_id' => '2', 'name' => 'Bethel'],
            ['id' => '73', 'district_id' => '2', 'name' => 'Buang'],
            ['id' => '74', 'district_id' => '2', 'name' => 'Bulfekzawl'],
            ['id' => '75', 'district_id' => '2', 'name' => 'Bungzung'],
            ['id' => '76', 'district_id' => '2', 'name' => 'Champhai Jail Veng'],
            ['id' => '77', 'district_id' => '2', 'name' => 'Champhai Vengthar'],
            ['id' => '78', 'district_id' => '2', 'name' => 'Chawngtui E'],
            ['id' => '79', 'district_id' => '2', 'name' => 'Chhungte'],
            ['id' => '80', 'district_id' => '2', 'name' => 'Dilkawn'],
            ['id' => '81', 'district_id' => '2', 'name' => 'Dinthar'],
            ['id' => '82', 'district_id' => '2', 'name' => 'Dungtlang'],
            ['id' => '83', 'district_id' => '2', 'name' => 'Electric Veng'],
            ['id' => '84', 'district_id' => '2', 'name' => 'Farkawn'],
            ['id' => '85', 'district_id' => '2', 'name' => 'Hmunhmeltha'],
            ['id' => '86', 'district_id' => '2', 'name' => 'Hnahlan'],
            ['id' => '87', 'district_id' => '2', 'name' => 'Hruaikawn'],
            ['id' => '88', 'district_id' => '2', 'name' => 'Kahrawt'],
            ['id' => '89', 'district_id' => '2', 'name' => 'Kanan'],
            ['id' => '90', 'district_id' => '2', 'name' => 'Kelkang'],
            ['id' => '91', 'district_id' => '2', 'name' => 'Khankawn'],
            ['id' => '92', 'district_id' => '2', 'name' => 'Khawbung South'],
            ['id' => '93', 'district_id' => '2', 'name' => 'Khuangleng'],
            ['id' => '94', 'district_id' => '2', 'name' => 'Khuangphah'],
            ['id' => '95', 'district_id' => '2', 'name' => 'Khuangthing'],
            ['id' => '96', 'district_id' => '2', 'name' => 'Leisenzo'],
            ['id' => '97', 'district_id' => '2', 'name' => 'Leithum'],
            ['id' => '98', 'district_id' => '2', 'name' => 'Lianpui'],
            ['id' => '99', 'district_id' => '2', 'name' => 'Lungphunlian'],
            ['id' => '100', 'district_id' => '2', 'name' => 'Melbuk'],
            ['id' => '101', 'district_id' => '2', 'name' => 'Mualkawi'],
            ['id' => '102', 'district_id' => '2', 'name' => 'Murlen'],
            ['id' => '103', 'district_id' => '2', 'name' => 'N. Diltlang'],
            ['id' => '104', 'district_id' => '2', 'name' => 'New Champhai'],
            ['id' => '105', 'district_id' => '2', 'name' => 'New Hruaikawn'],
            ['id' => '106', 'district_id' => '2', 'name' => 'Ngur'],
            ['id' => '107', 'district_id' => '2', 'name' => 'N.Khawbung'],
            ['id' => '108', 'district_id' => '2', 'name' => 'Ruantlang'],
            ['id' => '109', 'district_id' => '2', 'name' => 'Ruantlang Mual Veng'],
            ['id' => '110', 'district_id' => '2', 'name' => 'Samthang (Old)'],
            ['id' => '111', 'district_id' => '2', 'name' => 'Sazep'],
            ['id' => '112', 'district_id' => '2', 'name' => 'Selam'],
            ['id' => '113', 'district_id' => '2', 'name' => 'Sesih'],
            ['id' => '114', 'district_id' => '2', 'name' => 'Thekpui'],
            ['id' => '115', 'district_id' => '2', 'name' => 'Thekte'],
            ['id' => '116', 'district_id' => '2', 'name' => 'Tlangsam'],
            ['id' => '117', 'district_id' => '2', 'name' => 'Tualcheng'],
            ['id' => '118', 'district_id' => '2', 'name' => 'Tuipui'],
            ['id' => '119', 'district_id' => '2', 'name' => 'Vaikhawtlang'],
            ['id' => '120', 'district_id' => '2', 'name' => 'Vangchhia'],
            ['id' => '121', 'district_id' => '2', 'name' => 'Vanzau'],
            ['id' => '122', 'district_id' => '2', 'name' => 'Vapar'],
            ['id' => '123', 'district_id' => '2', 'name' => 'Vaphai'],
            ['id' => '124', 'district_id' => '2', 'name' => 'Venglai'],
            ['id' => '125', 'district_id' => '2', 'name' => 'Vengsang'],
            ['id' => '126', 'district_id' => '2', 'name' => 'Vengthlang'],
            ['id' => '127', 'district_id' => '2', 'name' => 'Vengthlang North'],
            ['id' => '128', 'district_id' => '2', 'name' => 'Zawlsei'],
            ['id' => '129', 'district_id' => '2', 'name' => 'Zawngtetui'],
            ['id' => '130', 'district_id' => '2', 'name' => 'Zion Veng'],
            ['id' => '131', 'district_id' => '2', 'name' => 'Zokhawthar'],
            ['id' => '132', 'district_id' => '2', 'name' => 'Zote'],
            ['id' => '133', 'district_id' => '2', 'name' => 'Zotlang East'],
        ];

        Village::upsert($villages, ['id']);
    }
}
