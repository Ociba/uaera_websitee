<!DOCTYPE html>
<html lang="en">

@include('admin-partials.styling')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/design/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/design/files/assets/pages/data-table/css/buttons.dataTables.min.css')}}">
<body>
    <!-- Pre-loader start -->
    @include('admin-partials.loader')
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('admin-partials.navbar')
            
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                        @include('admin-partials.sidebar')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                    @include('admin-partials.messages')
                                        <!-- Zero config.table start -->
                                        <div class="card">
                                                    <div class="card-header text-right">
                                                        <h5><button 
                                                                    class="btn btn-primary input-group-addon" data-toggle="modal"
                                                                    data-target="#large-Modal">Add
                                                                    Media</button></h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="simpletable"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Title</th>
                                                                        <th>Link</th>
                                                                        <th>Option</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($get_media_publications as $media)
                                                                    <tr>
                                                                        <td>{{$media->name}}</td>
                                                                        <td>{{$media->title}}</td>
                                                                        <td>{{$media->link}}</td>
                                                                        <td>
                                                                        <a href="/edit-media/{{$media->id}}" button 
                                                                    class="btn btn-primary m-b-0" >Edit
                                                                    </button></a>
                                                                    <a href="/delete-media/{{$media->id}}"button
                                                                    class="btn btn-danger m-b-0">Delete
                                                                    </button></a>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Zero config.table end -->
                                    </div>
                                </div>

                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/design/files/assets/pages/data-table/js/data-table-custom.js')}}"></script>
    <script src="{{ asset('admin/design/files/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    @include('admin-partials.javascript')
    <button type="button"
        class="btn btn-primary waves-effect"
        data-toggle="modal"
        data-target="#large-Modal">Large</button>
    <div class="modal fade" id="large-Modal" tabindex="-1"
        role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Media Publication</h4>
                    <button type="button" class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                        <span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="/create-media" method="get">
                @csrf
                <p><label>Link</label>
                    <input type="text" name="link" class="form-control" >
                </p> 
                    <p> <label>Title</label>
                        <textarea type="text" rows="4" class="form-control" name="title"></textarea></p>
                    <div class="text-center">
                    <button type="submit"
                        class="btn btn-primary waves-effect waves-light ">Save
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>