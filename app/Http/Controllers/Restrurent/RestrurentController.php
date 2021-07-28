<?php

namespace App\Http\Controllers\Restrurent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;
use App\Models\Restrurent\Restrurent;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class RestrurentController extends Controller
{
    public function index()
    {
        $restrurents = DB::table('restrurents')
        ->paginate(10);
        return view('retrurent.restrurentList', ['restrurents'=>$restrurents]);
    }
}
