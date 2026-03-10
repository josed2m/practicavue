<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicPeriod;
use Inertia\Inertia;

class AcademicPeriodController extends Controller
{
    //
    public function index()
    {
        //
        $academicPeriods = AcademicPeriod::all();
        dd($academicPeriods);

        return Inertia::render('AcademicPeriods/Index',[
            'academicPeriods' => $academicPeriods
        ]);
    }
}
