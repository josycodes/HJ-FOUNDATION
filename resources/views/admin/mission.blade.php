@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        
     
        <div class="tabs-animation">
             <form method="post" id="upload-mission-form" enctype="multipart/form-data" >
                @csrf 
        <div class="mb-3 card element-block-example">
            <div class="card-body">
                <h5 class="card-title">Edit Mission</h5>
               
                <textarea name="content" id="editor">{{ $abouts->mission }}</textarea>
           
               
            </div>
        </div>
        <center>

        <button id="submit-mission" class="btn btn-primary mr-2 mb-2 block-element-btn-example-3">
            Update Mission
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

         $("#submit-mission").click(function(e) {
        e.preventDefault();
        //  var aims = $("#editor").val();
         var mission = CKEDITOR.instances.editor.getData();
         if(mission == ""){
            swal("Error","Please Fill all fields","error");
            return;
         }

         const myForm = $('form#upload-mission-form');
        //  myForm.attr('action'),
         $.ajax({
                url : "{{ route('UploadMission') }}",
                type : 'post',
                data : {content:mission},
                    success: function(response){
                       
                        if(JSON.parse(response) == 1){
                            
                            swal("Success", "Uploaded Successfully", "success");
                            $("#submit-mission").html("Uploaded");
                        
                        }
                        else{
                           
                            swal("Error","Not Uploaded", "error");
                            $("#submit-mission").html("Not Uploaded");
                        }
                    
                    }
            });

         });
    </script>