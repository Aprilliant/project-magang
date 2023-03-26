<?php

namespace App\DataTables;

use App\Models\data_nasabah;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class data_nasabahDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'detail-laporan')
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\data_nasabah $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(data_nasabah $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('data_nasabah-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::computed('action')
                ->exportable(true)
                ->printable(true)
                ->width(60)
                ->selectable(true)
                ->addClass('text-center'),
            Column::checkbox('checkbox')->name('checkbox')->data('function(row) {
                return "<input type=\"checkbox\" name=\"nasabah[]\" value=\"" + row.id + "\">";
            }')->title('<input type="checkbox" id="checkAll">')->addClass('text-center')->orderable(false)->searchable(false)->selectable(true),
            Column::make('id'),
            Column::make('nama'),
            Column::make('alamat'),
            Column::make('no_kredit'),
            Column::make('no_hp'),
            Column::make('hari_tunggakan'),
            Column::make('osl'),
            Column::make('angsuran'),
            Column::make('kewajiban'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'data_nasabah_' . date('YmdHis');
    }
}
