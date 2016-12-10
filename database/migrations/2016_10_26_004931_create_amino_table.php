<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAminoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amino', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('symbol');
            $table->string('picture');
            $table->string('polarity');
            $table->string('acidity');
            $table->string('codon');
            $table->string('esential');
            $table->string('isoelectric');
            $table->string('formula');
            $table->string('iupac');
            $table->string('molar');
            $table->string('hydropathy');
            $table->string('melting');
            $table->string('boiling');
            $table->string('density');
            $table->string('water');
            //$table->string('filePath');
            $table->timestamps();
        });

       //Schema::create('subcategories', function (Blueprint $table) {
       //$table->increments('id');
       //$table->string('subcategory_name')->unique();
       //$table->integer('category_id')->unsigned();
       //$table->timestamps();
   //});
}

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amino');
    }
}
