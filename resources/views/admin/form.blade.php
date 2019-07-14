@extends('admin.layout.app')
@section('contents')
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card m-b-20">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Form</h4>
                        <p class="text-muted m-b-30 font-14">Supplier database table data</p>
                        <!-- name -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Name:</label></br>
                            <div class="col-sm-12">
                            <input class="form-control autocomplete_txt" type='text' data-type="name" id='name' name='name'/>
                            </div>
                        </div>
                        <!-- contact_person -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Contact Person:</label></br>
                            <div class="col-sm-12">
                                <input class="form-control autocomplete_txt" type='text' data-type="contact_person" id='contact_person' name='contact_person'/>
                            </div>
                        </div>
                        <!-- contact_number -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Contact number:</label></br>
                            <div class="col-sm-12">
                                <input class="form-control autocomplete_txt" type='text' data-type="contact_number" id='contact_number' name='contact_number'/>
                            </div>
                        </div>
                        <!-- alt_contact_person -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Alt Contact number:</label></br>
                            <div class="col-sm-12">
                                <input class="form-control autocomplete_txt" type='text' data-type="alt_contact_person" id='alt_contact_person' name='alt_contact_person'/>
                            </div>
                        </div>
                        <!-- supplier_email -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Supplier Email:</label></br>
                            <div class="col-sm-12">
                                <input class="form-control autocomplete_txt" type='text' data-type="supplier_email" id='supplier_email' name='supplier_email'/>
                            </div>
                        </div>
                        <!-- supplier_address -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Supplier Address:</label></br>
                            <div class="col-sm-12">
                                <input class="form-control autocomplete_txt" type='text' data-type="supplier_address" id='supplier_address' name='supplier_address'/>
                            </div>
                        </div>
                        <!-- extra_info -->
                        <div class="form-group row">
                            <label for="example-text-input" class="col-form-label">Extra Info:</label></br>
                            <div class="col-sm-12">
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
    </div> 
</div> 
<script type="text/javascript">
          

//autocomplete script
$(document).on('focus','.autocomplete_txt',function(){
    type = $(this).data('type');
  
    if(type =='name' )autoType='name'; 
    if(type =='contact_person' )autoType='contact_person'; 
    if(type=='contact_number')autoType='contact_number';
    if(type=='supplier_email')autoType='supplier_email';
    if(type=='supplier_address')autoType='supplier_address';
  
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