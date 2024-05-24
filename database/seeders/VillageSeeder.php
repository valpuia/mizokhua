<?php

namespace Valpuia\Mizokhua\Database\Seeders;

use Illuminate\Database\Seeder;
use Valpuia\Mizokhua\Database\Seeders\Villages\AizawlDistrictVillageSeeder;
use Valpuia\Mizokhua\Database\Seeders\Villages\ChamphaiDistrictVillageSeeder;
use Valpuia\Mizokhua\Database\Seeders\Villages\HnahthialDistrictVillageSeeder;
use Valpuia\Mizokhua\Database\Seeders\Villages\KhawzawlDistrictVillageSeeder;
use Valpuia\Mizokhua\Database\Seeders\Villages\KolasibDistrictVillageSeeder;
use Valpuia\Mizokhua\Database\Seeders\Villages\LawngtlaiDistrictVillageSeeder;
use Valpuia\Mizokhua\Database\Seeders\Villages\LungleiDistrictVillageSeeder;
use Valpuia\Mizokhua\Database\Seeders\Villages\MamitDistrictVillageSeeder;
use Valpuia\Mizokhua\Database\Seeders\Villages\SaitualDistrictVillageSeeder;
use Valpuia\Mizokhua\Database\Seeders\Villages\SerchhipDistrictVillageSeeder;
use Valpuia\Mizokhua\Database\Seeders\Villages\SiahaDistrictVillageSeeder;

class VillageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AizawlDistrictVillageSeeder::class,
            ChamphaiDistrictVillageSeeder::class,
            HnahthialDistrictVillageSeeder::class,
            KhawzawlDistrictVillageSeeder::class,
            KolasibDistrictVillageSeeder::class,
            LawngtlaiDistrictVillageSeeder::class,
            LungleiDistrictVillageSeeder::class,
            MamitDistrictVillageSeeder::class,
            SaitualDistrictVillageSeeder::class,
            SerchhipDistrictVillageSeeder::class,
            SiahaDistrictVillageSeeder::class,
        ]);
    }
}
