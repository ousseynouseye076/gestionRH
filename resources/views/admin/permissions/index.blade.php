@extends('layouts.base')
@section('title', 'Permissions')
@section('content')

    <!-- Page Title -->
    @include('components.page-title', [
        'title' => 'Permissions',
        'breadcrumbs' => [
                ['label' => 'Liste des permissions', 'url' => '#'],
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
                            <a href="{{ route('admin.permissions.create') }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-plus"></i> Créer</a>
                            </span><!-- add new permission button -->
                        </div><!-- Top table area -->
                        <!-- Roles table -->
                        @include('admin.permissions.partials._table')
                    </div><!-- End Card Body -->
                </div> <!-- End Card -->
            </div> <!-- End Col -->
        </div> <!-- End Row -->
    </section> <!-- End Section -->

@endsection
