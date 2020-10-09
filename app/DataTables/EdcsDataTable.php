<?php

namespace App\DataTables;

use App\Edc;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class EdcsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action','<div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-wrench"></i> Option</button>
            <div class="dropdown-menu dropdown-menu-right" role="menu">
            <a href="edc/{{$id}}" class="edcshow dropdown-item" id="{{$id}}"><i class="fas fa-desktop"></i> Show</a>
            <a href="#" class="editedc dropdown-item" id="{{$id}}"><i class="fas fa-edit"></i> Edit</a>
            <a href="#" class="deleteedc dropdown-item" id="{{$id}}"><i class="fas fa-trash"></i> Delete</a>
            </div></div>')
            ->addColumn('checkbox', '<input type="checkbox" name="edccheckbox[]" class="edccheckbox" value="{{$counter_id}}" />')
            ->rawColumns(['action','checkbox']);
         
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Edc $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Edc $model)
    {
        //$dataedc = Edc::with('counter')->latest()->get();
        $dataedc = Edc::with('counter');
        return $dataedc->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('edcs-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('checkbox'),
            Column::make('TIDEDC'),
            Column::make('counter.NoCounter'),
            Column::make('Connection'),
            Column::make('SIMCard'),
            Column::make('TypeEDC'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Edcs_' . date('YmdHis');
    }
}
