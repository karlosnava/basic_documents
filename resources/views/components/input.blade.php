@props([
    'label',
    'type' => 'text',
    'name' => 'name',
    'class' => false,
    'required' => true,
    'value' => false,
])

<label>
    <div>{{ $label }}</div>
    <input {{ $attributes }} type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
        value="@if($value){{ $value }}@endif"
        @if ($required) required @endif
        class="{{ $class }} border rounded-md px-5 py-2 w-full" />
</label>

@error($name)
    <div class="text-red-500">{{ $message }}</div>
@enderror
