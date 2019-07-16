<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class AjaxAutocompleteController extends Controller
{
    public function index(){
        
        return view('admin.form');
    }
    public function searchResponse(Request $request){
        $query = $request->get('term','');
        $inventories=\DB::table('inventories');
        //invoice_number
        if($request->type=='invoice_number'){
            $inventories->where('invoice_number','LIKE','%'.$query.'%');
        }
        //invoice_date
        if($request->type=='invoice_date'){
            $inventories->where('invoice_date','LIKE','%'.$query.'%');
        }
        
        $inventories=$inventories->get();        
        $data=array();
        foreach ($inventories as $inventorie) {
            $data[]=array('invoice_number'=>$inventorie->invoice_number);
            $data[]=array('invoice_date'=>$inventorie->invoice_date);
        }
        if(count($data))
            return $data;
        else
            return ['invoice_number'=>'','invoice_number'=>''];
            return ['invoice_date'=>'','invoice_date'=>''];
    }
}