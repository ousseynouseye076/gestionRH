<table class="table table-hover table-responsive">
    <caption>@yield('title')</caption>
    <!-- Afficher un message lorsque le tableau est vide -->
    @if($roles->isEmpty())
        <tr>
            <td colspan="3" class="text-center">
                {{ __('Aucun role n\'a été défini pour le moment') }}
            </td>
        </tr>
    @endif
    <thead>
    <tr>
        <th scope="col">{{ __("ID") }}</th>
        <th scope="col">{{ __("Nom") }}</th>
        <th scope="col">{{ __("Permissions") }}</th>
        <th scope="col">{{ __("Actions") }}</th>
    </tr>
    </thead><!-- End Thead -->
    <tbody>
    @foreach ($roles as $role)
        <tr>

            <th scope="row">{{  strtoupper($role->id) }}</th><!-- ID -->

            <td>{{ strtoupper($role->name) }}</td><!-- Name -->
            <td>{{ strtoupper($role->permissions->pluck('name')->implode(' | ')) }}</td><!-- Permissions -->


            <td class="text-center actions d-flex gap-3">
                <a href="{{ route('admin.roles.edit', $role) }}"
                   class="btn btn-outline-primary">
                    <i class="bi bi-pencil-square"></i> Editer
                </a><!-- Edit button -->

                <form class="delete-form" action="{{ route('admin.roles.destroy', $role) }}"
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
</table><!-- Roles table -->
