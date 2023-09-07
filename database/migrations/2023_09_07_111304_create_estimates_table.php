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
        Schema::create('estimates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_name');
            $table->string('email');
            $table->string('tel');
            $table->string('company')->nullable();
            $table->string('activity')->nullable();
            $table->boolean('showcase_site');
            $table->boolean('e_commerce');
            $table->boolean('web_app');
            $table->boolean('mobile_app');
            $table->boolean('seo');
            $table->boolean('other');
            $table->text('description');
            $table->string('promo_code')->nullable();
            $table->string('status')->default('on_hold');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estimates');
    }
};
