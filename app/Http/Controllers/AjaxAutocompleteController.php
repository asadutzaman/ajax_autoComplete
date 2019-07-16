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
        if($request->type=='invoice_number'){
            $inventories->where('invoice_number','LIKE','%'.$query.'%');
        }
        
        $inventories=$inventories->get();        
        $data=array();
        foreach ($inventories as $inventorie) {
            $data[]=array('invoice_number'=>$inventorie->invoice_number);
        }
        if(count($data))
            return $data;
        else
            return ['invoice_number'=>'','invoice_number'=>''];
    }
}