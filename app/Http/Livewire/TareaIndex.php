<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;
use Livewire\WithPagination;

class TareaIndex extends Component
{   
    use WithPagination;

    public $busqueda = '';
    public $paginacion = 3;
    //protected $paginationTheme = 'bootstrap';
    
    public function paginationView() {

        return 'custom-pagination';
    }

    protected $queryString = 
    [
        'busqueda' => ['except' => ''],
        'paginacion' => ['except' => 5],
    ];

    public function render()
    {
        $tareas = Tarea::orderBy('id');
        
        $tareas = $this->consulta();
        $tareas = $tareas->paginate($this->paginacion);

        if ($tareas->currentPage() > $tareas->lastPage()) {
            
            $this->resetPage();
            $tareas = $this->consulta();
            $tareas = $tareas->paginate($this->paginacion);
        }

        $params= [
            'tareas' => $tareas,
        ];
        return view('livewire.tarea-index', $params);
    }

    private function consulta() 
    {
        $query = Tarea::orderByDesc('id');
        if ($this->busqueda != '') {
            
            $query->where('nombre', 'LIKE', '%'.$this->busqueda.'%');
        }
        return $query;
    }
}
