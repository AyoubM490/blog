@props([
    /** @var \mixed */
    'name'
])

@error($name)
    <p {{ $attributes->class(['text-red-500 text-xs mt-2']) }}>{{ $message }}</p>
@enderror
