<?php

namespace App\Http\Controllers;



class DashboardController extends Controller
{
    public function viewTrash()
    {
        return view('admin.dashboard');
    }
}
