<?php

namespace App\Admin\Controllers;

use App\Term;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TermController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Term';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Term);

        $grid->column('section', __('Section'));
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
        $show = new Show(Term::findOrFail($id));

        $show->field('section', __('Section'));
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
        $form = new Form(new Term);

        $form->text('section', __('Section'));
        $form->ckeditor('desc',__('Description'));

        return $form;
    }
}
