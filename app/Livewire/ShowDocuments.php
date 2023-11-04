<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\DocDocumento;

class ShowDocuments extends Component
{
    use WithPagination;

    public $query = '';
 
    public function search() {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.show-documents', [
            'documents' => DocDocumento::where('doc_nombre', 'LIKE', '%'.$this->query.'%')
                ->orWhere('doc_codigo', 'LIKE', '%'.$this->query.'%')->orderBy('created_at', 'desc')->paginate(5),
        ]);
    }
}
