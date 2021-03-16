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
                        <th>News Title</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Poster</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach ($news as $b)
                        @php
                            $i++;
                        @endphp
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $b->title }}</td>
                        <td>{{ $b->category }}</td>
                        <td><a href="/storage/news/{{ $b->image }}"><img src="/storage/news/{{ $b->image }}" width="100" height="100"/></a></td>
                        <td>{{ $b->poster }}</td>
                        <td><div class="btn btn-group">
                            <a class="btn btn-info" href="{{ route('Edit-News', $b->id ) }}"><i class="fa fa-pencil-alt"></i></a>
                            <a class="btn btn-danger" data-toggle="modal"
                            data-target="#MODALDELETENEWS{{ $b->id }}"><i class="fa fa-trash-alt"></i></a>
                        </div></td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th>News Title</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Poster</th>
                        <th>Action</th>
                       
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        
</div>
@include('layout.footerdash')

@foreach ($news as $b)
    <!-- Activate Session Modal -->

<div id="MODALDELETENEWS{{ $b->id }}" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete News</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to Delete this News?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a class="btn btn-success" type="button" href='DeleteNews/{{ $b->id }}'>
                    Delete
                </a>
                

            </div>
        </div>
    </div>
</div>
@endforeach