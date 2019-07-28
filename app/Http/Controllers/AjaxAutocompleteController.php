<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class AjaxAutocompleteController extends Controller
{
    function index()
    {
        $data = DB::table('inventories')->orderBy('id', 'asc')->paginate(10);
        return view('admin.form', compact('data'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax()){
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
            return view('admin.pagination_data', compact('data'))->render();
        }
    }

    public function searchResponse(Request $request){
        $query = $request->get('term','');
        $field = $request->get('type');
        //dd($field);
        if($request->type==$field){
            $inventories=DB::Table('inventories')->select($field)->distinct();
            $inventories->where($field. '','LIKE','%'.$query.'%');
            $inventories->limit(10);

            $inventories=$inventories->get();
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array($field=>$inventorie->$field);
            }
            if(count($data)){
                return $data;
            }    
            else {
                return "No data found";
            }
        }
    }

    public function filter_data(Request $request){
        if($request->ajax()){
            $invoice_number = $request->get('invoice_number');
            $invoice_cost = $request->get('invoice_cost');
            
            $data = DB::table('inventories')
                    ->where('invoice_number', 'like', $invoice_number)
                    ->orWhere('invoice_cost', 'like', $invoice_cost)
                    ->paginate(10);
                    
            return view('admin.pagination_data', compact('data'))->render();
        }
    }
}