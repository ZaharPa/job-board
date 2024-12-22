<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobRequest;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class MyJobController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAnyEmployer', Job::class);
        return view(
            'my_job.index',
            [
                'jobs' => Auth::user()->employer
                    ->jobs()
                    ->with(['employer', 'jobApplications', 'jobApplications.user'])
                    ->withTrashed()
                    ->get()
            ]
        );
    }

    public function create()
    {
        Gate::authorize('create', Job::class);

        return view('my_job.create');
    }

    public function store(JobRequest $request)
    {
        Gate::authorize('create', Job::class);

        $request->user()->employer->jobs()->create($request->validated());

        return redirect()->route('my-jobs.index')
            ->with('success', 'Job created successfully');
    }

    public function edit(Job $myJob)
    {
        Gate::authorize('update', $myJob);

        return view('my_job.edit', ['job' => $myJob ]);
    }

    public function update(JobRequest $request, Job $myJob)
    {
        Gate::authorize('update', $myJob);

        $myJob->update($request->validated());

        return redirect()->route('my-jobs.index')
            ->with('success', 'Job updated successfully');
    }

    public function destroy(Job $myJob)
    {
        $myJob->delete();

        return redirect()->route('my-jobs.index')
            ->with('success', 'Job deleted successfully');
    }
}
