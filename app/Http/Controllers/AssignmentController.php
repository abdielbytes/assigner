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
//    public function generatePdf()
//    {
//        $assignments = Assignment::orderBy('created_at', 'desc')->get();
//
//        // You can customize the PDF view according to your needs.
//        $pdf = PDF::loadView('pdf.assignments', ['assignments' => $assignments]);
//
//        // Generate a filename for the PDF (you can customize this)
//        $filename = 'assignments_' . now()->format('YmdHis') . '.pdf';
//
//        // Save the PDF to the storage or public directory
//        $pdf->save(storage_path('app/public/' . $filename));
//
//        // Optionally, you can store the file path in the database or return it for download
//        // For example, you might save the file path in the database for future reference.
//
//        return redirect()->back()->with('success', 'PDF generated successfully.');
//    }
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
