<?php

namespace App\Admin\Controllers;

use App\Ad;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AdController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Ad';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Ad);

        $grid->column('id', __('Id'));
        $grid->column('page_id', __('Page id'));
        $grid->images();
        $grid->column('video', __('Video'));

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
        $show = new Show(Ad::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('page_id', __('Page id'));
        $show->images();
        $show->field('video', __('Video'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Ad);

        $form->select('page_id', "Page")->options(\App\Page::all()->pluck('name','id'));
        $form->image('image', __('Image'))->move('uploads/ads/images')->removable();
        $form->file('video', __('Video'))->move('uploads/ads/videos')->removable();

        return $form;
    }
}
