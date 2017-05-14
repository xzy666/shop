<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id');

            $table->string('browser_tag')->default('')->comment('浏览器标记')->index();
            $table->integer('member_id')->default(0)->comment('会员ID')->index();
            $table->integer('product_id')->comment('商品ID');
            $table->string('product_name')->comment('商品名称');
            $table->decimal('price')->comment('单价');
            $table->integer('qty')->default(1)->comment('数量');
            $table->string('attribute')->default('')->comment('其它属性');//color size

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
        Schema::dropIfExists('cart');
    }
}
