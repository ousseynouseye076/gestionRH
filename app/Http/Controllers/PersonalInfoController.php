<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalInfoFormRequest;
use App\Models\PersonalInfo;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use PharIo\Version\Exception;

class PersonalInfoController extends Controller
{

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
     * Show the form for editing the specified resource.
     */
    public function edit(PersonalInfo $personalInfo): View
    {
        $info = PersonalInfo::findOrFail($personalInfo->id);
        $user = User::where('personal_info_id', $info->id)->first();
        return view('admin.users.personal-infos.edit', compact('info', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonalInfoFormRequest $request, PersonalInfo $personalInfo): RedirectResponse
    {
        try {
            $info = PersonalInfo::findOrFail($personalInfo->id);
            $info->update($request->validated());
            return redirect()->route('admin.users.index')
                ->with('success', 'Personal info updated successfully');
        } catch (Exception $ex){
            return redirect()->back()
                ->with('error', $ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PersonalInfo $personalInfo): RedirectResponse
    {
        try {
            $info = PersonalInfo::findOrFail($personalInfo->id);
            $info->delete();
            return redirect()->route('admin.users.index')
                ->with('success', 'Personal info deleted successfully');
        } catch (Exception $ex){
            return redirect()->back()
                ->with('error', $ex->getMessage());
        }
    }
}
