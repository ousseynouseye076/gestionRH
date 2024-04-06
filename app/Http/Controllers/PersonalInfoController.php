<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalInfoFormRequest;
use App\Models\PersonalInfo;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use PharIo\Version\Exception;

class PersonalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonalInfoFormRequest $request): RedirectResponse
    {
        try {
            $info = PersonalInfo::create($request->validated());
            $user = User::findOrFail($request->get('user'));
            $user->update(['personal_info_id' => $info->id]);
            return redirect()->route('admin.users.index')
                ->with('success', 'Personal info added successfully');
        } catch (Exception $ex){
            return redirect()->back()
                ->with('error', $ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(PersonalInfo $personalInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalInfo $personalInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonalInfo $personalInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalInfo $personalInfo)
    {
        //
    }
}
