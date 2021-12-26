<?php

namespace App\Admin\Controllers;

use App\Models\Ticket;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TicketController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Ticket';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Ticket());

        $grid->column('id', __('Id'));
        $grid->column('flightID', __('FlightID'));
        $grid->column('price', __('Price'));
        $grid->column('uID', __('UID'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('seats', __('Seats'));
        $grid->column('booking_date', __('Booking date'));
        $grid->column('travel_date', __('Travel date'));
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
        $show = new Show(Ticket::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('flightID', __('FlightID'));
        $show->field('price', __('Price'));
        $show->field('uID', __('UID'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->field('seats', __('Seats'));
        $show->field('booking_date', __('Booking date'));
        $show->field('travel_date', __('Travel date'));
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
        $form = new Form(new Ticket());

        $form->number('flightID', __('FlightID'));
        $form->number('price', __('Price'));
        $form->number('uID', __('UID'));
        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->mobile('phone', __('Phone'));
        $form->number('seats', __('Seats'));
        $form->date('booking_date', __('Booking date'))->default(date('Y-m-d'));
        $form->date('travel_date', __('Travel date'))->default(date('Y-m-d'));

        return $form;
    }
}
