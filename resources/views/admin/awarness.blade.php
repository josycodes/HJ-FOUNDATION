@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        
     
        <div class="tabs-animation">
             <form method="post" id="upload-awareness-form" enctype="multipart/form-data" >
                @csrf 
        <div class="mb-3 card element-block-example">
            <div class="card-body">
                <h5 class="card-title">Edit Awarness Content</h5>
               
                <textarea name="content" id="editor">{{ $programme->awareness }}</textarea>
           
               
            </div>
        </div>
        <center>

        <button id="submit-awareness" class="btn btn-primary mr-2 mb-2 block-element-btn-example-3">
            Update Awarness
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

         $("#submit-awareness").click(function(e) {
        e.preventDefault();
        //  var aims = $("#editor").val();
         var awareness = CKEDITOR.instances.editor.getData();
         if(awareness == ""){
            swal("Error","Please Fill all fields","error");
            return;
         }

         const myForm = $('form#upload-awareness-form');
        //  myForm.attr('action'),
         $.ajax({
                url : "{{ route('UploadAwareness') }}",
                type : 'post',
                data : {content:awareness},
                    success: function(response){
                       
                        if(JSON.parse(response) == 1){
                            
                            swal("Success", "Uploaded Successfully", "success");
                            $("#submit-awareness").html("Uploaded");
                        
                        }
                        else{
                           
                            swal("Error","Not Uploaded", "error");
                            $("#submit-awareness").html("Not Uploaded");
                        }
                    
                    }
            });

         });
    </script>