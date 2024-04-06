<form action="{{ $action }}" method="POST" class="needs-validation" novalidate>
    @csrf
    @method($method)

    @include('components.input', [
        'label' => 'Nom',
        'name' => 'name',
        'value' => old('name', $role->name ?? null),
    ])

    @include('components.select', [
        'label' => 'Permissions',
        'name' => 'permissions[]',
        'options' => $permissions,
        'selected' => $role->permissions->pluck('name', 'id')->toArray(),
        'multiple' => true
    ])

    @include('components.submit', [
        'label' => 'Enregistrer',
    ])
</form>
