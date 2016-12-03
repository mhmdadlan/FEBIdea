<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('projects', function ($table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->char('name');
            $table->integer('project_category');
            $table->char('cover_image');
            $table->float('lat');
            $table->float('lng');
            $table->text('pitch');
            $table->char('summery_graphs');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('projects');

    }
}
