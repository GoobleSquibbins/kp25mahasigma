<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('beasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('cover');
            $table->longText('description');
            $table->string('official_website');
            $table->string('contact_person');
            $table->longText('pdf')->nullable();
            $table->json('links')->nullable();
            $table->string('provider');
            $table->string('jenjang');
            $table->longText('amount');
            $table->integer('quota');
            $table->json('qualifications')->nullable();
            $table->json('benefits')->nullable();
            $table->date('open');
            $table->date('deadline');
            $table->string('status');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
