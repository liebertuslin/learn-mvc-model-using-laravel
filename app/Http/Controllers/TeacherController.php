<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function show($id) {
        $name = Teacher::find($id)->name;
        return view('teacher', ['name' => $name]);
    }
}
