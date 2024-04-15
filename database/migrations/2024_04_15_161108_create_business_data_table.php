<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onDelete('cascade');
            $table->string('zone')->nullable();
            $table->string('seller')->nullable();
            $table->string('guarantor')->nullable();
            $table->text('contacts')->nullable();
            $table->decimal('credit_limit', 10, 2)->nullable();
            $table->enum('rating', ['Excelente', 'Bueno', 'Regular', 'Malo'])->nullable();
            $table->date('birthdate')->nullable();
            $table->string('profession')->nullable();
            $table->string('company')->nullable();
            $table->text('discounts')->nullable();
            $table->text('price_list')->nullable();
            $table->string('loyalty')->nullable();
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
        Schema::dropIfExists('business_data');
    }
}
