<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        $programs = Program::where('name', 'like', "%{$search}%")->paginate(3);

        return view('programs.index')
            ->with('programs', $programs)
            ->with('search', $search);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Program $program)
    {
        $search = $request->get('search', '');
        $jobs = $program->jobs()->where('title', 'like', "%{$search}%")->get();

        return view('programs.show')
            ->with('program', $program)
            ->with('jobs', $jobs)
            ->with('search', $search);
    }
}
