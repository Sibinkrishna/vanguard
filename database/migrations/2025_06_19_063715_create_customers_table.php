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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->text('address');
            $table->string('contact1');
            $table->string('contact2')->nullable();
            $table->string('iot_sim_number')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('software_name')->nullable();
            $table->decimal('renewal_amount', 10, 2)->nullable();
            $table->string('technician_name')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
