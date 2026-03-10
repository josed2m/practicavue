<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use Inertia\Inertia;

class GradeController extends Controller
{
    //
    public function index()
    {
        //
        
        $grades = Grade::all();
        dd($grades);

        return Inertia::render('Grades/Index',[
            'grades' => $grades
        ]);
    }
}
