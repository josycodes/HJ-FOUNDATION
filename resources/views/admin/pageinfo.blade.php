@include('layout.head')
@include('layout.header')
@include('layout.sidebar')


<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
                <div class="page-title-wrapper">
            
                </div>
        </div>
    <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                  
                            <div class="row">

                        <div class="col-md-12">
                       
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                <h5 class="card-title">Upload Logo</h5>
                                <form method="post" id="upload-image-form" enctype="multipart/form-data" action="{{ route('logoUpload') }}">
                                    @csrf 
                                    <input type="file" name="filelogo" id="file" class="form-control" onchange="PreviewFile(this)" required/> 
                                    <br />
                                    <img id="previewImg" width="100" height="100" alt="UPLOAD LOGO"/>
                                    <button class="btn btn-success type="submit" id="submit-pic">Submit</button>
                                </form>
                                </div>
                               
                            </div>
                            
                        </div>
         
            <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data" action="{{ route('SubmitBasics') }}" id="basics-form">
                            @csrf 
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Upload Basic Information</h5>
                      
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Name</label>
                                <div class="col-sm-10">
                                    <input name="sitename" type="text" class="form-control" value="{{ $allbasics->sitename }}" required id="sitename">
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Name1</label>
                                <div class="col-sm-10">
                                    <input name="sitename1" type="text" class="form-control" value="{{ $allbasics->sitename1 }}" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Domain</label>
                                <div class="col-sm-10">
                                    <input name="sitedomain" type="text" class="form-control" value="{{ $allbasics->sitedomain }}" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Facebook Address</label>
                                <div class="col-sm-10">
                                    <input name="sitefacebook" type="text" class="form-control" value="{{ $allbasics->sitefacebook }}" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Instagram Address</label>
                                <div class="col-sm-10">
                                    <input name="siteinstagram" type="text" class="form-control" value="{{ $allbasics->siteinstagram }}" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Twitter Address</label>
                                <div class="col-sm-10">
                                    <input name="sitetwitter" type="text" class="form-control" value="{{ $allbasics->sitetwitter }}" required>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site LinkedIn</label>
                                <div class="col-sm-10">
                                    <input name="sitelinkedin" type="text" class="form-control" value="{{ $allbasics->sitelinkedin }}" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Location Address</label>
                                <div class="col-sm-10">
                                    <input name="sitelocation" type="text" class="form-control" value="{{ $allbasics->siteaddress }}" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Phone</label>
                                <div class="col-sm-10">
                                    <input name="sitephone" type="text" class="form-control" value="{{ $allbasics->sitephone }}" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Email</label>
                                <div class="col-sm-10">
                                    <input name="siteemail" type="text" class="form-control" value="{{ $allbasics->siteemail }}" required>
                                </div>
                            </div>
                            
                            <div class="position-relative row form-check">
                                <div class="col-md-12">
                                <center>
                                <button class="ladda-button mb-2 mr-2 btn btn-shadow btn-warning" data-style="slide-down" id="submit" type="submit">
                                <span class="ladda-label">Save Settings</span>
                                     <span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div></button>
                                        </button>
                                            </center>
                                </div>
                            </div>
                                                       </div>
                </div>
           </form> 
        </div>
 
                        

                    </div>
               

                </div>
                
</div>
</div>

@include('layout.footerdash');

<script>
    function PreviewFile(input){
       var file = $("input[type=file]").get(0).files[0];
        if(file){
            var reader = new FileReader();
            reader.onload = function(){
                $('#previewImg').attr("src",reader.result);
            }
            reader.readAsDataURL(file); 
        }
    }
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        //"use strict";
        //handle the submit event
        $("#submit-pic").click(function(e) {
            e.preventDefault();
		//get image file
            var image = $('#file')[0].files[0];
            var fd = new FormData();
            if($('#file').get(0).files.length === 0){
              swal("Empty File", "Please Select a file","error");
              return;
            }
            //append image file to form data
            var token = "{{ csrf_token() }}";
             fd.append('_token',token);

             fd.append('file', image);
            
             $('#submit-pic').html('Uploading....');

			//image submission to server starts here 
              const myForm = $('form#upload-image-form');
              
               $.ajax({
                            url: myForm.attr('action'),
                            data: fd,
                            type: 'POST',
                            contentType: false,
                            processData: false,
                        })
                        .done((response) => {
                             if (response.status == 1) {
                              
                            swal('success','Image has been uploaded successfully','success');
                             }
                        })
                        .fail(() => {
                            
                        })
                        .always(() => $('#submit-pic').html('Uploaded'));
                        
              //image submission to server ends here 
           

        });

</script>

<script>
    $("#submit").click(function(e) {
        e.preventDefault();

        var sitename = $("#sitename").val();
        var sitename1 = $("#sitename1").val();
        var sitedomain = $("#sitedomain").val();
        var sitefacebook = $("#sitefacebook").val();
        var siteinstagram = $("#siteinstagram").val();
        var sitetwitter = $("#sitetwitter").val();
        var sitelinkedin = $("#sitelinkedin").val();
        var sitelocation = $("#sitelocation").val();
        var sitephone = $("#sitephone").val();
        var siteemail = $("#siteemail").val();

        var data = $("#basics-form").serialize();
        if(sitename == "" || sitename1 == "" || sitedomain == "" || sitefacebook == "" || siteinstagram == "" || sitetwitter == "" || sitelinkedin == "" || sitelocation =="" || sitephone == "" || siteemail == "" ){
            swal("Empty Fields", "Please Fill all fields!!!", "error");
            return;
        }
        const myForm = $('form#basics-form');
            $.ajax(myForm.attr('action'),{
                type : 'post',
                data : data,
                    success: function(response){

                        if(response.status == 1){
                            swal("Success", response.message, "success");
                            $("#submit").html(response.message);

                        }
                        else{
                            swal("Error", "Submission Failed!!!!", "error");
                            $("#submit").html('Submission Failed!');
                        }
                    
                    },
                    error : function(jqXHR,textStatus,errorThrown){
                        if(textStatus ='error'){
                            swal("Error", "Submission Failed!!!!", "error");
                        }
                        $("#submit").html('Failed');
                    },
                    beforeSend :function(){
                    $("#submit").html('Sending..');
                    },
            });

                                    
    });
 
</script>