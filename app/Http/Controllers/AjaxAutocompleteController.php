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
        else if($request->type=='invoice_date'){
            $inventories->where('invoice_date','LIKE','%'.$query.'%');
        }
        //invoice_cost
        else if($request->type=='invoice_cost'){
            $inventories->where('invoice_cost','LIKE','%'.$query.'%');
        }
        // lot_number
        else if($request->type=='lot_number'){
            $inventories->where('lot_number', 'LIKE','%'.$query.'%');
        }
        // item_code
        else if($request->type=='item_code'){
            $inventories->where('item_code','LIKE','%'.$query.'%');
        }
        
        $inventories=$inventories->get();        
        $data=array();
        foreach ($inventories as $inventorie) {
            $data[]=array('invoice_number'=>$inventorie->invoice_number);
            $data[]=array('invoice_date'=>$inventorie->invoice_date);
            $data[]=array('invoice_cost'=>$inventorie->invoice_cost);
            $data[]=array('lot_number'=>$inventorie->lot_number);
            $data[]=array('item_code'=>$inventorie->item_code);
        }
        if(count($data)){
            return $data;
        }    
        else {
            return ['invoice_number'=>'','invoice_number'=>''];
            
        }    
    }
}