<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('detail');
            $table->integer('price');
            $table->integer('stock');
            $table->integer('discount');
            $table->integer('user_id')->unsigned()->index();//هذا عبارة عن المستخدم الي انشأ هذا المنج
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
