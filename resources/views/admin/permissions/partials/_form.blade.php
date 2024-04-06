<form action="{{ $action }}" method="POST" class="needs-validation" novalidate>
    @csrf
    @method($method)

    @include('components.input', [
        'label' => 'Nom',
        'name' => 'name',
        'value' => old('name', $permission->name ?? null),
    ])

    @include('components.submit', [
        'label' => 'Enregistrer',
    ])
</form>
