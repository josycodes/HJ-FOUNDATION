@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="tabs-animation">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Add New Management Team</h5>
                    <form method="post" id="submit-management-form" action="{{ route('Add-Management') }}">
                        @csrf
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                                <input name="name" id="name" type="text" class="form-control" value="{{ $allManagement->full_name}}">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="examplePassword" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" id="email" type="text" class="form-control" value="{{ $allManagement->email }}">
                            </div>
                        </div> 
                        <div class="position-relative row form-group">
                            <label for="examplePassword" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input name="phone" id="phone" type="text" class="form-control" value="{{ $allManagement->phone }}">
                            </div>
                        </div> 
                        <div class="position-relative row form-group">
                            <label for="examplePassword" class="col-sm-2 col-form-label">Position</label>
                            <div class="col-sm-10">
                                <input name="position" id="position" type="text" class="form-control" value="{{ $allManagement->position }}">
                            </div>
                        </div>
                       
                        <div class="position-relative row form-group">
                            <label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-10">
                                <input name="file" id="file" type="file" class="form-control-file" onchange="PreviewFile(this)">
                                <small class="form-text text-muted">All files must be an Image eg. png, jpeg, jpg, gif. and size of 380 X 350
                                </small>
                                <br />
                                    <img id="previewImg" width="100" height="100" alt="UPLOAD LOGO"/> <img width="200" height="200" alt="UPLOAD LOGO" src="/storage/Management Team/{{ $allManagement->image }}"/>
                            </div>
                        </div>
                        
                        <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2">
                                <button class="btn btn-secondary" name="submit-management" id="submit-management">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>

    @include('layout.footerdash')
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

    $("#submit-management").click(function(e) {
            e.preventDefault();

            var fd = new FormData();
            var image = $('#file')[0].files[0];
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var pos = $('#position').val();
            
            if($('#file').get(0).files.length === 0){
                var image = "emptyimage.jpg";
            }else{
                var image = $('#file')[0].files[0];
            }
            

            if(name === "" || email === "" || phone === ""|| pos === ""){
              swal("Error", "Please Fill all fields","error");
              return;
            }
            
            var token = "{{ csrf_token() }}";
            fd.append('_token',token);
            fd.append('image',image);
            fd.append('name',name);
            fd.append('position',pos);
            fd.append('phone',phone);
            fd.append('email',email);
            
            $('#submit-management').html('Uploading....');
           // const myForm = $('form#submit-bot-form');
              
               $.ajax({
                    url: "/Update Management/{{ $allManagement->id }}",
                    data: fd,
                    type: 'POST',
                    success: function(response){
                
                       if(JSON.parse(response) == 1){
                           
                           swal("Success", "Created Successfully", "success");
                           $("#submit-management").html("Created");
                       
                       }
                       else{
                          
                           swal("Error","Not Created", "error");
                           $("#submit-management").html("Not Uploaded");
                       }
                   
                   },
                            contentType: false,
                            processData: false,
                        })
    
    
    });
</script>