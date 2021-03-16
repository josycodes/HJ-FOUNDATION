@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        
     
        <div class="tabs-animation">
             <form method="post" id="upload-volunteer-form" enctype="multipart/form-data" >
                @csrf 
        <div class="mb-3 card element-block-example">
            <div class="card-body">
                <h5 class="card-title">Edit Volunteer Opportunities</h5>
                <textarea name="content" id="editor"></textarea>
            </div>
        </div>
        <center>

        <button id="submit-volunteer" class="btn btn-primary mr-2 mb-2 block-element-btn-example-3">
            Update Volunteer Content
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

         $("#submit-volunteer").click(function(e) {
        e.preventDefault();
        //  var aims = $("#editor").val();
         var volunteer = CKEDITOR.instances.editor.getData();
         if(volunteer == ""){
            swal("Error","Please Fill all fields","error");
            return;
         }

         const myForm = $('form#upload-volunteer-form');
        //  myForm.attr('action'),
         $.ajax({
                url : "{{ route('UploadVolunteerOppurnities') }}",
                type : 'post',
                data : {content:volunteer},
                    success: function(response){
                       
                        if(JSON.parse(response) == 1){
                            
                            swal("Success", "Uploaded Successfully", "success");
                            $("#submit-volunteer").html("Uploaded");
                            window.location.reload();
                        
                        }
                        else{
                           
                            swal("Error","Not Uploaded", "error");
                            $("#submit-volunteer").html("Not Uploaded");
                        }
                    
                    }
            });

         });
    </script>