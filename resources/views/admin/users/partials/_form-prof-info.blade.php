@php /* @var App\Models\ProfessionalInfo $professionalInfo */ @endphp
<form method="POST" action="{{ $action }}" class="needs-validation" novalidate enctype="multipart/form-data">
    @csrf
    @method($method)

    @include('components.input', [
        'name' => 'job_title',
        'label' => 'Poste',
        'value' => $professionalInfo->job_title,
    ])

    @include('components.input', [
        'name' => 'company',
        'label' => 'Entreprise',
        'value' => $professionalInfo->company,
    ])

    @include('components.input', [
        'name' => 'competence',
        'label' => 'Compétences',
        'type' => 'textarea',
        'value' => $professionalInfo->competence,
    ])

    @include('components.input', [
        'name' => 'experience',
        'label' => 'Expérience',
        'value' => $professionalInfo->experience,
        'type' => 'textarea',
    ])

    @include('components.input', [
        'name' => 'languages',
        'label' => 'Langues',
        'value' => $professionalInfo->languages,
        'type' => 'textarea',
    ])

    @include('components.submit', [
        'label' => 'Enregistrer',
    ])

</form>
