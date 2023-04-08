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
        Schema::create('footer_elems', function (Blueprint $table) {
            $table->id();
            $table->string('logo_url');
            $table->string('about_company');
            $table->string('subtitle');
            $table->string('company');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('by');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footer_elems');
    }
};
