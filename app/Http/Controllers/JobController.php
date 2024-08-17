<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        // Fetch all jobs from the database, you can also paginate if needed
        $jobs = Job::all();

        // Pass the jobs data to the view
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'naam' => 'required|string|max:255',
            'voornaam' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => 'required|string|max:255', // Validate the hidden type field
            'beschrijving' => 'required|string',
            'bijlage' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048', // Optional file upload validation
        ]);

        // Create a new Job record using the request data
        $job = new Job();
        $job->naam = $request->input('naam');
        $job->voornaam = $request->input('voornaam');
        $job->username = $request->input('username');
        $job->email = $request->input('email');
        $job->beschrijving = $request->input('beschrijving');
        $job->type = $request->input('type'); // Store the type in the database

        // Handle the file upload, if present
        if ($request->hasFile('bijlage')) {
            $job->bijlage = $request->file('bijlage')->store('bijlages');
        }

        // Save the Job record to the 'jobs' table
        $job->save();

        //return redirect()->back()->with('success', 'Uw casus is succesvol ingediend.');
        return redirect('/')->with('success', 'Uw casus is succesvol ingediend.');

    }


    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }


    public function destroy(Job $job)
    {
        Gate::authorize('edit-job', $job);

        $job->delete();

        return redirect('/jobs');
    }
    public function downloadPdf()
    {
        // Ensure only admins can download the PDF
        if (!auth()->user()->is_admin) {
            abort(403, 'Unauthorized action.');
        }

        // Retrieve all jobs
        $jobs = Job::all();

        // Generate the PDF
        $pdf = PDF::loadView('jobs.pdf', compact('jobs'));

        // Download the PDF
        return $pdf->download('jobs.pdf');


    }





}
