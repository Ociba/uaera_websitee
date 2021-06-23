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
                                    <div class="row">
                                            <div class="col-sm-12">
                                                <!-- List view card start -->
                                                <div class="card">
                                                <div class="card-header">
                                                <div><h5>Adverts</h5>
                                                    <span class="pull-right mt-0 mr-1">
                                                    <button type="button" class="btn btn-primary waves-effect pull-right" data-toggle="modal"
                                                        data-target="#large-Modal">Add Article</button>
                                                    </span>
                                                </div>
                                                </div>
                                                    <div class="row card-block">
                                                        <div class="col-md-12">
                                                            <ul class="list-view">
                                                                <li>
                                                                    <div class="card list-view-media">
                                                                        <div class="card-block">
                                                                            <div class="media">
                                                                                <a class="media-left" href="#">
                                                                                    <img class="media-object card-list-img"
                                                                                        src="{{ asset('admin/design/files/assets/images/avatar-1.jpg')}}"
                                                                                        alt="Generic placeholder image">
                                                                                </a>
                                                                                <div class="media-body">
                                                                                    <div class=" ">
                                                                                        <h6 class="d-inline-block">
                                                                                            Heading</h6>
                                                                                        <label
                                                                                            class="label label-info">Agent</label>
                                                                                    </div>
                                                                                    <div class="f-13 text-muted m-b-15">
                                                                                        Software Engineer
                                                                                    </div>
                                                                                    <p>Hi, This is my short intro text.
                                                                                        Lorem ipsum is a dummy content
                                                                                        sit
                                                                                        dollar. You can copy and paste
                                                                                        this
                                                                                        dummy content from anywhere and
                                                                                        to
                                                                                        anywhere. Its all free and must
                                                                                        be a
                                                                                        good to folllow in prectice</p>
                                                                                    <div class="m-t-15">
                                                                                        <button type="button"
                                                                                            data-toggle="tooltip"
                                                                                            title="edit"
                                                                                            class="btn btn-facebook btn-mini waves-effect waves-light">
                                                                                            <span
                                                                                                class="fa fa-edit"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            data-toggle="tooltip"
                                                                                            title="delete"
                                                                                            class="btn btn-dribbble btn-mini waves-effect waves-light">
                                                                                            <span
                                                                                                class="fa fa-trash-o"></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="">
                                                                    <div class="card list-view-media">
                                                                        <div class="card-block">
                                                                            <div class="media">
                                                                                <a class="media-left" href="#">
                                                                                    <img class="media-object card-list-img"
                                                                                        src="{{ asset('admin/design/files/assets/images/avatar-2.jpg')}}"
                                                                                        alt="Generic placeholder image">
                                                                                </a>
                                                                                <div class="media-body">
                                                                                    <div>
                                                                                        <h6 class="d-inline-block">
                                                                                            Heading</h6>
                                                                                        <label
                                                                                            class="label  label-info">Accountant</label>
                                                                                    </div>
                                                                                    <div class="f-13 text-muted m-b-15">
                                                                                        Softwear Engineer
                                                                                    </div>
                                                                                    <p>Hi, This is my short intro text.
                                                                                        Lorem ipsum is a dummy content
                                                                                        sit
                                                                                        dollar. You can copy and paste
                                                                                        this
                                                                                        dummy content from anywhere and
                                                                                        to
                                                                                        anywhere. Its all free and must
                                                                                        be a
                                                                                        good to folllow in prectice</p>
                                                                                    <div class="m-t-15">
                                                                                        <button type="button"
                                                                                            data-toggle="tooltip"
                                                                                            title="edit"
                                                                                            class="btn btn-facebook btn-mini waves-effect waves-light">
                                                                                            <span
                                                                                                class="fa fa-edit"></span>
                                                                                        </button>
                                                                                        
                                                                                        <button type="button"
                                                                                            data-toggle="tooltip"
                                                                                            title="delete"
                                                                                            class="btn btn-dribbble btn-mini waves-effect waves-light">
                                                                                            <span
                                                                                                class="fa fa-trash-o"></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="">
                                                                    <div class="card list-view-media">
                                                                        <div class="card-block">
                                                                            <div class="media">
                                                                                <a class="media-left" href="#">
                                                                                    <img class="media-object card-list-img"
                                                                                        src="{{ asset('admin/design/files/assets/images/avatar-3.jpg')}}"
                                                                                        alt="Generic placeholder image">
                                                                                </a>
                                                                                <div class="media-body">
                                                                                    <div>
                                                                                        <h6 class="d-inline-block">
                                                                                            Heading</h6>
                                                                                        <label
                                                                                            class="label  label-info">Accountant</label>
                                                                                    </div>
                                                                                    <div class="f-13 text-muted m-b-15">
                                                                                        Softwear Engineer
                                                                                    </div>
                                                                                    <p>Hi, This is my short intro text.
                                                                                        Lorem ipsum is a dummy content
                                                                                        sit
                                                                                        dollar. You can copy and paste
                                                                                        this
                                                                                        dummy content from anywhere and
                                                                                        to
                                                                                        anywhere. Its all free and must
                                                                                        be a
                                                                                        good to folllow in prectice</p>
                                                                                    <div class="m-t-15">
                                                                                        <button type="button"
                                                                                            data-toggle="tooltip"
                                                                                            title="edit"
                                                                                            class="btn btn-facebook btn-mini waves-effect waves-light">
                                                                                            <span
                                                                                                class="fa fa-edit"></span>
                                                                                        </button>
                                                                                        
                                                                                        <button type="button"
                                                                                            data-toggle="tooltip"
                                                                                            title="delete"
                                                                                            class="btn btn-dribbble btn-mini waves-effect waves-light">
                                                                                            <span
                                                                                                class="fa fa-trash-o"></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- List view card end -->
                                            </div>
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