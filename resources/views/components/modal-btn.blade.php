@php
    $id = $id ?? 'default-id';
    $title = $title ?? 'Modal Title';
    $color = $color ?? 'primary';
    $icon = $icon ?? 'bi bi-person-badge-fill';
@endphp

<button type="button" class="btn btn-sm btn-{{ $color }}" data-bs-toggle="modal" data-bs-target="#modal-{{ $id }}">
    {{ $title }} <i class="{{ $icon }}"></i>
</button>
