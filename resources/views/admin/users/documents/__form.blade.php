@php /* @var App\Models\Document $document*/ @endphp
<form class="needs-validation" novalidate method="POST" action="{{ $action }}" enctype="multipart/form-data">
    @csrf
    @if($method != 'POST')
        @method($method)
    @endif
    @include('components.input' , [
        'label' => 'Titre',
        'name' => 'name',
        'value' => $document->name
    ])

    @include('components.input' , [
        'label' => 'Document',
        'name' => 'path',
        'type' => 'file',
    ])

    @include('components.submit', [
        'label' => 'Enregistrer',
    ])
</form>
