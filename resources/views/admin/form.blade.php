@extends('admin.layout.app')
@section('contents')
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Form</h4>
                        <p class="text-muted m-b-30 font-14">Inventory database table data</p>
                        <!-- Invoice Number -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">invoice_number:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="invoice_number" id='invoice_number' name='invoice_number'/>
                            </div>
                        </div>
                        <!-- invoice_date -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">invoice_date:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="invoice_date" id='invoice_date' name='invoice_date'/>
                            </div>
                        </div>
                        <!-- invoice_date -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">invoice_cost:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="invoice_cost" id='invoice_cost' name='invoice_cost'/>
                            </div>
                        </div>
                        <!-- lot_number -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">lot_number:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="lot_number" id='lot_number' name='lot_number'/>
                            </div>
                        </div>
                        <!--item_code -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">	item_code:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="item_code" id='item_code' name='item_code'/>
                            </div>
                        </div>
                        <!--products_id -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">	products_id:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="products_id" id='products_id' name='products_id'/>
                            </div>
                        </div>
                        <!--product_name -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">	product_name:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="product_name" id='product_name' name='product_name'/>
                            </div>
                        </div>
                        <!--category -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">	category:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="category" id='category' name='category'/>
                            </div>
                        </div>
                        <!--supplier_id -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">	supplier_id:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="supplier_id" id='supplier_id' name='supplier_id'/>
                            </div>
                        </div>
                        <!--total_item -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">	total_item:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="total_item" id='total_item' name='total_item'/>
                            </div>
                        </div>
                        <!--unit_cost -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">	unit_cost:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="unit_cost" id='unit_cost' name='unit_cost'/>
                            </div>
                        </div>
                        <!--transportation_cost -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">	transportation_cost:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="transportation_cost" id='transportation_cost' name='transportation_cost'/>
                            </div>
                        </div>
                        <!--unit_total_cost -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">	unit_total_cost:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="unit_total_cost" id='unit_total_cost' name='unit_total_cost'/>
                            </div>
                        </div>
                        <!--selling_price -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">	selling_price:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="selling_price" id='selling_price' name='selling_price'/>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group row">
                            <button class="success">Submit </button>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
            <!-- table -->
            <div class="col-md-8">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Table</h4>
                        <p class="text-muted m-b-30 font-14">Supplier database table data</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <th scope="row">{{ $row->id }}</th>
                                    <td>{{ $row->invoice_number }}</td>
                                    <td>{{ $row->invoice_date }}</td>
                                    <td>{{ $row->invoice_cost }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $data->links() !!}
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> 
</div> 
<script type="text/javascript">
          

//autocomplete script
$(document).on('focus','.autocomplete_txt',function(){
    type = $(this).data('type');
  
    if(type =='invoice_number' )autoType='invoice_number';
    if(type == 'invoice_date')autoType='invoice_date';
    if(type == 'invoice_cost')autoType='invoice_cost';
    if (type=='lot_number')autoType='lot_number';
    if (type=='item_code')autoType='item_code';
    if (type=='products_id')autoType='products_id';
    if (type=='product_name')autoType='product_name';
    if (type=='category')autoType='category';
    if (type=='supplier_id')autoType='supplier_id';
    if (type=='total_item')autoType='total_item';
    if (type=='unit_cost')autoType='unit_cost';
    if (type=='transportation_cost')autoType='transportation_cost';
    if (type=='unit_total_cost')autoType='unit_total_cost';
    if (type=='selling_price')autoType='selling_price';
  
    $(this).autocomplete({
        minLength: 4,
        source: function( request, response ) {
            $.ajax({
                url: "{{ route('searchajax') }}",
                dataType: "json",
                data: {
                    term : request.term,
                    type : type,
                },
                success: function(data) {
                    var array = $.map(data, function (item) {
                        return {
                           label: item[autoType],
                           value: item[autoType],
                           data : item
                        }
                    });
                    response(array)
                }
            });
        },
    });
});
</script>
@endsection