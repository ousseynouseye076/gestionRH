@extends('layouts.base')
@php
    $title = $role->exists ? 'Editer le rôle' : 'Créer un rôle'
@endphp
@section('title', $title)

@section('content')

    <!-- Page Title -->
    @include('components.page-title', [
        'title' => $title,
        'breadcrumbs' => [
            ['label' => 'Liste des rôles', 'url' => route('admin.roles.index')],
            ['label' => $title, 'url' => '#'],
        ]
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
                            <h5 class="card-title">Roles</h5>
                            <span class="float-end">
                            <a href="{{ route('admin.roles.index') }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-arrow-left"></i> Retour</a>
                            </span><!-- Back button -->
                        </div><!-- Top table area -->
                        <!-- Roles Form -->
                        @include('admin.roles.partials._form', [
                            'role' => $role,
                            'action' => $role->exists ? route('admin.roles.update', $role) : route('admin.roles.store'),
                            'method' => $role->exists ? 'PUT' : 'POST'
                        ])
                        <!-- End Roles Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->
@endsection

