@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'valid-feedback']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
