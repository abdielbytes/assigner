<?php

namespace App\Http\Controllers;

use App\Jobs\GenerateAndSavePdfJob;
use Illuminate\Support\Facades\Queue;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

use App\Models\Assignment;
use Carbon\Carbon;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {

        $assignments = Assignment::orderBy('created_at', 'desc')->get();
        $now = Carbon::now();

        return view('dashboard', compact('assignments', 'now'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'assignment' => 'required',
            'week' => 'required',
        ]);

        Assignment::create([
            'week' => $request->input('week'),
            'name' => $request->input('name'),
            'assistant' => $request->input('assistant'),
            'assignment' => $request->input('assignment'),
        ]);

        return redirect()->route('assignments.index');
    }



//    public function print($id)
//    {
//        $assignment = Assignment::findOrFail($id);
//
//        // Queue the PDF generation job
//        GenerateAndSavePdfJob::dispatch($assignment);
//
//        // Optionally, provide a response to the user
//        return response()->json(['message' => 'PDF generation started.']);
//    }

    public function print($id)
    {
        // Step 1: Retrieve the assignment by ID
        $assignment = Assignment::findOrFail($id);

        // Step 2: Generate PDF for the assignment
//        $pdf = $this->generatePdf($assignment);
        $pdf = PDF::loadView('single_assignment', ['assignment' => $assignment]);

        // Step 3: Save the PDF to storage or public directory
        $filename = $this->generateFilename($assignment);
//        $this->savePdf($pdf, $filename);

        // Step 4: Optionally, return the file path for download
//        return $pdf->download($filename);
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream($filename);
//        dd($filename);
    }

    // Step 2: Extract the PDF generation logic into a separate method
    protected function generatePdf(Assignment $assignment)
    {
        return PDF::loadView('single_assignment', compact('assignment'));
    }

    // Step 3: Extract the filename generation logic into a separate method
    protected function generateFilename(Assignment $assignment)
    {
        return 'assignment_' . $assignment->id . '_' . now()->format('YmdHis') . '.pdf';
    }

    // Step 4: Extract the PDF saving logic into a separate method
    protected function savePdf($pdf, $filename)
    {
        $pdf->save(storage_path('app/public/' . $filename));
    }
}
