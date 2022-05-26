<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('address', 100)->nullable();
            $table->decimal('price', 10,2);
            $table->string('type',100);
            $table->integer('square_meters' );
            $table->tinyInteger('rooms');
            $table->boolean('is_new');
            $table->boolean('is_available');
            $table->boolean('bare_ownership');
            $table->boolean('is_empty');
            $table->tinyInteger('bathrooms')->default(1);
            $table->tinyInteger('floors');
            $table->string('postal_code');
            $table->text('description');
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
        Schema::dropIfExists('houses');
    }
}
