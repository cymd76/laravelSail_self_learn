<?php

namespace App\Admin\Controllers;

use App\Models\Departments;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DepartmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Departments';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Departments());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('kana', __('Kana'));
        $grid->column('phone', __('Phone'));
        $grid->column('extension_number', __('Extension number'));
        $grid->column('email', __('Email'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Departments::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('kana', __('Kana'));
        $show->field('phone', __('Phone'));
        $show->field('extension_number', __('Extension number'));
        $show->field('email', __('Email'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Departments());

        $form->text('name', __('Name'));
        $form->number('kana', __('Kana'));
        $form->mobile('phone', __('Phone'));
        $form->text('extension_number', __('Extension number'));
        $form->email('email', __('Email'));

        return $form;
    }
}
