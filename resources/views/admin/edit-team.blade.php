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
                                        <div class="col-xl-3"></div>
                                            <div class="col-xl-6">
                                                <!-- To Do Card List card start -->
                                                <div class="card">
                                                    <div class="card-header text-center">
                                                        <h5>Edit Uaera Team Members</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <section id="task-container">
                                                          @foreach($get_team_edit as $members)
                                                          <form action="/update-member/{{$members->id}}" method="get">
                                                            @csrf
                                                            <div class="">
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label for="inputFirstname">Name</label>
                                                                    <input type="text"name="name" value="{{$members->name}}" class="form-control" id="inputFirstname" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label for="inputFirstname">Title</label>
                                                                    <input type="text"name="title" value="{{$members->title}}" class="form-control" id="inputFirstname" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label for="inputFirstname">Contact</label>
                                                                    <input type="text"name="contact" value="{{$members->contact}}" class="form-control" id="inputFirstname" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label for="inputFirstname">Email</label>
                                                                    <input type="text"name="email" value="{{$members->email}}" class="form-control" id="inputFirstname" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">
                                                                    <label for="inputFirstname">Description</label>
                                                                    <input type="text"name="description" value="{{$members->description}}" class="form-control" id="inputFirstname" placeholder="" required>
                                                                </div>
                                                            </div>
                                                            <div class="row text-center">
                                                                <div class="col-sm-12">
                                                                    <a href="/team" button class="btn btn-warning mr-2">Back</button></a>
                                                                    <button type="submit" class="btn btn-success">Save</button>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </form>
                                                       @endforeach
                                                        </section>
                                                    </div>
                                                </div>
                                                <!-- To Do Card List card end -->
                                            </div>
                                            <div class="col-xl-3"></div>
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
</body>
</html>