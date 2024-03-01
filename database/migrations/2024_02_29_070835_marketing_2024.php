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
        Schema::create('marketing_2024', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->float('month')->unsigned()->nullable();
            $table->string('source');
            $table->string('leads');
            $table->string('case_officer');
            $table->date('date_assigned')->nullable();
            $table->string('name');
            $table->string('nationality');
            $table->string('residence');
            $table->date('dob')->nullable();
            $table->float('age')->unsigned()->nullable();
            $table->string('email')->unique();
            $table->string('contact_number');
            $table->string('product_inquired');
            $table->string('other_message');
            $table->string('inquire_dependent');
            $table->string('number_dependent');
            $table->string('status');
            $table->string('product_offered');
            $table->float('quoted_premium')->unsigned()->nullable();
            $table->float('potential_commission')->unsigned()->nullable();
            $table->float('insured_headcount')->unsigned()->nullable();
            $table->date('placement_date')->nullable();
            $table->string('product_sold_offered');
            $table->float('premium_annual')->unsigned()->nullable();
            $table->string('commission_percentage');
            $table->float('commission')->unsigned()->nullable();
            $table->float('tat')->unsigned()->nullable();
            $table->string('reason');
            $table->string('remarks');
            $table->string('encode_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketing_2024');
    }
};
