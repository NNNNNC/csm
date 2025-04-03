<?php
namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Models\Survey;

class SurveyController extends AdminController
{
    protected function grid()
    {
        $grid = new Grid(new Survey());

        $grid->column('id', 'ID')->sortable();
        $grid->column('client_type', 'Client Type');
        $grid->column('date', 'Date');
        $grid->column('age', 'Age');
        $grid->column('sex', 'Sex');
        $grid->column('office_visited', 'Office Visited');
        $grid->column('service', 'Service');
        $grid->column('awareness', 'Awareness');
        $grid->column('visibility', 'Visibility');
        $grid->column('helpfulness', 'Helpfulness');
        $grid->column('SQD0', 'SQD0');
        $grid->column('SQD1', 'SQD1');
        $grid->column('SQD2', 'SQD2');
        $grid->column('SQD3', 'SQD3');
        $grid->column('SQD4', 'SQD4');
        $grid->column('SQD5', 'SQD5');
        $grid->column('SQD6', 'SQD6');
        $grid->column('SQD7', 'SQD7');
        $grid->column('SQD8', 'SQD8');
        $grid->column('email', 'Email');
        $grid->column('comments', 'Comments');

        return $grid;
    }

    protected function form()
    {
        $form = new Form(new Survey());

        $form->text('client_type', 'Client Type')->required();
        $form->date('date', 'Date')->required();
        $form->number('age', 'Age')->min(1)->max(120);
        $form->select('sex', 'Sex')->options(['Male' => 'Male', 'Female' => 'Female']);
        $form->text('office_visited', 'Office Visited');
        $form->text('service', 'Service');
        $form->text('awareness', 'Awareness');
        $form->text('visibility', 'Visibility');
        $form->text('helpfulness', 'Helpfulness');
        $form->text('SQD0', 'SQD0');
        $form->text('SQD1', 'SQD1');
        $form->text('SQD2', 'SQD2');
        $form->text('SQD3', 'SQD3');
        $form->text('SQD4', 'SQD4');
        $form->text('SQD5', 'SQD5');
        $form->text('SQD6', 'SQD6');
        $form->text('SQD7', 'SQD7');
        $form->text('SQD8', 'SQD8');
        $form->text('email', 'Email');
        $form->textarea('comments', 'Comments');

        return $form;
    }
}
