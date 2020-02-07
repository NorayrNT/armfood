<?php

namespace App\Admin\Controllers;

use App\Product;
use App\Type;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product);

        $grid->fixColumns(3,-1);
        $grid->column('id', __('Id'));
        $grid->column('type_id',__('type_id'));
        $grid->column('types.name');
        $grid->column('name', __('Name'));
        $grid->column('desc', __('Desc'))->width(10);
        $grid->column('price', __('Price'));
        $grid->column('old_price', __('Old price'));
        $grid->images();
        $grid->column('discount', __('Discount'));
        $grid->column('verify', __('Verify'));
        $grid->column('new', __('New'));

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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('type_id', __('Type id'));
        $show->field('name', __('Name'));
        $show->field('desc', __('Desc'));
        $show->field('price', __('Price'));
        $show->field('old_price', __('Old price'));
        $show->images()->image();
        $show->field('discount', __('Discount'));
        $show->field('verify', __('Verify'));
        $show->field('new', __('New'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product);

        $form->select('type_id','Type')->options(Type::all()->pluck('name','id'));
        $form->text('name', __('Name'));
        $form->ckeditor('desc', __('Desc'));
        $form->number('price', __('Price'));
        $form->number('old_price', __('Old price'));
        $form->multipleImage('images', __('Images'))->move('uploads/images/products')->sortable()->removable();
        $form->number('discount', __('Discount'));
        $form->switch('verify', __('Verify'))->default(1);
        $form->switch('new', __('New'));

        return $form;
    }
}
