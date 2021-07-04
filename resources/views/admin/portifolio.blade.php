<!DOCTYPE html>
<html lang="en">

@include('admin-partials.styling')

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
                                    <div class="row">
                                            <div class="col-sm-12">
                                                <!-- List view card start -->
                                                <div class="card">
                                                <div class="card-header">
                                                <div><h5>Portifolio</h5>
                                                    <span class="pull-right mt-0 mr-1">
                                                    <button type="button" class="btn btn-primary waves-effect pull-right" data-toggle="modal"
                                                        data-target="#large-Modal">Add Portifolio</button>
                                                    </span>
                                                </div>
                                                </div>
                                                    
                                                </div>
                                                <!-- List view card end -->
                                            </div>
                                        
                                        <div class="col-md-12">
                                        <h5 class="m-b-20">Gallery with description</h5>
                                        <div class="default-grid row">
                                            <div class="row lightboxgallery-popup">
                                             @foreach($get_portifolio as $gallery)
                                                <div class="col-lg-3 col-md-6 default-grid-item">
                                                    <div class="card gallery-desc">
                                                        <div class="masonry-media">
                                                            <a class="media-middle" href="#!">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('forlio/images/'.$gallery->image)}}" style="width:500px; height:150px;"
                                                                    alt="masonary">
                                                            </a>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <h6 class="job-card-desc">Image Description</h6>
                                                            <p class="text-muted">{{$gallery->title}}</p>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-time"></i>{{$gallery->created_at}}</div>
                                                            <div class="job-meta-data">
                                                                   <a href="/edit-portifolio/{{$gallery->id}}" button
                                                                        data-toggle="tooltip"
                                                                        title="edit"
                                                                        class="btn btn-success waves-effect waves-light">Edit
                                                                    </button></a>       
                                                                    <a href="/delete-portifolio/{{$gallery->id}}" button
                                                                        data-toggle="tooltip"
                                                                        title="delete"
                                                                        class="btn btn-danger waves-effect waves-light">Delete
                                                                    </button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                       </diiv>
                                         </div>
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

    @include('admin-partials.javascript')
    
    <div class="modal fade" id="large-Modal" tabindex="-1"
        role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Portifolio</h4>
                    <button type="button" class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                        <span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="/create-portifolio" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="inputFirstname">Title</label>
                            <input type="text"name="title" class="form-control" id="inputFirstname" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="inputFirstname">Contact</label>
                            <input type="file" name="image" class="form-control" id="inputFirstname" placeholder="" required>
                        </div>
                    </div>
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