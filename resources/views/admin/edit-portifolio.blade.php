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
                                        <div class="col-xl-12">
                                                <!-- To Do Card List card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Edit Gallery Text</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <section id="task-container">
                                                          @foreach($get_portifolio_edit as $gallery)
                                                        <form action="/update-portifolio/{{$gallery->id}}" method="get">
                                                            <div class="input-group input-group-button">
                                                                <input type="text" class="form-control" name="title" value="{{$gallery->title}}" required>
                                                                <button id="create-task"
                                                                    class="btn btn-primary input-group-addon">Update Now</button>
                                                            </div>
                                                       </form>
                                                       @endforeach
                                                        </section>
                                                    </div>
                                                </div>
                                                <!-- To Do Card List card end -->
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
</body>
</html>