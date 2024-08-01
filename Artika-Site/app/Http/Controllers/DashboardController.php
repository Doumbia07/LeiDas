<?php

namespace App\Http\Controllers;
use App\Models\Artisan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $artisans = Artisan::all();
        return view('dashboard', ['artisans' => $artisans]);
    }
}
