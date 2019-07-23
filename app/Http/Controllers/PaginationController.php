<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PaginationController extends Controller
{
    function index()
    {
     $data = DB::table('inventories')->orderBy('id', 'asc')->paginate(10);
     return view('pagination', compact('data'));
    }

    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $sort_by = $request->get('sortby');
      $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
      $data = DB::table('inventories')
                    ->where('id', 'like', '%'.$query.'%')
                    ->orWhere('invoice_number', 'like', '%'.$query.'%')
                    ->orWhere('invoice_date', 'like', '%'.$query.'%')
                    ->orWhere('invoice_cost', 'like', '%'.$query.'%')
                    ->orderBy($sort_by, $sort_type)
                    ->paginate(10);
      return view('pagination_data', compact('data'))->render();
     }
    }
}
?>