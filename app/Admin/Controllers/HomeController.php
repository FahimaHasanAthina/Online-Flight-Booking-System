<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
         return $content
            ->title('Online Flight Booking System')
            ->description('Admin Dashboard')

            //>row('Welcome To Admin Panel')
            ->row(function (Row $row) {

                 $row->column(4, function (Column $column) {
                     //$column->append(Dashboard::environment());
                     $column->append('Welcome To Admin Panel');
              });

                // $row->column(4, function (Column $column) {
                //     $column->append(Dashboard::extensions());
                // });

                // $row->column(4, function (Column $column) {
                //     $column->append(Dashboard::dependencies());
                // });
            });
    }
}
