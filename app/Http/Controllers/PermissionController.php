<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionFormRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        try {

            return view('admin.permissions.form', ['permission' => new Permission()]);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionFormRequest $request): RedirectResponse
    {
        try {
            Permission::create($request->validated());
            return redirect()->route('admin.permissions.index')
                ->with('success', 'Permission created successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.permissions.form', ['permission' => $permission]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionFormRequest $request, Permission $permission): RedirectResponse
    {
        try {
            $permission->update($request->validated());
            return redirect()->route('admin.permissions.index')
                ->with('success', 'Permission updated successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission): RedirectResponse
    {
        try {
            $permission->delete();
            return redirect()->route('admin.permissions.index')
                ->with('success', 'Permission deleted successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
}
