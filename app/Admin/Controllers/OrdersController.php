<?php

namespace App\Admin\Controllers;

use App\Models\Orders;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OrdersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Orders';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Orders());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone_no', __('Phone no'));
        $grid->column('amount', __('Amount'));
        $grid->column('address', __('Address'));
        $grid->column('transaction_id', __('Transaction id'));
        $grid->column('currency', __('Currency'));
        $grid->column('status', __('Status'));
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
        $show = new Show(Orders::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('phone_no', __('Phone no'));
        $show->field('amount', __('Amount'));
        $show->field('address', __('Address'));
        $show->field('transaction_id', __('Transaction id'));
        $show->field('currency', __('Currency'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Orders());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->text('phone_no', __('Phone no'));
        $form->decimal('amount', __('Amount'));
        $form->text('address', __('Address'));
        $form->text('transaction_id', __('Transaction id'));
        $form->text('currency', __('Currency'));
        $form->text('status', __('Status'));

        return $form;
    }
}
