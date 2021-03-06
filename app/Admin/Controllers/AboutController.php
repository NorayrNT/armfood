<?php

namespace App\Admin\Controllers;

use App\about;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AboutController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\about';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new about);

        $grid->column('id', __('Id'));
        $grid->column('desc', __('Desc'));

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
        $show = new Show(about::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('desc', __('Desc'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new about);

        $form->ckeditor('desc', __('Desc'));

        return $form;
    }
}
