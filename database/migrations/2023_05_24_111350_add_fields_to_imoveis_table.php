<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('imoveis', function (Blueprint $table) {
            $table->unsignedSmallInteger('quartos');
            $table->unsignedSmallInteger('banheiros');
            $table->unsignedSmallInteger('area');

            $table->tinyText('cidade')->nullable();
            $table->tinyText('cep')->nullable();
            $table->tinyText('endereco')->nullable();
            $table->tinyText('endereco_numero')->nullable();
            $table->tinyText('endereco_complemento')->nullable();

            $table->unsignedDouble('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumns(
            'imoveis',
            [
                'quartos',
                'banheiros',
                'area',
                'cidade',
                'cep',
                'endereco',
                'endereco_numero',
                'endereco_complemento',
                'price'
            ]
        );
    }
};
