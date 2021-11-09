@if ($errors->any())
    @foreach ($errors as $error)
        <div class="alert alert-warning">
            {{ $error }}
        </div>
    @endforeach
@endif