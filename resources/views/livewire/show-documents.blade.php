<div>
    <div class="flex items-center justify-between mb-5">
        <x-input wire:model.live="query" label="" placeholder="Busca un documento..."/>
        <a href="{{ route('documents.create') }}" class="bg-blue-500 text-white flex items-center shadow-md rounded-full font-semibold px-5 py-2 hover:bg-blue-600">
            <i class="fas fa-plus"></i>
            <span class="hidden md:block ml-2">Nuevo</span>
        </a>
    </div>

    @forelse ($documents as $document)
        <a href="{{ route('documents.show', $document) }}" class="bg-white block border rounded-md px-5 py-3 mb-2 hover:border-blue-500">
            <div class="text-xs font-bold text-gray-700"><i class="fa-solid fa-file-lines text-orange-500"></i> {{ $document->doc_codigo }}</div>
            <div class="font-bold text-gray-800">{{ $document->doc_nombre }}</div>
            <div>
                <span class="bg-blue-100 text-blue-500 rounded-full text-xs px-4">{{ $document->tipo->tip_nombre }}</span>
                <span class="bg-blue-100 text-blue-500 rounded-full text-xs px-4">{{ $document->proceso->pro_nombre }}</span>
            </div>
        </a>
    @empty
        <div class="text-center mt-10">
            <img src="{{ asset('images/not_found.png') }}" class="w-14 mx-auto">
            <div class="font-semibold mt-1">Buscamos por todas partes pero no encontramos nada...</div>
        </div>
    @endforelse
    
    <div class="flex justify-end mt-5">
        {{ $documents->links() }}
    </div>
</div>
