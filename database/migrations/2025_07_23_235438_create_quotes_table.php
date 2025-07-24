<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('quotes', function (Blueprint $table) {
        $table->id();
        $table->string('moving_from');
        $table->string('moving_to');
        $table->string('property_type');
        $table->string('moving_date');
        $table->date('specific_date')->nullable();
        $table->text('other_details')->nullable();
        $table->string('enquiry');
        $table->string('quote_type');
        $table->boolean('previous_booking')->default(false);
        $table->string('first_name');
        $table->string('last_name');
        $table->string('email');
        $table->string('mobile_number');
        $table->json('addons')->nullable();
        $table->string('contact_time');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
