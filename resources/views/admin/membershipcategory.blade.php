@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        
     
        <div class="tabs-animation">
             <form method="post" id="upload-member-form" enctype="multipart/form-data" >
                @csrf 
        <div class="mb-3 card element-block-example">
            <div class="card-body">
                <h5 class="card-title">Edit Membership Category Opportunities</h5>
                <textarea name="content" id="editor">{{ $membercategory->member_cat }}</textarea>
            </div>
        </div>
        <center>

        <button id="submit-member" class="btn btn-primary mr-2 mb-2 block-element-btn-example-3">
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

         $("#submit-member").click(function(e) {
        e.preventDefault();
        //  var aims = $("#editor").val();
         var member = CKEDITOR.instances.editor.getData();
         if(member == ""){
            swal("Error","Please Fill all fields","error");
            return;
         }

         const myForm = $('form#upload-member-form');
        //  myForm.attr('action'),
         $.ajax({
                url : "{{ route('UpdateMemberCategory') }}",
                type : 'post',
                data : {content:member},
                    success: function(response){
                       
                        if(JSON.parse(response) == 1){
                            
                            swal("Success", "Updated Successfully", "success");
                            $("#submit-member").html("Uploaded");
                            window.location.reload();
                        
                        }
                        else{
                           
                            swal("Error","Not Uploaded", "error");
                            $("#submit-member").html("Not Uploaded");
                        }
                    
                    }
            });

         });
    </script>