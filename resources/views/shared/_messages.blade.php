@foreach(['danger', 'warning', 'success', 'info'] as $msg)
    @if(session()->has($msg))
        <div class="flas-message">
            <p class="alert alert-{{ $msg }}">
                {{ session()->get($msg) }}
            </p>
        </div>
    @endif
@endforeach