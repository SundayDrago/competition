<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Users;

use DB;



class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='representative'){
                return view('user.home');
            }
            else {
                $schoolCount = DB::table('schools')->count();
                $participants = DB::table('participants')->count();
                $rejected = DB::table('rejected')->count();
            
                $challenges = DB::table('challenge')
                    ->select('challengeNumber', 'start_date', 'end_date')
                    ->get();
            
                // Determine status for each challenge
                $challengeStatuses = $challenges->map(function ($challenge) {
                    $currentDate = now();
                    if ($challenge->start_date <= $currentDate && $challenge->end_date >= $currentDate) {
                        $status = 'Available';
                    } elseif ($challenge->start_date > $currentDate) {
                        $status = 'Pending';
                    } else {
                        $status = 'Expired';
                    }
            
                    return (object)[
                        'challengeNumber' => $challenge->challengeNumber,
                        'status' => $status,
                    ];
                });
            
                return view('admin.home', [
                    'schoolCount' => $schoolCount,
                    'challengeStatuses' => $challengeStatuses,
                    'participants' => $participants,
                    'rejected' => $rejected,
                ]);
            }
           }
           return redirect()->back();

    }
    public function index(){
        // Fetch valid challenge numbers from the database
        $validChallengeNumbers = DB::table('challenge')
            ->where('start_date', '<=', now())
            ->where('end_date', '>=', now())
            ->pluck('challengeNumber');
        // Fetch all users from the database
        $schools = DB::table('schools')
        ->select('name', 'district')
        ->get();
        // Fetch all users from the database
        $winners = DB::table('attempt as a')
        ->join('participants as p', 'a.username', '=', 'p.username')
        ->select('a.challengeNumber', 'p.firstname', 'p.lastname', 'p.image_path')
        ->whereRaw('a.score = (select max(score) from attempt where challengeNumber = a.challengeNumber)')
        ->groupBy('a.challengeNumber', 'p.firstname', 'p.lastname', 'p.image_path')
        ->get();

        // Return the view with the valid challenge numbers
        return view('user.home', [
             'validChallengeNumbers' => $validChallengeNumbers,
             'schools' => $schools,
              'winners' => $winners
            ]);
    }
   
}
