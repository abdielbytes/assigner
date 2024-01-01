<?php

namespace App\Http\Controllers;
use App\Models\Assignment;
use Carbon\Carbon;
use PDF;
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

            'now' => $now,
        ]);
    }




    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'assignment' => 'required',
            'week'=> 'required',
        ]);


        Assignment::create([
            'week'=> $request->input('week'),
            'name' => $request->input('name'),
            'assistant' => $request->input('assistant'),
            'assignment' => $request->input('assignment'),
        ]);

        return redirect()->route('assignments.index');
    }

    public function print($id)
    {
        $assignment = Assignment::findOrFail($id);

        // Create a PDF for the specific assignment
        $pdf = PDF::loadView('pdf.single_assignment', ['assignment' => $assignment]);

        // You can customize the filename if needed
        $filename = 'assignment_' . $assignment->id . '_'. now()->format('YmdHis') . '.pdf';

        // Save the PDF to storage or public directory
        $pdf->save(storage_path('app/public/' . $filename));

        // Optionally, return the file path for download
        return $pdf->download($filename);
    }


}
