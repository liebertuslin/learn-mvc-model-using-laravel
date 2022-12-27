<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // cara membuat 1 contact untuk 1 student, dengan cara:
    public function contact() {
        return $this->hasOne(Contact::class);
    }
}
