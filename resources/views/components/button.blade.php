@props([
    'label',
    'type' => 'submit', 
    'disabled' => false,
    'icon' => false,
])

<button {{ $attributes }} type="{{ $type }}" class="bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-semibold rounded-md py-2 w-full hover:bg-green-600 disabled:opacity-50 disabled:cursor-not-allowed"
    @if ($disabled) disabled @endif >
    @if ($icon) <i class="{{ $icon }} mr-1"></i> @endif {{ $label }}
</button>
