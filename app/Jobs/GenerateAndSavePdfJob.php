<?php

namespace App\Jobs;

use App\Models\Assignment;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GenerateAndSavePdfJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $assignment;

    public function __construct(Assignment $assignment)
    {
        $this->assignment = $assignment;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Step 2: Generate PDF for the assignment
//        $pdf = PDF::loadView('pdf_view', ['data' => $data]);

        $pdf = PDF::loadView('pdf.single_assignment', ['assignment' => $this->assignment]);

        // Step 3: Save the PDF to storage or public directory
//        $filename = 'assignment_' . $this->assignment->id . '_' . now()->format('YmdHis') . '.pdf';
//        $pdf->save(storage_path('app/public/' . $filename));
    }
}
