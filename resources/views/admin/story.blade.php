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
                                        <div class="row">
                                        <div class="col-lg-12">
                                                <div class="job-card card-columns">
                                                    <!-- Job card start -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="media">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-60"
                                                                        src="{{ asset('admin/design/files/assets/images/browser/chrome.png')}}"
                                                                        alt="Generic placeholder image">
                                                                </a>
                                                                <div class="media-body media-middle">
                                                                    <div class="company-name">
                                                                        <p>Chrome</p>
                                                                        <span class="text-muted f-14">December 16,
                                                                            2017</span>
                                                                    </div>
                                                                    <div class="job-badge">
                                                                        <label class="label bg-primary">New</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-block">
                                                        <h6 class="job-card-desc">Story Description</h6>
                                                            <p class="text-muted">lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit, sed do eiusmod tempor
                                                                incididunt ut labore et dolore magna aliqua.Lorem ipsum
                                                                dolor sit amet.</p>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-safety"></i>washington</div>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-university"></i>10 Years
                                                            </div>
                                                            <div class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-primary waves-effect waves-light btn-sm">
                                                                    Edit
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-danger waves-effect waves-light btn-sm">
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Job card end -->

                                                    <!-- Job card start -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="media">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-60"
                                                                        src="{{ asset('admin/design/files/assets/images/browser/firefox.png')}}"
                                                                        alt="Generic placeholder image">
                                                                </a>
                                                                <div class="media-body media-middle">
                                                                    <div class="company-name">
                                                                        <p>Firefox</p>
                                                                        <span class="text-muted f-14">December 16,
                                                                            2017</span>
                                                                    </div>
                                                                    <div class="job-badge">
                                                                        <label class="label bg-primary">New</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-block">
                                                            <h6 class="job-card-desc">Story Description</h6>
                                                            <p class="text-muted">lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit, sed do eiusmod tempor
                                                                incididunt ut labore et dolore magna aliqua.Lorem ipsum
                                                                dolor sit amet.</p>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-safety"></i>washington</div>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-university"></i>10 Years
                                                            </div>

                                                            <div class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-primary waves-effect waves-light btn-sm">
                                                                    Edit
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-danger waves-effect waves-light btn-sm">
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Job card end -->

                                                    <!-- Job card start -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="media">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-60"
                                                                        src="{{ asset('admin/design/files/assets/images/browser/ie.png')}}"
                                                                        alt="Generic placeholder image">
                                                                </a>
                                                                <div class="media-body media-middle">
                                                                    <div class="company-name">
                                                                        <p>Internet Explorer</p>
                                                                        <span class="text-muted f-14">December 16,
                                                                            2017</span>
                                                                    </div>
                                                                    <div class="job-badge">
                                                                        <label class="label bg-primary">New</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-block">
                                                            <h6 class="job-card-desc">Story Description</h6>
                                                            <p class="text-muted">lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit, sed do eiusmod tempor
                                                                incididunt ut labore et dolore magna aliqua.</p>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-safety"></i>washington</div>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-university"></i>10 Years
                                                            </div>

                                                            <div class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-primary waves-effect waves-light btn-sm">
                                                                    Edit
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-danger waves-effect waves-light btn-sm">
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Job card end -->

                                                    <!-- Job card start -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="media">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-60"
                                                                        src="{{ asset('admin/design/files/assets/images/browser/opera.png')}}"
                                                                        alt="Generic placeholder image">
                                                                </a>
                                                                <div class="media-body media-middle">
                                                                    <div class="company-name">
                                                                        <p>Safari</p>
                                                                        <span class="text-muted f-14">December 16,
                                                                            2017</span>
                                                                    </div>
                                                                    <div class="job-badge">
                                                                        <label class="label bg-primary">New</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-block">
                                                            <h6 class="job-card-desc">Story Description</h6>
                                                            <p class="text-muted">lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit, sed do eiusmod tempor sit
                                                                amet.</p>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-safety"></i>washington</div>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-university"></i>10 Years
                                                            </div>

                                                            <div class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-primary waves-effect waves-light btn-sm">
                                                                    Edit
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-danger waves-effect waves-light btn-sm">
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Job card end -->

                                                    <!-- Job card start -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="media">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-60"
                                                                        src="{{ asset('admin/design/files/assets/images/browser/opera.png')}}"
                                                                        alt="Generic placeholder image">
                                                                </a>
                                                                <div class="media-body media-middle">
                                                                    <div class="company-name">
                                                                        <p>Opera</p>
                                                                        <span class="text-muted f-14">December 16,
                                                                            2017</span>
                                                                    </div>
                                                                    <div class="job-badge">
                                                                        <label class="label bg-primary">New</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-block">
                                                            <h6 class="job-card-desc">Story Description</h6>
                                                            <p class="text-muted">lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit, sed do eiusmod tempor
                                                                incididunt ut labore et dolore magna aliqua. adipisicing
                                                                elit, sed do eiusmod tempor incididunt ut labore et
                                                                dolore magna aliqua</p>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-safety"></i>washington</div>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-university"></i>10 Years
                                                            </div>

                                                            <div class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-primary waves-effect waves-light btn-sm">
                                                                    Edit
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-danger waves-effect waves-light btn-sm">
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Job card end -->


                                                    <!-- Job card start -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="media">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-60"
                                                                        src="{{ asset('admin/design/files/assets/images/browser/opera.png')}}"
                                                                        alt="Generic placeholder image">
                                                                </a>
                                                                <div class="media-body media-middle">
                                                                    <div class="company-name">
                                                                        <p>Opera</p>
                                                                        <span class="text-muted f-14">December 16,
                                                                            2017</span>
                                                                    </div>
                                                                    <div class="job-badge">
                                                                        <label class="label bg-primary">New</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-block">
                                                            <h6 class="job-card-desc">Story Description</h6>
                                                            <p class="text-muted">lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit, sed do eiusmod tempor
                                                                incididunt ut labore et dolore magna aliqua. adipisicing
                                                                elit, sed do eiusmod tempor incididunt ut labore et
                                                                dolore magna aliqua</p>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-safety"></i>washington</div>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-university"></i>10 Years
                                                            </div>

                                                            <div class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-primary waves-effect waves-light btn-sm">
                                                                    Edit
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-danger waves-effect waves-light btn-sm">
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Job card end -->
                                                </div>


                                                <!-- Pagination start -->
                                                <nav aria-label="...">
                                                    <ul class="pagination justify-content-center m-t-20 m-b-20">
                                                        <li class="page-item disabled">
                                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active">
                                                            <a class="page-link" href="#">2 <span
                                                                    class="sr-only">(current)</span></a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#">Next</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <!-- Pagination end -->
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