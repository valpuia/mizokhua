<?php

namespace Valpuia\Mizokhua\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Valpuia\Mizokhua\Database\Seeders\DistrictSeeder;
use Valpuia\Mizokhua\Database\Seeders\VillageSeeder;

#[AsCommand('mizokhua:seed')]
class MizokhuaSeederCommand extends Command
{
    public $description = 'Published and seed Mizoram countries & villages';

    public function handle(): int
    {
        $this->call('db:seed', [
            '--class' => DistrictSeeder::class,
        ]);

        $this->call('db:seed', [
            '--class' => VillageSeeder::class,
        ]);

        $this->info('Mizoram districts and villages seeds successfully');

        return self::SUCCESS;
    }
}
