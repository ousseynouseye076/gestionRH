<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleFormRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.roles.index', ['roles' => Role::with('permissions')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.roles.form', [
            'role' => new Role(),
            'permissions' => Permission::all()->pluck('id', 'name'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleFormRequest $request): RedirectResponse
    {
        try {

            Role::create(['name' => $request->input('name')]);

            foreach ($request->input('permissions') as $permission) {
                $role = Role::findByName($request->input('name'));
                $role->givePermissionTo($permission);
            }

            return to_route('admin.roles.index')
                ->with('success', 'Le rôle a bien été enregistré');

        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.roles.form', ['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleFormRequest $request, Role $role): RedirectResponse
    {
        try {
            $role->update(['name' => $request->input('name')]);
            foreach ($request->input('permissions') as $permission) {
                $role = Role::findByName($request->input('name'));
                $role->givePermissionTo($permission);
            }
            return to_route('admin.roles.index')
                ->with('success', 'Le rôle a bien été mis à jour');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role): RedirectResponse
    {
        try {
            $role->delete();
            return to_route('admin.roles.index')
                ->with('success', 'Le rôle a bien été supprimé');
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
