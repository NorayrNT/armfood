<?php

namespace App\Admin\Controllers;

use App\Armenia;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ArmeniaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Armenia';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Armenia);

        $grid->column('section',__('Section'));
        $grid->column('desc',__('Desc'));


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
        $show = new Show(Armenia::findOrFail($id));

        $show->field('section',__('Section'));
        $show->ckeditor('desc',__('Desc'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Armenia);

        $form->text('section',__('Section'));
        $form->ckeditor('desc',__('Desc'));

        // $form->ckeditor('Desc');

        return $form;
    }
}
