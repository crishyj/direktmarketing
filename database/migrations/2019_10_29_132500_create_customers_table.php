<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->integer('budget')->default(0);
            $table->string('email_marketing')->nullable();
            $table->string('callcenter')->nullable();
            $table->string('postal_Address')->nullable();
            $table->string('germany')->nullable();
            $table->string('austria')->nullable();
            $table->string('switzerland')->nullable();
            $table->string('supplier_company')->nullable();
            $table->string('supplier_personal')->nullable();
            $table->string('title')->nullable();
            $table->text('target_group_desc')->nullable();
            $table->string('email_verified')->nullable();
            $table->string('verfy_code')->nullable();
            $table->string('oneform')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
