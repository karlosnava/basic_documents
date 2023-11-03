<div>
    <div class="flex items-center justify-between mb-5">
        <x-input wire:model.live="query" label="Buscar..."/>
        <a href="{{ route('documents.create') }}" class="bg-blue-500 text-white rounded-md font-semibold px-4 py-2 hover:bg-blue-600">Crear nuevo documento</a>
    </div>

    @forelse ($documents as $document)
        <a href="{{ route('documents.show', $document) }}" class="bg-white block border rounded-md px-5 py-3 mb-2 hover:border-blue-500">
            <div class="text-xs font-bold text-gray-700">{{ $document->doc_codigo }}</div>
            <div class="font-bold text-gray-800">{{ $document->doc_nombre }}</div>
            <div>
                <span class="bg-blue-100 text-blue-500 rounded-full text-xs px-4">{{ $document->tipo->tip_nombre }}</span>
                <span class="bg-blue-100 text-blue-500 rounded-full text-xs px-4">{{ $document->proceso->pro_nombre }}</span>
            </div>
        </a>
    @empty
        <div>
            No hay documentos para mostrar...        
        </div>
    @endforelse

    {{ $documents->links() }}
</div>
