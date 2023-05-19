<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\JobPost;

use App\Http\Requests\StoreJobPostRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $JobPost = JobPost::paginate(6);
        } else {
            return view("main");
        }

        return view('jobs.index')->with('JobPost', $JobPost);
    }

    public function dashboard() {
        return view('jobs.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobPostRequest $request)
    {
        $jobPost = new JobPost();
        $jobPost->title = $request->title;
        $jobPost->slug = $request->input('slug', "NoSlug");
        $jobPost->details = $request->input('details', 'No Description');
        $jobPost->category = $request->category;
        $jobPost->location = $request->location;
        $jobPost->phone = $request->phone;
        $jobPost->amount = $request->amount;
        $jobPost->company_website = $request->website;
        $jobPost->deadline = $request->deadline;
        $jobPost->user_id = Auth::id();

        $jobPost->save();

        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     *
     *
     *
     */
    public function show($id)
    {
        $JobPost = JobPost::where('id', $id)->first();
        return view('jobs.info')->with('JobPost', $JobPost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobPost  $JobPost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $JobPost = JobPost::where('id', $id)->first();
        return view("jobs.edit")->with('JobPost', $JobPost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobPostRequest  $request
     * @param  \App\Models\JobPost  $JobPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPost $JobPost, $id)
    {
        // JobPost::where('id', $id)->update($request, $JobPost);
        return redirect('/jobs'.$id)->with('message', "the Job was modified successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobPost  $JobPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JobPost::where('id', $id)->delete();
        return redirect('/jobs')->with('message', "Job Offer deleted successfully");
    }

    public function search(Request $request) {
        $text = $request->jobTextfield;
        // $query = "select * from job_offers where title like '%".$text."%'";
        // $results = DB::select($query);
        $results = JobPost::where('title', 'like', '%'. $text . '%')->paginate(6);
        return view('jobs.index')->with('JobPost', $results)->with('searchValue', $text);
    }

    public function categories() {
        return view('jobs.portfolio');
    }
}
