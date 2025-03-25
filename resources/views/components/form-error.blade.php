
@props(['name'])

@error($name)
    <p class="text-xs text-red-500 fint-semibold">{{ $message }}</p>
@enderror