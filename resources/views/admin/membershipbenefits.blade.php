@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        
     
        <div class="tabs-animation">
             <form method="post" id="upload-benefit-form" enctype="multipart/form-data" >
                @csrf 
        <div class="mb-3 card element-block-example">
            <div class="card-body">
                <h5 class="card-title">Edit Membership Benefits</h5>
                <textarea name="content" id="editor">{{ $memberbenfits->benefit }}</textarea>
            </div>
        </div>
        <center>

        <button id="submit-benefit" class="btn btn-primary mr-2 mb-2 block-element-btn-example-3">
            Update Content
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

         $("#submit-benefit").click(function(e) {
        e.preventDefault();
        //  var aims = $("#editor").val();
         var benefit = CKEDITOR.instances.editor.getData();
         if(benefit == ""){
            swal("Error","Please Fill all fields","error");
            return;
         }

         const myForm = $('form#upload-benefit-form');
        //  myForm.attr('action'),
         $.ajax({
                url : "{{ route('UpdateMemberBenefit') }}",
                type : 'post',
                data : {content:benefit},
                    success: function(response){
                       
                        if(JSON.parse(response) == 1){
                            
                            swal("Success", "Updated Successfully", "success");
                            $("#submit-benefit").html("Uploaded");
                            window.location.reload();
                        
                        }
                        else{
                           
                            swal("Error","Not Uploaded", "error");
                            $("#submit-benefit").html("Not Uploaded");
                        }
                    
                    }
            });

         });
    </script>