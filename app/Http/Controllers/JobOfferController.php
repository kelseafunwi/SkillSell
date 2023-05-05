<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobOfferRequest;
use App\Http\Requests\UpdateJobOfferRequest;
use Illuminate\Http\Request;
use App\Models\JobOffer;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class JobOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $jobOffer = JobOffer::paginate(6);
        } else {
            return view("main");
        }

        return view('jobs.index')->with('jobOffer', $jobOffer);
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
     * @param  \App\Http\Requests\StoreJobOfferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobOfferRequest $request)
    {
        $jobOffer = new JobOffer();
        $jobOffer->title = $request->title;
        $jobOffer->details = $request->details;
        $jobOffer->category = $request->category;
        $jobOffer->location = $request->location;
        $jobOffer->phone = $request->phone;
        $jobOffer->amount = $request->amount;
        $jobOffer->website = $request->website;
        $jobOffer->deadline = $request->deadline;
        $jobOffer->creator_id = Auth::id();

        $jobOffer->save();

        return redirect('/joboffers');
    }

    /**
     * Display the specified resource.
     *
     *
     *
     */
    public function show($id)
    {
        $jobOffer = JobOffer::where('id', $id)->first();
        return view('jobs.info')->with('jobOffer', $jobOffer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobOffer  $jobOffer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobOffer = JobOffer::where('id', $id)->first();
        return view("jobs.edit")->with('jobOffer', $jobOffer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobOfferRequest  $request
     * @param  \App\Models\JobOffer  $jobOffer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobOfferRequest $request, JobOffer $jobOffer, $id)
    {
        // JobOffer::where('id', $id)->update($request, $jobOffer);
        return redirect('/joboffers/'.$id)->with('message', "the Job was modified successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobOffer  $jobOffer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JobOffer::where('id', $id)->delete();
        return redirect('/joboffers')->with('message', "Job Offer deleted successfully");
    }

    public function search(Request $request) {
        $text = $request->jobTextfield;
        // $query = "select * from job_offers where title like '%".$text."%'";
        // $results = DB::select($query);
        $results = JobOffer::where('title', 'like', '%'. $text . '%')->paginate(6);
        return view('jobs.index')->with('jobOffer', $results)->with('searchValue', $text)->withInput();
    }

    public function categories() {
        return view('jobs.portfolio');
    }
}
