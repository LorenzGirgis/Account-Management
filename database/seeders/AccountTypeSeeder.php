<?php

namespace Database\Seeders;

use App\Models\AccountType;
use Illuminate\Database\Seeder;

class AccountTypeSeeder extends Seeder
{
    public function run(): void
    {
        $accountTypes = [
            'Valorant',
            'Discord',
            'Email',
            'Steam',
            'Minecraft',
            'Other',
        ];

        foreach ($accountTypes as $accountType) {
            AccountType::create([
                'account_type' => $accountType,
            ]);
        }
    }
}
