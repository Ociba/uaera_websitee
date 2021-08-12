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
                                                        <h5>Edit Media Publications</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <section id="task-container">
                                                          @foreach($get_media_publication as $media)
                                                            <form action="/update-media/{{$media->id}}" method="get">
                                                            @csrf
                                                            <p><label>Link</label>
                                                                <input type="text" name="link" value="{{$media->link}}" class="form-control" >
                                                            </p> 
                                                                <p> <label>Title</label>
                                                                <input type="text" name="title" value="{{$media->title}}" class="form-control" ></p>
                                                                <div class="text-center">
                                                                <a href="/media" button 
                                                                    class="btn btn-warning waves-effect waves-light ">Back
                                                                    </button></a>
                                                                <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light ">Save
                                                                    </button>
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