<?php

namespace App\Http\Controllers\Restrurent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class RestrurentController extends Controller
{
    public function index()
    {
        return view('retrurent.restrurentList');
    }
}
