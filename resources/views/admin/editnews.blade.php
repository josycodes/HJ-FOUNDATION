@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        

        <div class="tabs-animation">
            <div class="mb-3 card element-block-example">
                <div class="card-body">
            <h5 class="card-title">Edit News</h5>
            <div class="col-md-12 col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form method="post" id="submit-news-form" action="{{ route('UpdateNews', $news->id) }}">
                            @csrf
                        <div id="smartwizard2" class="forms-wizard-alt">
                            <ul class="forms-wizard">
                                <li>
                                    <a href="#step-12">
                                        <em>1</em><span>Basic News Information</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-22">
                                        <em>2</em><span>News Content</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-32">
                                        <em>3</em><span>Submit</span>
                                    </a>
                                </li>
                            </ul>
                           
                            <div class="form-wizard-content">
                                <div id="step-12">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail55">News Title</label>
                                                <input name="newstitle" id="newstitle" type="text" class="form-control" value="{{ $news->title }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="examplePassword22">News Category</label>
                                                <input name="newscat" id="newscat" type="text" class="form-control" value="{{ $news->category }}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="position-relative form-group">
                                        <label for="exampleAddress">Poster's Name</label>
                                        <input name="poster" id="poster" type="text" class="form-control" value="{{ $news->poster }}">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="exampleAddress">Upload News Image</label>
                                        <input name="newsimage" id="newsimage" type="file" class="form-control-file" onchange="PreviewFile(this)">
                                        <br />
                                       <img id="previewImg" width="100" height="100" alt="UPLOAD LOGO"/>
                                        <a href="/storage/news/{{ $news->image }}"><img src="/storage/news/{{ $news->image }}" width="100" height="100" alt="CURRENT IMAGE"/></a>
                                    </div>
                                    
                                </div>
                                <div id="step-22">
                                    <div id="accordion" class="accordion-wrapper mb-3">
                                        <div class="card">
                                            <div id="headingTwo" class="b-radius-0 card-header">
                                                <button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo"
                                                    class="text-left m-0 p-0 btn btn-link btn-block">
                                                    <span class="form-heading">News Content<p>Enter a news write up below</p></span>
                                                </button>
                                            </div>
                                            <div data-parent="#accordion" id="collapseTwo"
                                                class="collapse show">
                                                <div class="card-body">
                                                   
                                                    <textarea name="content" id="editor">{{ $news->content }}</textarea>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="step-32">
                                    <div class="no-results">
                                        <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                            <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                            <span class="swal2-success-line-tip"></span>
                                            <span class="swal2-success-line-long"></span>
                                            <div class="swal2-success-ring"></div>
                                            <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                            <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                        </div>
                                        <div class="results-subtitle mt-4">Finished!</div>
                                        <div class="results-title">Make Sure All of the information Provided is correct</div>
                                        <div class="mt-3 mb-3"></div>
                                        <div class="text-center">
                                            <button class="btn-shadow btn-wide btn btn-success btn-lg" name="submit-news" id="submit-news">Edit News</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </form>
                        <div class="divider"></div>
                        <div class="clearfix">
                            <button type="button" id="reset-btn2" class="btn-shadow float-left btn btn-link">Reset</button>
                            <button type="button" id="next-btn2" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Next</button>
                            <button type="button" id="prev-btn2" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</button>
                        </div>
                    </div>
                </div>
            </div>
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
    
    $("#submit-news").click(function(e) {
            e.preventDefault();
            
            var fd = new FormData();
            var newsimage = $('#newsimage')[0].files[0];
            var newstitle = $('#newstitle').val();
            var newscat = $('#newscat').val();
            var newsposter = $('#poster').val();
            var newscontent = CKEDITOR.instances.editor.getData();
            
            if($('#newsimage').get(0).files.length === 0 || newstitle === "" || newscat === "" || newsposter === ""|| newscontent === ""){
              swal("Error", "Please Fill all fields","error");
              return;
            }
            
            var token = "{{ csrf_token() }}";
            fd.append('_token',token);
            fd.append('newsimage',newsimage);
            fd.append('newstitle',newstitle);
            fd.append('newscat',newscat);
            fd.append('newsposter',newsposter);
            fd.append('newscontent',newscontent);
            
            $('#submit-news').html('Uploading....');
           // const myForm = $('form#submit-bot-form');
              
               $.ajax({
                    url: "{{ route('UpdateNews',$news->id) }}",
                    data: fd,
                    type: 'POST',
                    success: function(response){
                
                       if(JSON.parse(response) == 1){
                           
                           swal("Success", "Updated Successfully", "success");
                           $("#submit-news").html("Created");
                           window.location.reload();
                       
                       }
                       else{
                          
                           swal("Error","Not Updated", "error");
                           $("#submit-news").html("Not Uploaded");
                       }
                   
                   },
                            contentType: false,
                            processData: false,
                        })
    
    
    });
</script>