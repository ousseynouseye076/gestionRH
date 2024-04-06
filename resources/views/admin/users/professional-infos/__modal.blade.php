@php
    /* @var App\Models\ProfessionalInfo $info */
    $disabled ??= false;
@endphp

    <!-- Vertically centered Modal -->
<button type="button" class="btn btn-sm btn-outline-primary @disabled($disabled)"
        data-bs-toggle="modal" data-bs-target="#modal-professional-{{ $id }}">
    {{ $title }} <i class="bi bi-file-earmark-text"></i>
</button>
<div class="modal fade" id="modal-professional-{{ $id }}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $info?->exists
                        ? 'Consulter les informations' : 'Ajouter des informations' }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if($info)
                    <div class="row">
                        <div class="col-12">
                            <p class="card-text">
                                <span class="fw-bold">Fonction: </span>{{ $info->job_title }}
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">Entreprise: </span>{{ $info->company }}
                            </p>
                            <p class="card-text">
                                <span class="fw-bold">Compétences: </span>
                                {{ $info->competence }}
                            </p>
                            <p class="card-text">
                                <span class="fw-bold">Expérience: </span>{{ $info->experience }}
                            </p>
                            <p class="card-text">
                                <span class="fw-bold">Langues: </span>{{ $info->languages }}
                            </p>
                        </div>
                    </div>
                @else
                    <!-- If contrat don't exist -->
                    @include('admin.users.professional-infos.__form', [
                        'action' => route('admin.professional-infos.store'),
                        'method' => 'POST',
                        'info' => $info,
                        'user' => $user,
                    ])
                @endif <!-- End If -->
            </div>
            <div class="modal-footer">
                {{-- Supprimer les informations personnelles --}}
                @if($info)
                    <form class="d-inline delete-form"
                          action="{{ route('admin.professional-infos.destroy', $info) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            Supprimer <i class="bi bi-trash"></i>
                        </button>
                    </form>
                    <a href="{{ route('admin.professional-infos.edit', $info) }}"
                       type="button" class="btn btn-sm btn-primary">
                        Modifier <i class="bi bi-pencil-square"></i>
                    </a>
                @else
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">
                        Fermer <i class="bi bi-x"></i>
                    </button>
                @endif
            </div>
        </div>
    </div>
</div><!-- End Vertically centered Modal-->


