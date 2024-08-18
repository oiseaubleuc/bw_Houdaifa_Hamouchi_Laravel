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
        $jobs = Job::all();

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
    public function readme()
    {
        return view('readme');
    }

    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required|string|max:255',
            'voornaam' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => 'required|string|max:255',
            'beschrijving' => 'required|string',
            'bijlage' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        $job = new Job();
        $job->naam = $request->input('naam');
        $job->voornaam = $request->input('voornaam');
        $job->username = $request->input('username');
        $job->email = $request->input('email');
        $job->beschrijving = $request->input('beschrijving');
        $job->type = $request->input('type');

        if ($request->hasFile('bijlage')) {
            $job->bijlage = $request->file('bijlage')->store('bijlages');
        }

        $job->save();

        return redirect('/')->with('success', 'Uw casus is succesvol ingediend.');

    }


    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }


}

