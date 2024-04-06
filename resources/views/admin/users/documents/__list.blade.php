@php /* @var App\Models\Document $document */ @endphp
<div class="list-group">
    @foreach($documents as $document)
        <a href="{{ asset('storage/'.$document->path) }}" class="list-group-item list-group-item-action">
            {{ $document->name }}
        </a>
    @endforeach
</div>
