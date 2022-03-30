<?php

namespace App\Helpers;

use Illuminate\Database\Schema\Blueprint;
use Webpatser\Uuid\Uuid;

class MigrationHelper{
    static function id_string(Blueprint $table)
    {
        $table->uuid('id')->primary();
    }

    static function id_integer(Blueprint $table)
    {
      $table->bigIncrements('id');
    }

    static function foreign_integer(Blueprint $table,$name_colum,$foreign_table)
    {
        $table->bigInteger($name_colum)->unsigned();
        $table->foreign($name_colum)->references('id')->on($foreign_table);
    }
    static function foreign_string(Blueprint $table,$name_colum,$foreign_table, $nullable = false)
    {
        if ($nullable){
          $table->string($name_colum, 60)->nullable();
        }
        else{
          $table->string($name_colum, 60);
        }

        $table->foreign($name_colum)->references('id')->on($foreign_table);
    }

    static function default_time_stamps(Blueprint $table){
        $table->softDeletes();
        $table->timestamps();
    }

    static function generate_id(){
        return Uuid::generate()->string;
    }
}

?>
