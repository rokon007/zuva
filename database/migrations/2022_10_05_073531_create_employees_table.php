<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email')->nullable(); 
			$table->string('phone')->nullable(); 
			$table->string('position')->nullable();           
            $table->string('salary')->nullable();	
			$table->longText('description')->nullable();
			$table->string('images')->nullable();                    
            $table->tinyInteger('status')->default('1');
            $table->string('creat_by')->nullable();			
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
        Schema::dropIfExists('employees');
    }
}
