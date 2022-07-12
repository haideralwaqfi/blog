@props(['name'])

<div class="mb-6">
    <x-form.label name="{{ $name }}" />
    <textarea name="{{ $name }}" class="border rounded border-gray-400 p-2 w-full" id="{{ $name }}"
        cols="30" rows="2">{{ $slot ?? old($name) }}</textarea>
    <x-form.error name="{{ $name }}" />
</div>
