<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessionalInfoFormRequest;
use App\Models\ProfessionalInfo;
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfessionalInfoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfessionalInfoFormRequest $request): RedirectResponse
    {
        try {
            $info = ProfessionalInfo::create($request->validated());
            $user = User::findOrFail($request->get('user'));
            $user->update(['professional_info_id' => $info->id]);
            return redirect()->route('admin.users.index')
                ->with('success', 'Professional info added successfully');
        } catch (Exception $ex){
            return redirect()->back()
                ->with('error', $ex->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfessionalInfo $professionalInfo): View
    {
        $info = ProfessionalInfo::findOrFail($professionalInfo->id);
        $user = User::where('professional_info_id', $info->id)->first();
        return view('admin.users.professional-infos.edit', compact('info', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfessionalInfoFormRequest $request, ProfessionalInfo $professionalInfo): RedirectResponse
    {
        try {
            $info = ProfessionalInfo::findOrFail($professionalInfo->id);
            $info->update($request->validated());
            return redirect()->route('admin.users.index')
                ->with('success', 'Professional info updated successfully');
        } catch (Exception $ex){
            return redirect()->back()
                ->with('error', $ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfessionalInfo $professionalInfo): RedirectResponse
    {
        try {
            $info = ProfessionalInfo::findOrFail($professionalInfo->id);
            $info->delete();
            return redirect()->route('admin.users.index')
                ->with('success', 'Professional info deleted successfully');
        } catch (Exception $ex){
            return redirect()->back()
                ->with('error', $ex->getMessage());
        }
    }
}
