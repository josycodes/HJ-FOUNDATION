@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="tabs-animation">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Add Gallery Image</h5>
                    <form method="post" id="submit-gallery-form" action="{{ route('UploadGalleryImage') }}">
                        @csrf
                        <div class="position-relative row form-group">
                            <label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-10">
                                <input name="file" id="file" type="file" class="form-control-file" onchange="PreviewFile(this)">
                                <small class="form-text text-muted">All files must be an Image eg. png, jpeg, jpg, gif.
                                </small>
                                <br />
                                    <img id="previewImg" width="500" height="500" alt="UPLOAD LOGO"/>
                            </div>
                        </div>
                        
                        <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2">
                                <button class="btn btn-secondary" name="submit-gallery" id="submit-gallery">Submit</button>
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

    $("#submit-gallery").click(function(e) {
            e.preventDefault();

            var fd = new FormData();
            var image = $('#file')[0].files[0];
            
            if($('#file').get(0).files.length === 0){
              swal("Error", "Please Fill all fields","error");
              return;
            }
            
            var token = "{{ csrf_token() }}";
            fd.append('_token',token);
            fd.append('image',image);
            
            $('#submit-gallery').html('Uploading....');
                          
               $.ajax({
                    url: "{{ route('UploadGalleryImage') }}",
                    data: fd,
                    type: 'POST',
                    success: function(response){
                
                       if(JSON.parse(response) == 1){
                           
                           swal("Success", "Created Successfully", "success");
                           $("#submit-gallery").html("Created");
                           
                           window.location.reload();
                       
                       }
                       else{
                          
                           swal("Error","Not Created", "error");
                           $("#submit-created").html("Not Uploaded");
                       }
                   
                   },
                            contentType: false,
                            processData: false,
                        })
    
    
    });
</script>