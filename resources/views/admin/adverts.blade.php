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
                                        <!--hadow card start -->
                                        <div class="card">
                                            <div class="card-header">
                                               <div><h5>Adverts</h5>
                                                    <span class="pull-right mt-0 mr-1">
                                                    <button type="button" class="btn btn-primary waves-effect pull-right" data-toggle="modal"
                                                        data-target="#large-Modal">Add Advert</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card-block box-list">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="p-20 z-depth-top-0 waves-effect">
                                                            <p class="text-sm-center">Use class
                                                                <code>z-depth-top-0</code> inside div element to add
                                                                box-shadow.</p>
                                                                <p class="text-center">
                                                                   <a href="#" data-toggle="tooltip" data-placement="top"
                                                                     title="edit"><i class="fa fa-edit text-green"></i></a>
                                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                                      title="delete"><i class="fa fa-trash text-danger"></i></a>
                                                                </p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="p-20 z-depth-top-1 waves-effect">
                                                            <p class="text-sm-center ">Use class
                                                                <code>z-depth-top-1</code> inside div element to add
                                                                box-shadow.</p>
                                                                <p class="text-center">
                                                                   <a href="#" data-toggle="tooltip" data-placement="top"
                                                                     title="edit"><i class="fa fa-edit text-green"></i></a>
                                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                                      title="delete"><i class="fa fa-trash text-danger"></i></a>
                                                                </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="p-20 z-depth-top-2 waves-effect">
                                                            <p class="text-sm-center">Use class
                                                                <code>z-depth-top-2</code> inside div element to add
                                                                box-shadow.</p>
                                                                <p class="text-center">
                                                                   <a href="#" data-toggle="tooltip" data-placement="top"
                                                                     title="edit"><i class="fa fa-edit text-green"></i></a>
                                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                                      title="delete"><i class="fa fa-trash text-danger"></i></a>
                                                                </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="p-20 z-depth-top-3 waves-effect">
                                                            <p class="text-sm-center">Use class
                                                                <code>z-depth-top-3</code> inside div element to add
                                                                box-shadow.</p>
                                                                <p class="text-center">
                                                                   <a href="#" data-toggle="tooltip" data-placement="top"
                                                                     title="edit"><i class="fa fa-edit text-green"></i></a>
                                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                                      title="delete"><i class="fa fa-trash text-danger"></i></a>
                                                                </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="p-20 z-depth-top-4 waves-effect">
                                                            <p class="text-sm-center">Use class
                                                                <code>z-depth-top-4</code> inside div element to add
                                                                box-shadow.</p>
                                                                <p class="text-center">
                                                                   <a href="#" data-toggle="tooltip" data-placement="top"
                                                                     title="edit"><i class="fa fa-edit text-green"></i></a>
                                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                                      title="delete"><i class="fa fa-trash text-danger"></i></a>
                                                                </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="p-20 z-depth-top-5 waves-effect">
                                                            <p class="text-sm-center">Use class
                                                                <code>z-depth-top-5</code> inside div element to add
                                                                box-shadow.</p>
                                                                <p class="text-center">
                                                                   <a href="#" data-toggle="tooltip" data-placement="top"
                                                                     title="edit"><i class="fa fa-edit text-green"></i></a>
                                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                                      title="delete"><i class="fa fa-trash text-danger"></i></a>
                                                                </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- shadow card end -->
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
    <button type="button"
        class="btn btn-primary waves-effect"
        data-toggle="modal"
        data-target="#large-Modal">Large</button>
    <div class="modal fade" id="large-Modal" tabindex="-1"
        role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button type="button" class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                        <span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Default Modal</h5>
                    <p>This is Photoshop's version of Lorem
                        IpThis is Photoshop's version of
                        Lorem Ipsum. Proin gravida nibh vel
                        velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum
                        auctor, nisi elit consequat ipsum,
                        nec sagittis sem nibh id elit.</p>
                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="btn btn-default waves-effect "
                        data-dismiss="modal">Close</button>
                    <button type="button"
                        class="btn btn-primary waves-effect waves-light ">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>