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
                        <th>Title</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($allevents as $b)
                        @php
                            $i++;
                        @endphp
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $b->title }}</td>
                        <td>{{ $b->event_date }}</td>
                        <td>{{ $b->starttime }} - {{ $b->endtime }}</td>
                        <td>{{ $b->location }}</td>
                        <td><div class="btn btn-group">
                            <a class="btn btn-info" href="{{ route('Edit-Event', $b->id ) }}"><i class="fa fa-pencil-alt"></i></a>
                            <a class="btn btn-danger" data-toggle="modal"
                            data-target="#MODALDELETEEVENT{{ $b->id }}"><i class="fa fa-trash-alt"></i></a>
                        </div></td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>Action</th>                   
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        
</div>
@include('layout.footerdash')

@foreach ($allevents as $b)
    <!-- Activate Session Modal -->

<div id="MODALDELETEEVENT{{ $b->id }}" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to Delete this Event?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a class="btn btn-success" type="button" href='DeleteEvent/{{ $b->id }}'>
                    Delete
                </a>
                

            </div>
        </div>
    </div>
</div>
@endforeach