<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_product', function (Blueprint $table) {
            $table->bigIncrements('prod_id');
            $table->string('product_name');
            $table->string('product_slug');
            $table->string('product_img');
            $table->integer('product_gia');
            $table->integer('product_giakhuyenmai');
            $table->tinyInteger('product_trangthai');
            $table->string('product_thanhphan');
            $table->string('product_baohanh');
            $table->string('product_congdung');
            $table->string('product_hdsd');
            $table->unsignedBigInteger('prod_cate');
            $table->foreign('prod_cate')
                    ->references('cate_id')->on('db_category')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('db_product');
    }
}
