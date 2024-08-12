<?php

use App\Models\MedicalTestCategory;
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

        Schema::create('medical_test_categories', function (Blueprint $table) {

            $table->id();
            $table->string('name');

            $table->timestamps();
        });

        MedicalTestCategory::insert([
            [ 'name' => 'X-Ray' ], 
            [ 'name' => 'Ultrasound Scan' ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_test_categories');
    }
};
