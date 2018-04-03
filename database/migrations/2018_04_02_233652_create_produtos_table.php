<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->integer('quantidade');
            $table->decimal('valor', 15, 2);
            $table->date('data_vencimento')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
