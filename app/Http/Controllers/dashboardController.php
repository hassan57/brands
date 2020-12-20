<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Order;
use App\User;


class dashboardController extends Controller
{

    public function index()
    {

        $feedback = new Feedback();
        $order   = new Order();
        $user    = new User();
        return view('admin.dashboard', compact('feedback', 'order', 'user'));
    }
}
