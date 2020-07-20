<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeopleTables extends Migration
{
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->string('job_title', 200)->nullable();
            $table->text('bio')->nullable();
        });

        Schema::create('person_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'person');
        });
    }

    public function down()
    {

        Schema::dropIfExists('person_slugs');
        Schema::dropIfExists('people');
    }
}
