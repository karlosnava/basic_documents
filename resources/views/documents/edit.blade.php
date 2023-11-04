@extends('layouts.app')

@section('title', "Editar {$document->doc_nombre}")

@section('content')
    <div class="text-center font-bold text-xl"><i class="fas fa-pen"></i> Actualizar documento</div>
    <hr class="my-5">

    <form action="{{ route('documents.update', $document) }}" method="POST">
        @csrf
        @method('PUT')

        <x-input label="Nombre del documento" name="doc_nombre" value="{{ old('doc_nombre', $document->doc_nombre) }}" />

        <div class="mt-5">
            <textarea name="doc_contenido" required>{{ old('doc_contenido', $document->doc_contenido) }}</textarea>
            @error('doc_contenido')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 my-5">
            <div>
                <x-select label="Tipo de documento" name="doc_id_tipo">
                    @foreach ($tipo_docs as $tipo_doc)
                        <option value="{{ $tipo_doc->tip_id }}" @if($tipo_doc->tip_id == old('doc_id_tipo', $document->doc_id_tipo)) selected @endif>
                            [{{ $tipo_doc->tip_prefijo }}] {{ $tipo_doc->tip_nombre }}
                        </option>
                    @endforeach
                </x-select>
            </div>

            <div>
                <x-select label="Tipo de proceso" name="doc_id_proceso">
                    @foreach ($pro_procesos as $pro_proceso)
                        <option value="{{ $pro_proceso->pro_id }}" @if($pro_proceso->pro_id == old('doc_id_proceso', $document->doc_id_proceso)) selected @endif>
                            [{{ $pro_proceso->pro_prefijo }}] {{ $pro_proceso->pro_nombre }}
                        </option>
                    @endforeach
                </x-select>
            </div>
        </div>
        
        <hr class="my-5">
        <x-button label="Actualizar documento" />
        <div class=" text-center mt-4">
            <a href="{{ route('documents.show', $document) }}" class="text-red-400 hover:text-red-600">Cancelar</a>
        </div>
    </form>
@endsection

@push('js_header')
    <script src="https://cdn.tiny.cloud/1/lh8l1zvl1r9rdokqeuj8uzrfpuhxzivp5kahxp0y988ymzl0/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'autoresize',
          plugins: 'anchor autolink charmap codesample emoticons link lists searchreplace table visualblocks wordcount',
          toolbar: 'blocks fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
@endpush
