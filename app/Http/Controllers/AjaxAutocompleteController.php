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
        if($request->type=='invoice_number'){
            $inventories=DB::Table('inventories')->select('invoice_number')->distinct();
            $inventories->where('invoice_number','LIKE','%'.$query.'%');
            $inventories->limit(10);

            $inventories=$inventories->get();        
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array('invoice_number'=>$inventorie->invoice_number);
            }
            if(count($data)){
                return $data;
            }    
            else {
                return "No data found";
            }
        }
        //invoice_date
        else if($request->type=='invoice_date'){
            $inventories=DB::Table('inventories')->select('invoice_date')->distinct();
            $inventories->where('invoice_date','LIKE','%'.$query.'%');
            $inventories->limit(10);

            $inventories=$inventories->get();        
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array('invoice_date'=>$inventorie->invoice_date);
            }
            if(count($data)){
                return $data;
            }    
            else {
                // return "No data found";
            }
        }
        //invoice_cost
        else if($request->type=='invoice_cost'){
            $inventories=DB::Table('inventories')->select('invoice_cost')->distinct();
            $inventories->where('invoice_cost','LIKE','%'.$query.'%');
            $inventories->limit(10);

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
        // lot_number
        else if($request->type=='lot_number'){
            $inventories=DB::Table('inventories')->select('lot_number')->distinct();
            $inventories->where('lot_number','LIKE','%'.$query.'%');
            $inventories->limit(10);

            $inventories=$inventories->get();        
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array('lot_number'=>$inventorie->lot_number);
            }
            if(count($data)){
                return $data;
            }    
            else {
                return "No data found";
            }
        }
        // item_code
        else if($request->type=='item_code'){
            $inventories=DB::Table('inventories')->select('item_code')->distinct();
            $inventories->where('item_code','LIKE','%'.$query.'%');
            $inventories->limit(10);

            $inventories=$inventories->get();        
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array('item_code'=>$inventorie->item_code);
            }
            if(count($data)){
                return $data;
            }    
            else {
                return "No data found";
            }
        }
        // //products_id
        else if($request->type=='products_id'){
            $inventories=DB::Table('inventories')->select('products_id')->distinct();
            $inventories->where('products_id','LIKE','%'.$query.'%');
            $inventories->limit(10);

            $inventories=$inventories->get();        
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array('products_id'=>$inventorie->products_id);
            }
            if(count($data)){
                return $data;
            }    
            else {
                return "No data found";
            }
        }
        //product_name
        else if($request->type=='product_name'){
            $inventories=DB::Table('inventories')->select('product_name')->distinct();
            $inventories->where('product_name','LIKE','%'.$query.'%');
            $inventories->limit(10);

            $inventories=$inventories->get();        
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array('product_name'=>$inventorie->product_name);
            }
            if(count($data)){
                return $data;
            }    
            else {
                return "No data found";
            }
        }
        //category
        else if($request->type=='category'){
            $inventories=DB::Table('inventories')->select('category')->distinct();
            $inventories->where('category','LIKE','%'.$query.'%');
            $inventories->limit(10);

            $inventories=$inventories->get();        
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array('category'=>$inventorie->category);
            }
            if(count($data)){
                return $data;
            }    
            else {
                return "No data found";
            }
        }
        // supplier_id
        else if($request->type=='supplier_id'){
            $inventories=DB::Table('inventories')->select('supplier_id')->distinct();
            $inventories->where('supplier_id','LIKE','%'.$query.'%');
            $inventories->limit(10);

            $inventories=$inventories->get();
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array('supplier_id'=>$inventorie->supplier_id);
            }
            if(count($data)){
                return $data;
            }
            else {
                return "No data found";
            }
        }
        // total_item
        else if($request->type=='total_item'){
            $inventories=DB::Table('inventories')->select('total_item')->distinct();
            $inventories->where('total_item','LIKE','%'.$query.'%');
            $inventories->limit(10);

            $inventories=$inventories->get();
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array('total_item'=>$inventorie->total_item);
            }
            if(count($data)){
                return $data;
            }
            else {
                return "No data found";
            }
        }
        // 	transportation_cost
        else if($request->type=='transportation_cost'){
            $inventories=DB::Table('inventories')->select('transportation_cost')->distinct();
            $inventories->where('transportation_cost','LIKE','%'.$query.'%');
            $inventories->limit(10);

            $inventories=$inventories->get();
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array('transportation_cost'=>$inventorie->transportation_cost);
            }
            if(count($data)){
                return $data;
            }
            else {
                return "No data found";
            }
        }
        // 	unit_total_cost
        else if($request->type=='unit_total_cost'){
            $inventories=DB::Table('inventories')->select('unit_total_cost')->distinct();
            $inventories->where('unit_total_cost','LIKE','%'.$query.'%');
            $inventories->limit(10);

            $inventories=$inventories->get();
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array('unit_total_cost'=>$inventorie->unit_total_cost);
            }
            if(count($data)){
                return $data;
            }
            else {
                return "No data found";
            }
        }
        // 	selling_price
        else if($request->type=='selling_price'){
            $inventories=DB::Table('inventories')->select('selling_price');
            $inventories->where('selling_price','LIKE','%'.$query.'%');
            $inventories->limit(10);

            $inventories=$inventories->get();
            $data=array();
            foreach ($inventories as $inventorie) {
                $data[]=array('selling_price'=>$inventorie->selling_price);
            }
            if(count($data)){
                return $data;
            }
            else {
                return "No data found";
            }
        }
    }
}