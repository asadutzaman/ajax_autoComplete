@extends('admin.layout.app')
@section('contents')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Form</h4>
                        <p class="text-muted m-b-30 font-14">form for example</p>
                        <!-- name -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-10">
                                <input class="form-control autocomplete_txt" type='text' data-type="name" id='name' name='name'/>
                            </div>
                        </div>
                        <!-- contact_person -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Contact Person:</label>
                            <div class="col-sm-10">
                                <input class="form-control autocomplete_txt" type='text' data-type="contact_person" id='contact_person' name='contact_person'/>
                            </div>
                        </div>
                        <!-- contact_number -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Contact number:</label>
                            <div class="col-sm-10">
                                <input class="form-control autocomplete_txt" type='text' data-type="contact_number" id='contact_number' name='contact_number'/>
                            </div>
                        </div>
                        <!-- alt_contact_person -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Alt Contact Person:</label>
                            <div class="col-sm-10">
                                <input class="form-control autocomplete_txt" type='text' data-type="alt_contact_person" id='alt_contact_person' name='alt_contact_person'/>
                            </div>
                        </div>
                        <!-- supplier_email -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Email:</label>
                            <div class="col-sm-10">
                                <input class="form-control autocomplete_txt" type='text' data-type="supplier_email" id='supplier_email' name='supplier_email'/>
                            </div>
                        </div>
                        <!-- supplier_address -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Name:</label>
                            <div class="col-sm-10">
                                <input class="form-control autocomplete_txt" type='text' data-type="supplier_address" id='supplier_address' name='supplier_address'/>
                            </div>
                        </div>
                        <!-- extra_info -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Extra Info:</label>
                            <div class="col-sm-10">
                                <input class="form-control autocomplete_txt" type='text' data-type="extra_info" id='extra_info' name='extra_info'/>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group row">
                            <button class="success">Submit </button>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container -->
</div> <!-- Page content Wrapper -->
<script type="text/javascript">
          

//autocomplete script
$(document).on('focus','.autocomplete_txt',function(){
    type = $(this).data('type');
    
    if(type =='name' )autoType='name'; 
    if(type =='contact_person' )autoType='contact_person'; 
    if(type=='contact_number')autoType='contact_number';
    if(type=='alt_contact_number')autoType='alt_contact_number';
    if(type=='supplier_mail')autoType='supplier_mail';
    if(type=='supplier_address')autoType='supplier_address';
    if(type=='extra_info')autoType='extra_info';
  
    $(this).autocomplete({
        minLength: 0,
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