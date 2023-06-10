<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAccountTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_type', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        // Insert initial account types
        $types = [
            ['name' => 'Valorant'],
            ['name' => 'Discord'],
            ['name' => 'Email'],
            ['name' => 'Steam'],
            ['name' => 'Minecraft'],
            ['name' => 'Other'],
        ];

        DB::table('account_type')->insert($types);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_type');
    }
}
