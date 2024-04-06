@extends('layouts.base')
@php
    $title = $permission->exists ? 'Editer la permission' : 'Créer une permission';
@endphp
@section('title', $title)

@section('content')

    <!-- Page Title -->
    @include('components.page-title', [
        'title' => $title,
        'breadcrumbs' => [
            ['label' => 'Liste des permissions', 'url' => route('admin.permissions.index')],
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
                            <h5 class="card-title">{{ $title }}</h5>
                            <span class="float-end">
                            <a href="{{ route('admin.permissions.index') }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-arrow-left"></i> Retour</a>
                            </span><!-- Back button -->
                        </div><!-- Top table area -->
                        <!-- Roles Form -->
                        @include('admin.permissions.partials._form', [
                            'permission' => $permission,
                            'action' => $permission->exists
                             ? route('admin.permissions.update', $permission)
                             : route('admin.permissions.store'),
                            'method' => $permission->exists ? 'PUT' : 'POST'
                        ])
                        <!-- End Roles Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->
@endsection

