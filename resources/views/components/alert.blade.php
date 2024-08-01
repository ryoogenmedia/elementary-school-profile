<div>
    @if (session('alert'))
        <div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
            <b>{{ $message }} </b> {{ $detail }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
