<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Helpers\MigrationHelper;

class CreateFirstStageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            MigrationHelper::id_integer($table);
            $table->string('name');
            MigrationHelper::default_time_stamps($table);
            $table->rememberToken();
        });

        Schema::create('users', function (Blueprint $table) {
            MigrationHelper::id_string($table);
            $table->string('name', 100)->unique();
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_power_user')->default(1);
            MigrationHelper::foreign_integer($table, 'role_id', 'roles');
            MigrationHelper::default_time_stamps($table);
            $table->rememberToken();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email', 100)->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('patients', function (Blueprint $table) {
            MigrationHelper::id_string($table);
            $table->string('name');
            $table->string('last_name');
            $table->string('address');
            $table->integer('gender')->nullable();
            $table->string('personal_id', 100)->nullable()->unique();
            $table->date('birthdate');
            $table->integer('city');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            MigrationHelper::foreign_string($table, 'user_id', 'users');
            MigrationHelper::default_time_stamps($table);
            $table->rememberToken();
        });

        Schema::create('donors', function (Blueprint $table) {
            MigrationHelper::id_string($table);
            $table->string('name');
            $table->string('last_name');
            $table->string('address');
            $table->integer('gender')->nullable();
            $table->string('personal_id', 100)->nullable()->unique();
            $table->date('birthdate');
            $table->integer('city');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            MigrationHelper::foreign_string($table, 'user_id', 'users');
            MigrationHelper::default_time_stamps($table);
            $table->rememberToken();
        });

        Schema::create('waiting_lists', function (Blueprint $table) {
            MigrationHelper::id_string($table);
            $table->dateTime('date');
            $table->string('time_of_life');
            MigrationHelper::foreign_string($table,'user_id','users');
            MigrationHelper::foreign_string($table,'patient_id','patients');
            MigrationHelper::default_time_stamps($table);
        });


        Schema::create('compatibilitys', function (Blueprint $table) {
            MigrationHelper::id_string($table);
            $table->dateTime('date');
            MigrationHelper::foreign_string($table,'user_id','users');
            MigrationHelper::foreign_string($table,'patient_id','patients');
            MigrationHelper::foreign_string($table,'donor_id','donors');
            MigrationHelper::default_time_stamps($table);
        });


        Schema::create('directors', function (Blueprint $table) {
            MigrationHelper::id_string($table);
            $table->string('full_name');
            MigrationHelper::foreign_string($table, 'user_id', 'users');
            MigrationHelper::foreign_string($table, 'credential_id', 'users');
            MigrationHelper::default_time_stamps($table);
            $table->rememberToken();
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('first_stage');
    }
}
