@include('layout.head')
@include('layout.header')
@include('layout.sidebar')


<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Questions</th>
                        <th>Answers</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @php $i = 0; @endphp
                        @foreach ($allquestions as $b)
                        @php $i++; @endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $b->question }}</td>
                            <td>{{ $b->answer }}</td>
                            <td><div class="btn btn-group">
                                <a class="btn btn-info" href="{{ route('ViewEditquestion', $b->id ) }}"><i class="fa fa-pencil-alt"></i></a>
                                <a class="btn btn-danger" data-toggle="modal"
                                data-target="#MODALDELETEQUESTION{{ $b->id }}"><i class="fa fa-trash-alt"></i></a>
                            </div></td>
                        </tr>
                        @endforeach
                       
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>Questions</th>
                            <th>Answers</th>
                            <th>Action</th>                   
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        
    </div>
@include('layout.footerdash')

@foreach ($allquestions as $b)
    <!-- Activate Session Modal -->

<div id="MODALDELETEQUESTION{{ $b->id }}" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to Delete this question?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a class="btn btn-success" type="button" href='DeleteQuestion/{{ $b->id }}'>
                    Delete Question
                </a>
                

            </div>
        </div>
    </div>
</div>
@endforeach