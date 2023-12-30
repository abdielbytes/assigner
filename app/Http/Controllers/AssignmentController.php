<?php

namespace App\Http\Controllers;
use App\Models\Assignment;
use Carbon\Carbon;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        $assignments = Assignment::orderBy('created_at', 'desc')->get();

        // Get the current week range
        $now = Carbon::now();


        return view('dashboard', [
            'assignments' => $assignments,

            'now' => $now, // Add this line to pass $now to the view
        ]);
    }




    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'assistant' => 'required',
            'assignment' => 'required',
        ]);

//        $week = Carbon::now()->startOfWeek()->format('M d, Y') . ' - ' . Carbon::now()->endOfWeek()->format('M d, Y');

        Assignment::create([
//            'week' => $week,
            'week'=> $request->input('week'),
            'name' => $request->input('name'),
            'assistant' => $request->input('assistant'),
            'assignment' => $request->input('assignment'),
        ]);

        return redirect()->route('assignments.index');
    }

    public function print($id)
    {
        // Logic for printing (you can customize this based on your requirements)
        // For example, you might want to generate a PDF or perform some other action.
    }


}
