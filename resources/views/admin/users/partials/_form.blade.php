@php/* @var App\Models\User $user */ @endphp
<form action="{{ $action }}" method="POST" class="needs-validation" novalidate>
    @csrf
    @method($method)

    @include('components.input', [
        'name' => 'name',
        'label' => 'Nom et Prénom',
        'value' => $user->name
    ])

    @include('components.input', [
        'name' => 'email',
        'label' => 'Email',
        'value' => $user->email
    ])

    @include('components.input', [
        'name' => 'password',
        'label' => 'Mot de passe',
        'type' => 'password'
    ])

    @include('components.input', [
        'name' => 'password_confirmation',
        'label' => 'Confirmer le mot de passe',
        'type' => 'password'
    ])

    @include('components.select', [
        'name' => 'role',
        'label' => 'Rôle',
        'options' => $roles
    ])

    @include('components.submit', [
        'label' => 'Enregistrer'
    ])

</form>
