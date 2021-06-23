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
                                               <h5>About</h5>
                                            </div>
                                            <div class="card-block b-b-theme b-t-theme social-msg">
                                            </div>
                                            <div class="card-block user-box">
                                                <div class="p-b-20">
                                                    <span class="f-14" data-toggle="modal" data-target="#large-Modal"><a href="#" style="color:blue;">Edit
                                                            </a>
                                                    </span>
                                                    <span class="f-right"><a href="#" class="text-danger">delete</a>
                                                    </span>
                                                </div>
                                                <div class="media">
                                                    <div
                                                        class="media-body b-b-theme social-client-description">
                                                        <div class="chat-header">About UAERA
                                                            <span class="text-muted">Jane
                                                                04, 2015</span></div>
                                                        <p class="text-muted">Lorem Ipsum is simply
                                                            dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has
                                                            been the industry's standard dummy text
                                                            ever since the 1500s, when an unknown
                                                            printer
                                                            took a galley of type and scrambled it
                                                            to make a type specimen book.</p>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <form class="">
                                                            <div class="">
                                                                <textarea
                                                                    class="f-13 form-control msg-send"
                                                                    rows="3" cols="10" required=""
                                                                    placeholder="Write something....."></textarea>
                                                                <div class="text-right m-t-20"><a
                                                                        href="#"
                                                                        class="btn btn-primary waves-effect waves-light">Post</a>
                                                                </div>
                                                            </div>
                                                        </form>
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
    <div class="modal fade" id="large-Modal" tabindex="-1"
        role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Now</h4>
                    <button type="button" class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                        <span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="media">
                        <div class="media-body">
                            <form class="">
                                <div class="">
                                    <textarea
                                        class="f-13 form-control msg-send"
                                        rows="3" cols="10" required=""
                                        placeholder="something....."></textarea>
                                    <div class="text-center m-t-20"><a
                                            href="#"
                                            class="btn btn-primary waves-effect waves-light">Save</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>