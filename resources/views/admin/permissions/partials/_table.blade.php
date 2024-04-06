<table class="table table-hover table-responsive">
    <caption>@yield('title')</caption>
    <!-- Afficher un message lorsque le tableau est vide -->
    @if($permissions->isEmpty())
        <tr>
            <td colspan="3" class="text-center">
                {{ __('Aucun permission n\'a été défini pour le moment') }}
            </td>
        </tr>
    @endif
    <thead>
    <tr>
        <th scope="col">{{ __("ID") }}</th>
        <th scope="col">{{ __("Nom") }}</th>
        <th scope="col">{{ __("Actions") }}</th>
    </tr>
    </thead><!-- End Thead -->
    <tbody>
    @foreach ($permissions as $permission)
        <tr>

            <th scope="row">{{  strtoupper($permission->id) }}</th><!-- ID -->

            <td>{{ strtoupper($permission->name) }}</td><!-- Name -->


            <td class="text-center actions d-flex gap-3">
                <a href="{{ route('admin.permissions.edit', $permission) }}"
                   class="btn btn-outline-primary">
                    <i class="bi bi-pencil-square"></i> Editer
                </a><!-- Edit button -->

                <form class="delete-form" action="{{ route('admin.permissions.destroy', $permission) }}"
                      method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">
                        <i class="bi bi-trash"></i> Supprimer
                    </button>
                </form><!-- Delete from -->
            </td><!-- Actions: Edit and Delete  -->
        </tr>
    @endforeach
    </tbody><!-- End Tbody -->
</table><!-- permissions table -->
