@if (count($breadcrumbs))
<ol class="breadcrumb breadcrumb-bg-color">
    @foreach ($breadcrumbs as $breadcrumb)

    @if ($breadcrumb->url && !$loop->last)
    <li class="breadcrumb-item "><a class="text-color-breadcrumb" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
    @else
    <li class="breadcrumb-item  active">{{ $breadcrumb->title }}</li>
    @endif

    @endforeach
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
        {{-- <div class="btn-group" role="group" aria-label="Button group">
                  
            <a class="btn text-color-breadcrumb" href="#">
                <i class="icon-settings"></i> Settings</a>
        </div> --}}
        <a style="color:black;" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ol>
@endif

<style>

</style>