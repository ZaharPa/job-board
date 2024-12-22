<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Job::class);
        $filters = request()->only(
            'search',
            'min_salary',
            'max_salary',
            'experience',
            'category'
        );

        return view(
            'job.index',
            ['jobs' => Job::with('employer')->filter($filters)->latest()->get()]
        );
    }

    public function show(Job $job)
    {
        Gate::authorize('view', $job);

        return view(
            'job.show',
            ['job' => $job->load('employer.jobs')]
        );
    }
}
