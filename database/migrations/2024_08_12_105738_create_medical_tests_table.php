<?php

use App\Models\MedicalTest;
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
        Schema::create('medical_tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('medical_test_categories')->cascadeOnDelete();
            $table->string('name');
            $table->timestamps();
        });

        MedicalTest::insert([
            ['category_id' => 1, 'name' => 'Chest'],
            ['category_id' => 1, 'name' => 'Cervical Vertebrae'],
            ['category_id' => 1, 'name' => 'Thoracic Vertebrae'],
            ['category_id' => 1, 'name' => 'Lumvar Vertebrae'],
            ['category_id' => 1, 'name' => 'Lumbo Sacral Vertebrae'],
            ['category_id' => 1, 'name' => 'Thoraco Lumbar Vertebrae'],
            ['category_id' => 1, 'name' => 'Wrist Joint'],
            ['category_id' => 1, 'name' => 'Thoracic Inlet'],
            ['category_id' => 1, 'name' => 'Shoulder Joint'],
            ['category_id' => 1, 'name' => 'Elbow Joint'],
            ['category_id' => 1, 'name' => 'Knee Joint'],
            ['category_id' => 1, 'name' => 'Sacro Iliac Joint'],
            ['category_id' => 1, 'name' => 'Pelvic Joint'],
            ['category_id' => 1, 'name' => 'Hip Joint'],
            ['category_id' => 1, 'name' => 'Femoral'],
            ['category_id' => 1, 'name' => 'Ankle'],
            ['category_id' => 1, 'name' => 'Humerus'],
            ['category_id' => 1, 'name' => 'Radius/Ulner'],
            ['category_id' => 1, 'name' => 'Foot'],
            ['category_id' => 1, 'name' => 'Tibia/Fibula'],
            ['category_id' => 1, 'name' => 'Fingers'],
            ['category_id' => 1, 'name' => 'Toes'],
            ['category_id' => 2, 'name' => 'Obstetric'],
            ['category_id' => 2, 'name' => 'Abdioninal'],
            ['category_id' => 2, 'name' => 'Pelvis'],
            ['category_id' => 2, 'name' => 'Prostrate'],
            ['category_id' => 2, 'name' => 'Breast'],
            ['category_id' => 2, 'name' => 'Thyroid'],
            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_tests');
    }
};
