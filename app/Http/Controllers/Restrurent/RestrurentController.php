<?php

namespace App\Http\Controllers\Restrurent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;
use App\Models\Restrurent\Restrurent;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class RestrurentController extends Controller
{
    public function index()
    {
        $restrurents = DB::table('restrurents')
            ->paginate(10);
        return view('restrurent.restrurentList', ['restrurents' => $restrurents]);
    }


    public function createPage()
    {
        return view('restrurent.addRestrurent');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'phone' => 'required|min:11',
            'address' => 'required',
            'manager_id' => 'required|numeric'
        ]);

        DB::table('restrurents')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'manager_id' => $request->manager_id,
        ]);
        Session()->flash('sms', 'Restrurent Added');
        return redirect(route('RestrurentList'));
    }

    public function updatePage($id)
    {
        $restrurent = DB::table('restrurents')
            ->where('id', $id)
            ->get();
        return view('restrurent.editRestrurent', ['restrurent' => $restrurent]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'phone' => 'required|min:11',
            'address' => 'required',
            'manager_id' => 'required|numeric'
        ]);

        DB::table('restrurents')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'manager_id' => $request->manager_id,
            ]);
        Session()->flash('sms', 'Restrurent Update');
        return redirect(route('RestrurentList'));
    }

    public function destroy($id)
    {

        DB::table('restrurents')
            ->where('id', $id)
            ->delete();

        Session()->flash('sms', 'Restrurent Deleted');
        return redirect(route('RestrurentList'));
    }
}
