<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sku')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('wheight')->nullable();
            $table->string('short_description', 20)->nullable();
            $table->string('description')->nullable();
            $table->float('price');
            $table->float('cost')->nullable();
            $table->float('discount')->nullable();
            $table->boolean('free_shipping')->default(false);
            $table->boolean('is_active')->default(true);
            $table->string('image');

            $table->foreignId('category_id')
                ->references('id')
                ->on('categories')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
