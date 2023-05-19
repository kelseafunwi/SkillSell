<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\PhoneNumber;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::paginate(6);
        return view('company.index')->with('companies', $company);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    public function search(Request $request) {
        $text = $request->company;
        $results = Company::where('company_name', 'like', '%'. $text . '%')->paginate(6);
        return view('company.index')->with('companies', $results)->with('searchValue', $text);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $company = new Company;
        $company->location = $request->location;
        $company->company_name = $request->name;
        $company->description = $request->details;
        $company->company_website = $request->website;
        $company->company_ceo = $request->ceo_name;
        $company->company_phone = $request->phone;
        $company->category = $request->category;
        $company->taskID = $request->taskID;

        $company->save();

        return redirect('/company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id)->first();
        return view('company.show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company.edit')->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        DB::transaction(function () {
            DB::update('update companies set company_website = "google" where company_website = ?', ['google.com']);
        });

        return redirect()->route('company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
    }

    public function categories() {
        return view('company.categories');
    }
}
