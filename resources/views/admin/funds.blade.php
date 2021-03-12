@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        
     
        <div class="tabs-animation">
             <form method="post" id="upload-fund-form" enctype="multipart/form-data" >
                @csrf 
        <div class="mb-3 card element-block-example">
            <div class="card-body">
                <h5 class="card-title">Edit Fund Raising Content</h5>
               
                <textarea name="content" id="editor">{{ $programme->fund }}</textarea>
    
            </div>
        </div>
        <center>

        <button id="submit-fund" class="btn btn-primary mr-2 mb-2 block-element-btn-example-3">
            Update Fund
        </button></center>
       </form> </div> 
    </div>

    @include('layout.footerdash');
   
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
    
    <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

         $("#submit-fund").click(function(e) {
        e.preventDefault();
        //  var aims = $("#editor").val();
         var fund = CKEDITOR.instances.editor.getData();
         if(fund == ""){
            swal("Error","Please Fill all fields","error");
            return;
         }

         const myForm = $('form#upload-fund-form');
        //  myForm.attr('action'),
         $.ajax({
                url : "{{ route('UploadFund') }}",
                type : 'post',
                data : {content:fund},
                    success: function(response){
                       
                        if(JSON.parse(response) == 1){
                            
                            swal("Success", "Uploaded Successfully", "success");
                            $("#submit-fund").html("Uploaded");
                        
                        }
                        else{
                           
                            swal("Error","Not Uploaded", "error");
                            $("#submit-fund").html("Not Uploaded");
                        }
                    
                    }
            });

         });
    </script>