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
        // $inventories=\DB::table('inventories')->select->('invoice_date');
        // $inventories=DB::Table('inventories')->select('invoice_date');
        //invoice_number
        // if($request->type=='invoice_number'){
        //     $inventories=DB::Table('inventories')->select('invoice_date');
        //     $inventories->where('invoice_number','LIKE','%'.$query.'%');
        // }
        //invoice_date
        if($request->type=='invoice_date'){
            $inventories=DB::Table('inventories')->select('invoice_date');
            $inventories->where('invoice_date','LIKE','%'.$query.'%');

            $inventories=$inventories->get();        
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array('invoice_date'=>$inventorie->invoice_date);
            }
            if(count($data)){
                return $data;
            }    
            else {
                return "No data found";
            }
        }
        // //invoice_cost

        else if($request->type=='invoice_cost'){
            $inventories=DB::Table('inventories')->select('invoice_cost');
            $inventories->where('invoice_cost','LIKE','%'.$query.'%');

            $inventories=$inventories->get();        
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array('invoice_cost'=>$inventorie->invoice_cost);
            }
            if(count($data)){
                return $data;
            }    
            else {
                return "No data found";
            }
        }
        // else if($request->type=='invoice_cost'){
        //     $inventories->where('invoice_cost','LIKE','%'.$query.'%');
        // }
        // // lot_number
        // else if($request->type=='lot_number'){
        //     $inventories->where('lot_number', 'LIKE','%'.$query.'%');
        // }
        // // item_code
        // else if($request->type=='item_code'){
        //     $inventories->where('item_code','LIKE','%'.$query.'%');
        // }
        // //products_id
        // else if($request->type=='products_id'){
        //     $inventories->where('products_id','LIKE','%'.$query.'%');
        // }
        // //product_name
        // else if($request->type=='product_name'){
        //     $inventories->where('product_name','LIKE','%'.$query.'%');
        // }
        // //category
        // else if($request->type=='category'){
        //     $inventories->where('category','LIKE','%'.$query.'%');
        // }
        // //supplier_id
        // else if($request->type=='supplier_id'){
        //     $inventories->where('supplier_id','LIKE','%'.$query.'%');
        // }
        // //total_item
        // else if($request->type=='total_item'){
        //     $inventories->where('total_item','LIKE','%'.$query.'%');
        // }
        // //total_item
        // else if($request->type=='total_item'){
        //     $inventories->where('total_item','LIKE','%'.$query.'%');
        // }

            
    }
}