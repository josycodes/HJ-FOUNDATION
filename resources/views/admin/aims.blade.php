@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        
     
        <div class="tabs-animation">
             <form method="post" id="upload-aims-form" enctype="multipart/form-data" >
                @csrf 
        <div class="mb-3 card element-block-example">
            <div class="card-body">
                <h5 class="card-title">Edit Aims and Objective</h5>
               
                <textarea name="content" id="editor">{{ $abouts->aims }}</textarea>
           
               
            </div>




        </div>
        <center>

        <button id="submit-aims" class="btn btn-primary mr-2 mb-2 block-element-btn-example-3">
            Update Aims and Objective
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

         $("#submit-aims").click(function(e) {
        e.preventDefault();
        //  var aims = $("#editor").val();
         var aims = CKEDITOR.instances.editor.getData();
         if(aims == ""){
            swal("Error","Please Fill all fields","error");
            return;
         }

         const myForm = $('form#upload-aims-form');
        //  myForm.attr('action'),
         $.ajax({
                url : "{{ route('UploadAims') }}",
                type : 'post',
                data : {content:aims},
                    success: function(response){
                       
                        if(JSON.parse(response) == 1){
                            
                            swal("Success", "Uploaded Successfully", "success");
                            $("#submit-aims").html("Uploaded");
                        
                        }
                        else{
                           
                            swal("Error","Not Uploaded", "error");
                            $("#submit-aims").html("Not Uploaded");
                        }
                    
                    }
            });

         });
    </script>