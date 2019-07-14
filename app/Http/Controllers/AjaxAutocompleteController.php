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
        $suppliers=\DB::table('suppliers');
        if($request->type=='name'){
            $suppliers->where('name','LIKE','%'.$query.'%');
        }
        if($request->type=='contact_person'){
            $suppliers->where('contact_person','LIKE','%'.$query.'%');
        }
        if($request->type=='contact_number'){
            $suppliers->where('contact_number','LIKE','%'.$query.'%');
        }
        if($request->type=='supplier_email'){
            $suppliers->where('supplier_email','LIKE','%'.$query.'%');
        }
        if($request->type=='supplier_address'){
            $suppliers->where('supplier_address','LIKE','%'.$query.'%');
        }
        
        $suppliers=$suppliers->get();        
        $data=array();
        foreach ($suppliers as $supplier) {
            $data[]=array('name'=>$supplier->name);
            $data[]=array('contact_person'=>$supplier->contact_person);
            $data[]=array('contact_number'=>$supplier->contact_number);
            $data[]=array('supplier_email'=>$supplier->supplier_email);
            $data[]=array('supplier_address'=>$supplier->supplier_address);
        }
        if(count($data))
            return $data;
        else
            return ['name'=>'','sortname'=>''];
            return ['contact_person'=>'','sortname'=>''];
            return ['contact_number'=>'','sortname'=>''];
            return ['supplier_email'=>'','supplier_email'=>''];
            return ['supplier_address'=>'','supplier_address'=>''];
    }
}