@extends('layouts.base')
@section('title', 'Modifier les informations personnelles de l\'utilisateur')
@section('content')

    <!-- Page Title -->
    @include('components.page-title', [
        'title' => "Modifier les informations personnelles de l'utilisateur",
        'breadcrumbs' => [
            ['label' => 'tous les utilisateurs', 'url' => route('admin.users.index')],
        ],
    ])<!-- End Page Title -->

    <!-- Add | Edit section form -->
    <section class="section">
        <div class="row">
            <div class="card shadow col-md-8 offset-md-2">
                <div class="card-body">
                    <h5 class="card-title">@yield('title')</h5>
                    <!-- Form Add | Edit form -->
                    @include('admin.users.personal-infos.__form', [
                        'action' => route('admin.personal-infos.update', $personalInfo),
                        'method' => 'PUT',
                        'info' => $personalInfo,
                        'user' => $user,
                    ]) <!-- End Form Add | Edit form -->
                </div><!-- End Card Body -->
            </div><!-- End Card -->
        </div><!-- End Row -->
    </section> <!-- End Add | Edit section form -->

@endsection
