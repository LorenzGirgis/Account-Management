<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run()
    {
        $accountTypes = [
            ['account_type' => 'Valorant'],
            ['account_type' => 'Discord'],
            ['account_type' => 'Email'],
            ['account_type' => 'Steam'],
            ['account_type' => 'Minecraft'],
            ['account_type' => 'Other'],
        ];

        DB::table('account_types')->insert($accountTypes);
    }
}
