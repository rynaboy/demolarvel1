<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DataTable extends Component
{
    public $data;
    public $columns;
    public $sortColumn;
    public $sortDirection;
    public $currentPage;
    public $totalPages;

    public function __construct($data, $columns, $sortColumn = 'code', $sortDirection = 'asc', $currentPage = 1, $totalPages = 1)
    {
        $this->data = $data;
        $this->columns = $columns;
        $this->sortColumn = $sortColumn;
        $this->sortDirection = $sortDirection;
        $this->currentPage = $currentPage;
        $this->totalPages = $totalPages;
    }

    public function render()
    {
        return view('components.data-table');
    }
}
