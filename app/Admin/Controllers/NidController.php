<?php

namespace App\Admin\Controllers;

use App\Models\Nid;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NidController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Nid';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Nid());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('father', __('Father Name'));
        $grid->column('mother', __('Mother Name'));
        $grid->column('birth', __('Birth'));
        $grid->column('add', __('Address'));
        $grid->column('nid', __('National'));

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
        $show = new Show(Nid::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->column('father', __('Father Name'));
        $show->column('mother', __('Mother Name'));
        $show->column('birth', __('Birth'));
        $show->column('add', __('Address'));
        $show->column('nid', __('National'));

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
        $form = new Form(new Nid());

        $form->text('name', __('Name'));
        $form->text('father', __('Father Name'));
        $form->text('mother', __('Mother Name'));
        $form->date('birth', __('Birth'));
        $form->text('add', __('Address'));
        $form->text('nid', __('National'));




        return $form;
    }
}
