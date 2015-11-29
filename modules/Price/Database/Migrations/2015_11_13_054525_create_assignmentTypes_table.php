<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentTypesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignmentTypes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->enum('status',['0','1']);
            $table->integer('parent_id');
            //$table->foreign('parent_id')->reference('id')->on('assignmentTypes');


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
        Schema::drop('assignmentTypes');
    }

}
