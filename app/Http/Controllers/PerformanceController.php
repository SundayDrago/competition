<?php

namespace App\Http\Controllers;


use App\Models\Performance;

use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    public function showSchoolPerformance(){
        $performances =Performance::all();

        return view('admin.performance', compact('performances'));

    }

    public function showParticipantPerformance($participantId)
    {
        $performances = Performance::getParticipantPerformanceOverYears($participantId);

        return view('admin.participant_performance', compact('performances'));
    }
}
