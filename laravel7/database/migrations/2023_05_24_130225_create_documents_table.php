<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('titre');
            $table->mediumText('resume');
            $table->mediumText('description_courte');
            $table->longText('description_longue');
            $table->string('thumball');
            $table->string('pdf');
            $table->string('doc');
            $table->string('preuve');
            $table->string('status')->default('enattente');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('filiere_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('documents');
    }
}