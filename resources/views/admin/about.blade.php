@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        
     
        <div class="tabs-animation">
             <form method="post" id="upload-about-form" enctype="multipart/form-data" >
                @csrf 
        <div class="mb-3 card element-block-example">
            <div class="card-body">
                <h5 class="card-title">Edit About Us</h5>
               
                <textarea name="content" id="editor">{{ $abouts->about }}</textarea>
           
               
            </div>
        </div>
        <center>

        <button id="submit-about" class="btn btn-primary mr-2 mb-2 block-element-btn-example-3">
            Update About
        </button></center>
       </form> 
    </div> 
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

         $("#submit-about").click(function(e) {
        e.preventDefault();
        //  var aims = $("#editor").val();
         var about = CKEDITOR.instances.editor.getData();
         if(about == ""){
            swal("Error","Please Fill all fields","error");
            return;
         }

         const myForm = $('form#upload-about-form');
        //  myForm.attr('action'),
         $.ajax({
                url : "{{ route('UploadAbout') }}",
                type : 'post',
                data : {content:about},
                    success: function(response){
                       
                        if(JSON.parse(response) == 1){
                            
                            swal("Success", "Uploaded Successfully", "success");
                            $("#submit-about").html("Uploaded");
                        
                        }
                        else{
                           
                            swal("Error","Not Uploaded", "error");
                            $("#submit-about").html("Not Uploaded");
                        }
                    
                    }
            });

         });
    </script>