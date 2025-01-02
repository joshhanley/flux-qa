Test

@ray(request()->route())

@foreach ($tests as $test)
    {{ $test }}
@endforeach
