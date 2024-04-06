<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.users.index', ['users' => User::with('roles')->get()]);
    }

    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.users.form', [
            'user' => new User(),
            'roles' => Role::all()->pluck('name', 'name')->toArray()]
        );
    }

    public function store(UserFormRequest $request): RedirectResponse
    {
        try {
            $user = User::create($request->validated());
            $user->assignRole($request->validated()['role']);
            return redirect()->route('admin.users.index')
                ->with('success', 'User created successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function edit(User $user): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.users.form', [
            'user' => $user,
            'roles' => Role::all()->pluck('id', 'name')->toArray(),
        ]);
    }


    public function update(UserFormRequest $request, User $user): RedirectResponse
    {
        try {
            $user->update($request->validated());
            $user->syncRoles($request->validated()['role']);
            return redirect()->route('admin.users.index')
                ->with('success', 'User updated successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function destroy(User $user): RedirectResponse
    {
        try {
            $user->delete();
            return redirect()->route('admin.users.index')
                ->with('success', 'User deleted successfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }


}
