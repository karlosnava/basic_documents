@props([
    'label',
    'type' => 'submit', 
    'disabled' => false,
])

<button {{ $attributes }} type="{{ $type }}" class="bg-green-500 text-white font-semibold rounded-md py-2 w-full hover:bg-green-600 disabled:opacity-50 disabled:cursor-not-allowed"
    @if ($disabled) disabled @endif >
    {{ $label }}
</button>
