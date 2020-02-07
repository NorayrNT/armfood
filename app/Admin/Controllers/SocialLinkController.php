<?php

namespace App\Admin\Controllers;

use App\SocialLink;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SocialLinkController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\SocialLink';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SocialLink);

        $grid->column('id', __('Id'));
        $grid->column('face', __('Face'));
        $grid->column('ok', __('Ok'));
        $grid->column('vk', __('Vk'));
        $grid->column('insta', __('Insta'));
        $grid->column('utube', __('Utube'));

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
        $show = new Show(SocialLink::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('face', __('Face'));
        $show->field('ok', __('Ok'));
        $show->field('vk', __('Vk'));
        $show->field('insta', __('Insta'));
        $show->field('utube', __('Utube'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SocialLink);

        $form->url('face', __('Face'));
        $form->url('ok', __('Ok'));
        $form->url('ok', __('Ok'));
        $form->url('vk', __('Vk'));
        $form->url('insta', __('Insta'));
        $form->url('utube', __('Utube'));

        return $form;
    }
}
