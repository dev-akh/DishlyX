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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('url');
            $table->string('phone');
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('manager');
            $table->string('state');
            $table->string('city');
            $table->string('township')->nullable();
            $table->longText('address');
            $table->longText('geolocation')->nullable();
            $table->boolean('active')->default(0)->comment('0:inactive,1:active');
            $table->timestamps();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
