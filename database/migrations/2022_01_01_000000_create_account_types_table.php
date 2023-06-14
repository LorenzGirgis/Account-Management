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
        Schema::create('account_types', function (Blueprint $table) {
            $table->id();
            $table->string('account_type');
        });

        DB::table('account_types')->insert([
            ['account_type' => 'Valorant'],
            ['account_type' => 'Discord'],
            ['account_type' => 'Email'],
            ['account_type' => 'Steam'],
            ['account_type' => 'Minecraft'],
            ['account_type' => 'Other'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_types');
    }
}
