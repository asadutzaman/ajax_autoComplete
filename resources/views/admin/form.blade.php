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
                        <div id="checkbox_div">
                            <p>Hide Column</p>
                            <li><input type="checkbox" value="hide" id="invoice_col_hs" onchange="hide_show_table(this.id);">Invoice Number</li>
                            <li><input type="checkbox" value="hide" id="invoice_date_hs" onchange="hide_show_table(this.id);">Date</li>
                            <li><input type="checkbox" value="hide" id="invoice_cost_hs" onchange="hide_show_table(this.id);">Cost</li>
                        </div>
                        <p class="text-muted m-b-30 font-14">Supplier database table data</p>
                        <div class="form-group col-md-4 pull-right">
                            <input type="text" name="serach" placeholder="Search" id="serach" class="form-control" />
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th width="5%" class="sorting" data-sorting_type="asc" data-column_name="id" style="cursor: pointer">ID <span id="id_icon"></span></th>
                                        <th width="38%" id="invoice_col_hs_head" class="sorting" data-sorting_type="asc" data-column_name="invoice_number" style="cursor: pointer">Invoice Number <span id="invoice_number_icon"></span></th>
                                        <th width="38%" id="invoice_date_hs_head" class="sorting" data-sorting_type="asc" data-column_name="invoice_date" style="cursor: pointer">Invoice date <span id="invoice_date_icon"></span></th>
                                        <th width="57%" id="invoice_cost_hs_head">Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @include('admin.pagination_data')
                                </tbody>
                            </table>
                        <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                        <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                        <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> 
</div> 
<script type="text/javascript">
    //filter autocomplete script
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

    //sorting and searching portion
    $(document).ready(function(){

        function clear_icon(){
            $('#id_icon').html('');
            $('#invoice_number_icon').html('');
            $('#invoice_date_icon').html('');
        }

        function fetch_data(page, sort_type, sort_by, query){
            $.ajax({
                url:"/pagination/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
                success:function(data){
                    $('tbody').html('');
                    $('tbody').html(data);
                }
            })
        }

        $(document).on('keyup', '#serach', function(){
            var query = $('#serach').val();
            var column_name = $('#hidden_column_name').val();
            var sort_type = $('#hidden_sort_type').val();
            var page = $('#hidden_page').val();
            fetch_data(page, sort_type, column_name, query);
        });

        $(document).on('click', '.sorting', function(){
            var column_name = $(this).data('column_name');
            var order_type = $(this).data('sorting_type');
            var reverse_order = '';
            if(order_type == 'asc'){
                $(this).data('sorting_type', 'desc');
                reverse_order = 'desc';
                clear_icon();
                $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
            }
            if(order_type == 'desc'){
                $(this).data('sorting_type', 'asc');
                reverse_order = 'asc';
                clear_icon
                $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
            }
            $('#hidden_column_name').val(column_name);
            $('#hidden_sort_type').val(reverse_order);
            var page = $('#hidden_page').val();
            var query = $('#serach').val();
            fetch_data(page, reverse_order, column_name, query);
        });

        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            $('#hidden_page').val(page);
            var column_name = $('#hidden_column_name').val();
            var sort_type = $('#hidden_sort_type').val();
            var query = $('#serach').val();
            
            $('li').removeClass('active');
            $(this).parent().addClass('active');
            fetch_data(page, sort_type, column_name, query);
        });

    });

    //table colimn hide and show portion
    function hide_show_table(col_name){
        var checkbox_val=document.getElementById(col_name).value;
        if(checkbox_val=="hide"){
            var all_col=document.getElementsByClassName(col_name);
            for(var i=0;i<all_col.length;i++){
                all_col[i].style.display="none";
            }
            document.getElementById(col_name+"_head").style.display="none";
            document.getElementById(col_name).value="show";
        }
        else{
            var all_col=document.getElementsByClassName(col_name);
            for(var i=0;i<all_col.length;i++){
                all_col[i].style.display="table-cell";
            }
            document.getElementById(col_name+"_head").style.display="table-cell";
            document.getElementById(col_name).value="hide";
        }
    }
    //filter data
    function filterSearch() {
        var action = 'fetch_data';
        var x = $('#x').val();
        var y = $('#y').val();
        $.ajax({
            url:"action.php",
            method:"POST",
            dataType: "json",
            data:{action:action, x: x, y:y, },
            success:function(data){
                $('.searchResult').html(data.html);
            }
        });
    }
</script>

@endsection