@include('layout.head')
@include('layout.header')
@include('layout.sidebar')


<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="d-inline-block dropdown">
                    <a type="button" href="{{ route('View-All-Frequently-Asked-Questions') }}" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info" style="color:#FFFFFF!important;">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-question-circle"></i>
                        </span>
                        View Added Questions
                    </a>
                    
                </div>
            </div>
    </div>
<div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
              
                        <div class="row">

                    <div class="col-md-12">
                       <form method="POST" id="question-form" enctype="multipart/form-data" action="{{ route('EditQuestion', $question->id) }}" id="basics-form">
                                        @csrf 
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Upload Questions with their Answers</h5>
                                  
                                        <div class="position-relative row form-group">
                                            <label for="exampleEmail" class="col-sm-2 col-form-label">Question</label>
                                            <div class="col-sm-10">
                                                <textarea name="question" id="question" class="form-control">{{ $question->question }}</textarea>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group">
                                            <label for="exampleEmail" class="col-sm-2 col-form-label">Answer</label>
                                            <div class="col-sm-10">
                                                <textarea name="answer" id="answer" class="form-control">{{ $question->answer }}</textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="position-relative row form-check">
                                            <div class="col-md-12">
                                            <center>
                                            <button class="ladda-button mb-2 mr-2 btn btn-shadow btn-warning" data-style="slide-down" id="submit" type="submit">
                                            <span class="ladda-label">Save Question</span>
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
    $("#submit").click(function(e) {
        e.preventDefault();

        var question = $("#question").val();
        var answer = $("#answer").val();

        var data = $("#question-form").serialize();
        if(question == "" || answer == "" ){
            swal("Empty Fields", "Please Fill all fields!!!", "error");
            return;
        }
        const myForm = $('form#question-form');
            $.ajax(myForm.attr('action'),{
                type : 'post',
                data : data,
                    success: function(response){

                        if(JSON.parse(response) == 1){
                            swal("Success", "Added Successfully", "success");
                            $("#submit").html("Added Successfully");

                        }
                        else{
                            swal("Error", "Submission Failed!!!!", "error");
                            $("#submit").html('Submission Failed!');
                        }
                    
                    },
                    error : function(jqXHR,textStatus,errorThrown){
                        if(textStatus ='error'){
                            swal("Error", "Submission Failedddd!!!!", "error");
                        }
                        $("#submit").html('Failed');
                    },
                    beforeSend :function(){
                    $("#submit").html('Sending..');
                    },
            });

                                    
    });
 
</script>