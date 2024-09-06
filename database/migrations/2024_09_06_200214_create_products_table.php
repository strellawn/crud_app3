<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nome_produto')->nullable();
            $table->string('marca')->nullable();
            $table->string('categoria')->nullable();
            $table->decimal('valor_compra', 8, 2)->nullable();
            $table->decimal('valor_venda', 8, 2)->nullable();
            $table->integer('qtd_estoque')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
