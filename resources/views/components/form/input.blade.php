@props(['name', 'type' => 'text'])

<div class="mb-6">
    <x-form.label name="{{ $name }}" />
    <input class="border rounded border-gray-400 p-2 w-40" name="{{ $name }}" id="{{ $name }}" required
        type="{{ $type }}" {{ $attributes(['value' => old($name)]) }}>
    <x-form.error name="{{ $name }}" />
</div>
