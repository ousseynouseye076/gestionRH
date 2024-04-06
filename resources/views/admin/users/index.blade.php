@extends('layouts.admin.base')
@section('title', 'Employées')
@section('content')

    <!-- Page Title -->
    @include('components.page-title', [
        'title' => __('Tous les employées'),
        'breadcrumbs' => [
            ['label' => 'Liste des employées', 'url' => '#'],
        ],
    ])<!-- End Page Title -->

    <!-- Alert area -->
    @include('components.alert')<!-- End Alert area -->

    <!-- Start Section -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title">@yield('title')</h5>
                            <span class="float-end">
                            <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-plus"></i> Créer</a>
                            </span><!-- add new user button -->
                        </div><!-- Top table area -->
                        <!-- Users table -->
                        <div class="table-responsive">
                            <table class="table datatable text-nowrap">
                                <caption></caption>
                                <!-- Afficher un message lorsque le tableau est vide -->
                                @if($users->isEmpty())
                                    <tr>
                                        <td colspan="3" class="text-center">
                                            {{ __('Aucun user n\'a été défini pour le moment') }}
                                        </td>
                                    </tr>
                                @endif
                                <thead>
                                <tr>
                                    <th scope="col">{{ __("Nom") }}</th>
                                    <th scope="col">{{ __("Email") }}</th>
                                    <th scope="col">{{ __("Role") }}</th>
                                    <th scope="col">{{ __("Téléphone") }}</th>
                                    <th scope="col">{{ __("Adresse") }}</th>
                                    <th scope="col">{{ __("Actions") }}</th>
                                </tr>
                                </thead><!-- End Thead -->
                                <tbody>
                                @foreach ($users as /* @var App\Models\User $user*/$user)
                                    <tr class="align-middle">

                                        <td>{{ $user->name }}</td><!-- Name -->
                                        <td>{{ $user->email }}</td><!-- Email -->
                                        <td>{{ $user?->role?->name }}</td><!-- Role -->
                                        <td>{{ $user->telephone }}</td><!-- Telephone -->
                                        <td>{{ $user->address }}</td><!-- Address -->
                                        <td class="text-center">
                                            <div class="text-center actions d-flex gap-3">
                                                <a href="{{ route('admin.users.edit', $user) }}"
                                                   class="btn btn-outline-primary" title="Modifier">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a><!-- Edit button -->
                                                <form class="delete-form"
                                                      action="{{ route('admin.users.destroy', $user) }}"
                                                      method="POST" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" title="Supprimer l'utilisateur"
                                                            class="btn btn-outline-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form><!-- Delete from -->
                                            </div>
                                        </td><!-- Actions: Edit and Delete  -->
                                    </tr>
                                @endforeach
                                </tbody><!-- End Tbody -->
                            </table><!-- Roles table -->
                        </div><!-- End Users table -->
                    </div><!-- End Card Body -->
                </div> <!-- End Card -->
            </div> <!-- End Col -->
        </div> <!-- End Row -->
    </section> <!-- End Section -->
@endsection


