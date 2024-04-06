@php /* @var App\Models\Document $document */ @endphp
<form role="form" method="POST" action="{{ $action }}"  enctype="multipart/form-data"
    class="needs-validation" novalidate>
    @csrf
    @method($method)
    <div class="row">
        @include('components.input', [
            'name' => 'name',
            'label' => 'Titre du document',
            'value' => $document->name,
            'class' => 'col-md-4',
        ])

        @include('components.input', [
            'name' => 'path',
            'label' => 'Document',
            'value' => $document->path,
            'type' => 'file',
            'class' => 'col-md-4',
        ])

        {{-- submit btn --}}
        @include('components.submit', [
            'label' => 'Sauvegarder'
        ])
    </div>

</form>
