@if (count($breadcrumbs))

<div style="background-color: #e9ecef;">
    <ol class="breadcrumb text-capitalize" style="background-color: #f6f6f6;">
        @foreach ($breadcrumbs as $breadcrumb)

        @if ($breadcrumb->url && !$loop->last)
        <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
        @else
        <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
        @endif

        @endforeach
    </ol>
</div>

@endif