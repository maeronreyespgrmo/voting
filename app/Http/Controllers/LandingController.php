<?php

namespace App\Http\Controllers;

use App\Models\Procurement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\AuditTrail;

class LandingController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function table(Request $request)
    {
        $accounts = Procurement::select(
            'id',
            DB::raw('(SELECT NAME FROM procurements WHERE parent IN (SELECT id FROM procurements WHERE TYPE = 1) LIMIT 1) AS parent'),
            'name',
            'publish',
            'file',
            'parent AS parent_id'
        )->where(['alterproc'=> $request->alterproc,'type'=> 0]);
        $total = $accounts->where(['alterproc'=> $request->alterproc,'type'=> 0])->count();
        $result = $accounts->whereRaw("CONCAT(`id`, `parent`, `name`, `alterproc`, 'file') LIKE ?", ["%" . $request->search['value'] . "%"]);
        $result = $accounts->orderBy('id', 'ASC')
        ->skip($request->start)
        ->take($request->length)
        ->get();

        $filtered = (is_null($request->search['value']) ? $total : $result->where(['alterproc'=> $request->alterproc,'type'=> 0])->count());

        return array(
            "draw" => $request->draw,
            "recordsTotal" => $total,
            "recordsFiltered" => $filtered,
            "data" => $result,
            "request" => $request->all()
        );
    }
}
