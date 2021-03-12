@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        
     
        <div class="tabs-animation">
             <form method="post" id="upload-research-form" enctype="multipart/form-data" >
                @csrf 
        <div class="mb-3 card element-block-example">
            <div class="card-body">
                <h5 class="card-title">Edit Research Content</h5>
               
                <textarea name="content" id="editor">{{ $programme->research }}</textarea>
    
            </div>
        </div>
        <center>

        <button id="submit-research" class="btn btn-primary mr-2 mb-2 block-element-btn-example-3">
            Update Research
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

         $("#submit-research").click(function(e) {
        e.preventDefault();
        //  var aims = $("#editor").val();
         var research = CKEDITOR.instances.editor.getData();
         if(research == ""){
            swal("Error","Please Fill all fields","error");
            return;
         }

         const myForm = $('form#upload-research-form');
        //  myForm.attr('action'),
         $.ajax({
                url : "{{ route('UploadResearch') }}",
                type : 'post',
                data : {content:research},
                    success: function(response){
                       
                        if(JSON.parse(response) == 1){
                            
                            swal("Success", "Uploaded Successfully", "success");
                            $("#submit-research").html("Uploaded");
                        
                        }
                        else{
                           
                            swal("Error","Not Uploaded", "error");
                            $("#submit-research").html("Not Uploaded");
                        }
                    
                    }
            });

         });
    </script>