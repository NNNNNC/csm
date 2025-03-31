<?php
namespace App\Admin\Controllers;

use App\Models\Services; // Ensure you have this model
use App\Models\Office;  // Needed if office_id is a foreign key
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class ServicesController extends AdminController
{
    protected function grid()
    {
        $grid = new Grid(new Services()); // Use the correct model

        $grid->column('id', 'ID')->sortable();
        $grid->column('name', 'Service Name')->sortable();
        $grid->column('office_id', 'Office')->display(function ($officeId) {
            return Office::find($officeId)?->name ?? 'N/A'; // Show office name if available
        })->sortable();
        $grid->column('created_at', 'Created At')->sortable();
        $grid->column('updated_at', 'Updated At')->sortable();

        return $grid;
    }

    protected function form()
    {
        $form = new Form(new Services()); // Use the correct model

        $form->text('name', 'Service Name')->required();
        $form->select('office_id', 'Office')
            ->options(Office::pluck('name', 'id')) 
            ->required();

        $form->display('created_at', 'Created At');
        $form->display('updated_at', 'Updated At');

        return $form;
    }
}
