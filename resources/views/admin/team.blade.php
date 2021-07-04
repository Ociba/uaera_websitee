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
                                        <!--hadow card start -->
                                        <div class="row">
                                        <div class="col-lg-12">
                                        <div class="card">
                                        <div class="card-body">
                                        <div><h5>Team</h5>
                                                <span class="pull-right mt-0 mr-1">
                                                <button type="button" class="btn btn-primary waves-effect pull-right" data-toggle="modal"
                                                    data-target="#large-Modal">Add Member</button>
                                                </span>
                                            </div>
                                        </div>
                                        </div>
                                               
                                                <div class="job-card card-columns">
                                                @foreach($get_members as $members)
                                                    <!-- Job card start -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="media">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-60"
                                                                        src="{{ asset('members/images/'.$members->image)}}"
                                                                        alt="Generic placeholder image">
                                                                </a>
                                                                <div class="media-body media-middle">
                                                                    <div class="company-name">
                                                                        <p>{{$members->name}}</p>
                                                                        <span class="text-muted f-14">{{$members->created_at}}</span>
                                                                    </div>
                                                                    <div class="job-badge">
                                                                        <label class="label bg-primary">{{$members->title}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-block">
                                                        <h6 class="job-card-desc">Description</h6>
                                                            <p class="text-muted">{{$members->description}}</p>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-safety"></i>{{$members->contact}}</div>
                                                            <div class="job-meta-data"><i
                                                                    class="icofont icofont-university"></i>{{$members->email}}
                                                            </div>
                                                            <div class="text-right">
                                                                <a href="/edit_team/{{$members->id}}" button  class="btn btn-primary waves-effect waves-light btn-sm">Edit</button></a>
                                                                <a href="/delete-member/{{$members->id}}" button class="btn btn-danger waves-effect waves-light btn-sm">Delete</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    <!-- Job card end -->
                                                </div>


                                                <!-- Pagination start -->
                                                {{--<nav aria-label="...">
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
                                                --}}
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
        <div class="modal-dialog modal-md" role="document">
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
                        <form action="/create-team-member" method="post" enctype="multipart/form-data">
                              @csrf
                                <div class="">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="inputFirstname">Name</label>
                                        <input type="text"name="name" class="form-control" id="inputFirstname" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="inputFirstname">Title</label>
                                        <input type="text"name="title" class="form-control" id="inputFirstname" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="inputFirstname">Contact</label>
                                        <input type="text"name="contact" class="form-control" id="inputFirstname" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="inputFirstname">Email</label>
                                        <input type="text"name="email" class="form-control" id="inputFirstname" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="inputFirstname">Description</label>
                                        <textarea type="text"name="description" class="form-control" id="inputFirstname" placeholder="" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="inputFirstname">Image</label>
                                        <input type="file"name="image" class="form-control" id="inputFirstname" placeholder="" required>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-sm-12">
                                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
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