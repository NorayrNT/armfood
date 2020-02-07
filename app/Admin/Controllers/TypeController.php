<?php

namespace App\Admin\Controllers;

use App\Type;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TypeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Type';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Type);

        $grid->column('id', __('Id'));
        $grid->column('parent_id', __('Parent id'));
        $grid->name('Name');
        $grid->column('image', __('Image'))->width(100);
        $grid->column('symbol', __('Symbol'));

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
        $show = new Show(Type::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('parent_id', __('Parent id'));
        $show->field('name', __('Name'));
        $show->images()->image();
        $show->field('symbol', __('Symbol'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Type);
       
        $form->select('parent_id','Parent')->options(Type::all()->pluck('name','id'));
        $form->text('name', __('Name'));
        $form->image('image', __('Image'))->move('uploads/types');
        $form->image('symbol', __('Symbol'));

        return $form;
    }
}
