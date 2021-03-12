@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        
     
        <div class="tabs-animation">
             <form method="post" id="upload-goal-form" enctype="multipart/form-data" >
                @csrf 
        <div class="mb-3 card element-block-example">
            <div class="card-body">
                <h5 class="card-title">Edit Goals</h5>
               
                <textarea name="content" id="editor">{{ $abouts->goal }}</textarea>
           
               
            </div>
        </div>
        <center>

        <button id="submit-goal" class="btn btn-primary mr-2 mb-2 block-element-btn-example-3">
            Update Goal
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

         $("#submit-goal").click(function(e) {
        e.preventDefault();
        //  var aims = $("#editor").val();
         var goal = CKEDITOR.instances.editor.getData();
         if(goal == ""){
            swal("Error","Please Fill all fields","error");
            return;
         }

         const myForm = $('form#upload-goal-form');
        //  myForm.attr('action'),
         $.ajax({
                url : "{{ route('UploadGoal') }}",
                type : 'post',
                data : {content:goal},
                    success: function(response){
                       
                        if(JSON.parse(response) == 1){
                            
                            swal("Success", "Uploaded Successfully", "success");
                            $("#submit-goal").html("Uploaded");
                        
                        }
                        else{
                           
                            swal("Error","Not Uploaded", "error");
                            $("#submit-goal").html("Not Uploaded");
                        }
                    
                    }
            });

         });
    </script>