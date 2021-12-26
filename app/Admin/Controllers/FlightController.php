<?php

namespace App\Admin\Controllers;

use App\Models\Flight;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FlightController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Flight';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Flight());

        $grid->column('id', __('Id'));
        $grid->column('flight_no', __('Flight no'));
        $grid->column('source', __('Source'));
        $grid->column('destination', __('Destination'));
        $grid->column('coach', __('Coach'));
        $grid->column('availability', __('Availability'));
        $grid->column('time', __('Time'));
        $grid->column('date', __('Date'));
        $grid->column('ticket_price', __('Ticket price'));
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
        $show = new Show(Flight::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('flight_no', __('Flight no'));
        $show->field('source', __('Source'));
        $show->field('destination', __('Destination'));
        $show->field('coach', __('Coach'));
        $show->field('availability', __('Availability'));
        $show->field('time', __('Time'));
        $show->field('date', __('Date'));
        $show->field('ticket_price', __('Ticket price'));
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
        $form = new Form(new Flight());

        $form->number('flight_no', __('Flight no'));
        $form->text('source', __('Source'));
        $form->text('destination', __('Destination'));
        $form->text('coach', __('Coach'));
        $form->number('availability', __('Availability'));
        $form->time('time', __('Time'))->default(date('H:i:s'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $form->decimal('ticket_price', __('Ticket price'));

        return $form;
    }
}
