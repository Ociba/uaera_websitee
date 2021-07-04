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
                                        <div class="card">
                                            <div class="card-header">
                                               <div><h5>Achievements</h5>
                                                    <span class="pull-right mt-0 mr-1">
                                                    <button type="button" class="btn btn-primary waves-effect pull-right" data-toggle="modal"
                                                        data-target="#large-Modal">Add Acievements</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card-block box-list">
                                                <div class="row">
                                                   @foreach($get_achievements as $achievements)
                                                    <div class="col-lg-4">
                                                        <div class="p-20 ">
                                                            <p class="text-sm-center">{{$achievements->achievement}} <br />
                                                                <a href="/edit_achievement/{{$achievements->id}}" button class="btn-sm btn-success" >Edit</button></a>
                                                                <a href="/delete-achievement/{{$achievements->id}}" button class="btn-sm btn-danger">Delete</a>
                                                            </p>
                                                                
                                                        </div>
                                                    </div>
                                                    @endforeach
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
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                        <span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="/create-achievement" method="get">
                @csrf
                    <p><textarea type="text" rows="4" class="form-control" name="achievement"></textarea></p>
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