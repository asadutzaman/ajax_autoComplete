<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AjaxAutocompleteController extends Controller
{
    public function index(){        
        return view('admin.index');
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
        if ($request->type=='extra_info') {
            $suppliers->where('extra_info','LIKE','%'.$query.'%');
        }
           $suppliers=$suppliers->get();        
        $data=array();
        foreach ($suppliers as $supplier) {
                $data[]=array('name'=>$supplier->name,'contact_person'=>$supplier->contact_person,'supplier_email'=>$supplier->supplier_email,'supplier_address'=>$supplier->supplier_address,'extra_info'=>$supplier->extra_info);
        }
        if(count($data))
             return $data;
        else
            return ['name'=>'','sortname'=>''];
    }
}