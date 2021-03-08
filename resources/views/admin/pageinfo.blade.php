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
                                   
                                        <input type="file" name="filelogo" class="form-control" onchange="PreviewFile(this)" required/> 
                                    <br />
                                    <img id="previewImg" width="100" height="100" alt="SCHOOL LOGO"/>
                                </div>
                               
                            </div>
                            
                        </div>
         
            <div class="col-md-12">
                <form method="POST" enctype="multipart/form-data" action="{{ route('SubmitBasics') }}">
                            @csrf 
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Upload Basic Information</h5>
                      
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Name</label>
                                <div class="col-sm-10">
                                    <input name="sitename" type="text" class="form-control" value="" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Name1</label>
                                <div class="col-sm-10">
                                    <input name="sitename1" type="text" class="form-control" value="" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Domain</label>
                                <div class="col-sm-10">
                                    <input name="sitedomain" type="text" class="form-control" value="" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Facebook Address</label>
                                <div class="col-sm-10">
                                    <input name="sitefacebook" type="text" class="form-control" value="" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Instagram Address</label>
                                <div class="col-sm-10">
                                    <input name="siteinstagram" type="text" class="form-control" value="" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Twitter Address</label>
                                <div class="col-sm-10">
                                    <input name="sitetwitter" type="text" class="form-control" value="" required>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site LinkedIn</label>
                                <div class="col-sm-10">
                                    <input name="sitelinkedin" type="text" class="form-control" value="" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Location Address</label>
                                <div class="col-sm-10">
                                    <input name="sitelocation" type="text" class="form-control" value="" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Phone</label>
                                <div class="col-sm-10">
                                    <input name="sitephone" type="text" class="form-control" value="" required>
                                </div>
                            </div>
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Site Email</label>
                                <div class="col-sm-10">
                                    <input name="siteemail" type="text" class="form-control" value="" required>
                                </div>
                            </div>
                            
                            <div class="position-relative row form-check">
                                <div class="col-md-12">
                                <center>
                                <button class="ladda-button mb-2 mr-2 btn btn-shadow btn-warning" data-style="slide-down" type="submit">
                                <span class="ladda-label">Save Settings</span>
                                     <span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div></button>
                                        </button>
                                            </center>
                                </div>
                            </div>
                                                       </div>
                </div>
           </form> </div>
 
                        

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