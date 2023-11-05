<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        $jobs = Job::where('title', 'like', "%{$search}%")->get();

        return view('jobs.index')
            ->with('jobs', $jobs)
            ->with('search', $search);
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show')->with('job', $job);
    }

    /**
     * Display advice related to a specific job.
     */
    public function showAdvice(Job $job)
    {
        return view('jobs.show-advice')->with('job', $job);
    }
}
