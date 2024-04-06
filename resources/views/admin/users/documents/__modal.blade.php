@php
    /* @var App\Models\PersonalInfo $info */
    $disabled ??= false;
@endphp

    <!-- Vertically centered Modal -->
<button type="button" class="btn btn-sm btn-outline-primary @disabled($disabled)"
        data-bs-toggle="modal" data-bs-target="#modal-contrat-{{ $id }}">
    {{ $title }} <i class="bi bi-file-earmark-text"></i>
</button>
<div class="modal fade" id="modal-contrat-{{ $id }}" tabindex="-1">
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
                                <span class="fw-bold">Numéro du NCI: </span>{{ $info->nci }}
                            </p>

                            <p class="card-text">
                                <span class="fw-bold">Nom: </span>{{ $info->last_name }} {{ $info->first_name }}
                            </p>
                            <p class="card-text">
                                <span class="fw-bold">Date de naissance: </span>
                                {{ $info->date_of_birth }}
                            </p>
                            <p class="card-text">
                                <span class="fw-bold">Téléphone: </span>{{ $info->phone }}
                            </p>
                            <p class="card-text">
                                <span class="fw-bold">Adresse: </span>{{ $info->address }}
                            </p>
                        </div>
                    </div>
                @else
                    <!-- If contrat don't exist -->
                    @include('admin.users.personal-infos.__form', [
                        'action' => route('admin.personal-infos.store'),
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
                          action="{{ route('admin.personal-infos.destroy', $info) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            Supprimer <i class="bi bi-trash"></i>
                        </button>
                    </form>
                    <a href="{{ route('admin.personal-infos.edit', $info) }}"
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


