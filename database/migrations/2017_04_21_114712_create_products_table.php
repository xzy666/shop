<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('category_id')->comment('分类ID');
            $table->string('name')->comment('名称');
            $table->decimal('price')->default(0)->comment('单价');
            $table->integer('status')->default(1)->comment('状态');
            $table->integer('sort')->default(1000)->comment('排序');

            $table->index(['category_id', 'status']);

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
        Schema::dropIfExists('product');
    }
}
