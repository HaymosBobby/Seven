<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalTestCategory extends Model
{
    use HasFactory;

    public function tests() {
        return $this->hasMany(MedicalTest::class, 'category_id');
    }
}
