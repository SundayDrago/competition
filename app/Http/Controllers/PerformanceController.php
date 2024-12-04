<?php

namespace App\Http\Controllers;


use App\Models\Performance;

use App\Models\participant_performance;

use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    public function showSchoolPerformance(){
        $performances =Performance::all();

        return view('admin.performance', compact('performances'));

    }

    public function showParticipantPerformance()
    {
        $participant_performance=participant_performance::all();

        return view('admin.participant_performance', compact('participant_performance'));
    }
}
