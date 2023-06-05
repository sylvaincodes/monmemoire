<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('type', ['internaute', 'admin', 'superadmin'])->default('internaute');
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->string('filiere')->nullable();
            $table->string('matricule')->nullable();
            $table->string('whatsapp')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('filiere_id')->nullable()->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->string('status')->default('actif');
            $table->boolean('is_logged')->default(false);
            $table->string('avatar')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}