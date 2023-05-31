<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('fk_department')->constrained('departments');
            $table->foreignId('fk_designation')->constrained('designations');
            $table->string('phone_number');
            $table->timestamp('created_at')->useCurrent();
        });
        $now = Carbon::now();
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'fk_department' => '1',
                'fk_designation' => '1',
                'phone_number' => '2323232323',
                'created_at' => $now,
            ],
            [
                'name' => 'Jane Smith',
                'fk_department' => '1',
                'fk_designation' => '2',
                'phone_number' => '5757575757',
                'created_at' => $now,
            ],
            [
                'name' => 'Tommy mark',
                'fk_department' => '2',
                'fk_designation' => '1',
                'phone_number' => '6767676767',
                'created_at' => $now,
            ],
            [
                'name' => 'Dean winchester',
                'fk_department' => '2',
                'fk_designation' => '2',
                'phone_number' => '0909090909',
                'created_at' => $now,
            ],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
