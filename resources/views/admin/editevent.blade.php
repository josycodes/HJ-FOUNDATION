@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="tabs-animation">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Edit Event</h5>
                    <form method="post" id="submit-event-form" action="">
                        @csrf
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Event Title</label>
                            <div class="col-sm-10">
                                <input name="title" id="title" type="text" class="form-control" value="{{ $event->title }}">
                            </div>
                        </div>
                        <div class="position-relative row form-group ">
                            <label for="examplePassword" class="col-sm-2 col-form-label"><b>Old </b>Date & Time</label>
                            <div class="col-sm-10" id="">
                                <input type="text" class="form-control" id="olddate" value="{{ $event->date_time }}" disabled/>
                               
                            </div>
                        </div>
                        
                        <div class="position-relative row form-group ">
                            <label for="examplePassword" class="col-sm-2 col-form-label"><b>New</b> Date & Time</label>
                            <div class="col-sm-10" id="">
                                <input type="text" class="form-control" name="datetimes" id="newdate"/>
                               
                            </div>
                        </div> 
                        
                        <div class="position-relative row form-group">
                            <label for="examplePassword" class="col-sm-2 col-form-label">Location</label>
                            <div class="col-sm-10">
                                <input name="location" id="location" type="text" class="form-control" value={{ $event->location }}>
                            </div>
                        </div> 
                        
                        <div class="position-relative row form-group">
                            <label for="examplePassword" class="col-sm-2 col-form-label">Event Content</label>
                            <div class="col-sm-10">
                                <textarea name="content" id="editor">{{ $event->content }}</textarea>
                            </div>
                        </div>
                       
                        <div class="position-relative row form-group">
                            <label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-10">
                                <input name="file" id="file" type="file" class="form-control-file" onchange="PreviewFile(this)">
                                <small class="form-text text-muted">All files must be an Image eg. png, jpeg, jpg, gif.
                                </small>
                                <br />
                                    <img id="previewImg" width="100" height="100" alt="UPLOAD LOGO"/>
                                   
                                    <img  src="/storage/Event/{{ $event->image }}" width="100" height="100" alt="UPLOAD LOGO"/>
                            </div>
                        </div>
                        
                        <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2">
                                <button class="btn btn-info olddd" name="submit-event-old" id="submit-event-old">Submit Details with Old date</button>
                                <button class="btn btn-success newww" name="submit-event-new" id="submit-event-new">Submit Details with New date</button>
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
        CKEDITOR.replace( 'editor' );
    </script>
    

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $("#submit-event-old").click(function(e) {
            e.preventDefault();
            
            var fd = new FormData();
            var image = $('#file')[0].files[0];
            var eventtitle = $('#title').val();
            var eventtime = $('#olddate').val();
            var location = $('#location').val();
            var eventcontent = CKEDITOR.instances.editor.getData();
            
            if($('#file').get(0).files.length === 0){
                var eventimage = "emptyimage.jpg";
            }else{
                var eventimage = $('#file')[0].files[0];
            }
            
            if(eventtitle === "" || eventtime === "" || location === ""|| eventcontent === ""){
              swal("Error", "Please Fill all fields","error");
              return;
            }
            
            var token = "{{ csrf_token() }}";
            fd.append('_token',token);
            fd.append('eventimage',eventimage);
            fd.append('eventtitle',eventtitle);
            fd.append('eventtime',eventtime);
            fd.append('location',location);
            fd.append('eventcontent',eventcontent);
            
            $('#submit-event-old').html('Uploading....');
            document.getElementsByClassName('newww')[0].style.visibility = 'hidden';
              
              
               $.ajax({
                    url: "{{ route('Update-Event', $event->id) }}",
                    data: fd,
                    type: 'POST',
                    success: function(response){
                
                       if(JSON.parse(response) == 1){
                           
                           swal("Success", "Updated Successfully", "success");
                           $("#submit-event-old").html("Created");
                       window.location.reload();
                       }
                       else{
                          //alert(JSON.parse(response));
                           swal("Error","Not Created", "error");
                           $("#submit-event-old").html("Not Uploaded");
                       }
                   
                   },
                            contentType: false,
                            processData: false,
                        })
    
    
    });
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $("#submit-event-new").click(function(e) {
            e.preventDefault();
            
            var fd = new FormData();
            var image = $('#file')[0].files[0];
            var eventtitle = $('#title').val();
            var eventtime = $('#newdate').val();
            var location = $('#location').val();
            var eventcontent = CKEDITOR.instances.editor.getData();
            
            if($('#file').get(0).files.length === 0){
                var eventimage = "emptyimage.jpg";
            }else{
                var eventimage = $('#file')[0].files[0];
            }

            if(eventtitle === "" || eventtime === "" || location === ""|| eventcontent === ""){
              swal("Error", "Please Fill all fields","error");
              return;
            }
            
            var token = "{{ csrf_token() }}";
            fd.append('_token',token);
            fd.append('eventimage',eventimage);
            fd.append('eventtitle',eventtitle);
            fd.append('eventtime',eventtime);
            fd.append('location',location);
            fd.append('eventcontent',eventcontent);
            
            $('#submit-event-new').html('Uploading....');
            document.getElementsByClassName('olddd')[0].style.visibility = 'hidden';
              
              
               $.ajax({
                    url: "{{ route('Update-Event', $event->id) }}",
                    data: fd,
                    type: 'POST',
                    success: function(response){
                
                       if(JSON.parse(response) == 1){
                           
                           swal("Success", "Updated Successfully", "success");
                           $("#submit-event-new").html("Created");
                       window.location.reload();
                       }
                       else{
                          //alert(JSON.parse(response));
                           swal("Error","Not Created", "error");
                           $("#submit-event-new").html("Not Uploaded");
                       }
                   
                   },
                            contentType: false,
                            processData: false,
                        })
    
    
    });
</script>

