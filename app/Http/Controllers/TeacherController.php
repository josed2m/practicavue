<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Inertia\Inertia;

class TeacherController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Teacher/Index');
    }
    public function create()
    {
        //
        $teachers = Teacher::all();
        dd($teachers);
        return Inertia::render('Teacher/Create',[
            'teachers' => $teachers
        ]);
    }
}
