@php /* @var App\Models\PersonalInfo $info */ $info = $info ?? new \App\Models\PersonalInfo(); @endphp
<form action="{{ $action }}" method="POST" class="needs-validation" novalidate>
    @csrf
    @method($method)

    @include('components.input', [
        'name' => 'user',
        'label' => 'Utilisateur',
        'value' => $user->id,
        'type' => 'hidden',
        'class' => 'd-none',
    ])

    @include('components.input', [
        'name' => 'nci',
        'label' => 'N° CNI',
        'value' => $info->nci,
    ])

    @include('components.input', [
        'name' => 'last_name',
        'label' => 'Nom',
        'value' => $info->last_name,
    ])

    @include('components.input', [
        'name' => 'first_name',
        'label' => 'Prénom',
        'value' => $info->first_name,
    ])

    @include('components.input', [
        'name' => 'date_of_birth',
        'label' => 'Date de naissance',
        'value' => $info->date_of_birth,
        'type' => 'date',
    ])

    @include('components.input', [
        'name' => 'address',
        'label' => 'Adresse',
        'value' => $info->address,
    ])

    @include('components.input', [
        'name' => 'phone',
        'label' => 'Téléphone',
        'value' => $info->phone,
    ])

    @include('components.submit', [
        'label' => 'Enregistrer',
    ])

</form>
