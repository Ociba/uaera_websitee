

<!DOCTYPE html>
<html lang="en">

@include('admin-partials.styling')
<link rel="stylesheet" type="text/css" href="{{asset('design/files/bower_components/chartist/dist/chartist.css')}}">

<body>
    @include('admin-partials.loader')
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('admin-partials.navbar')

            <!-- Sidebar chat start -->
            @include('admin-partials.sidebar')
            
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                @include('admin-partials.cards')
                                                </div>
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
</body>
@include('admin-partials.javascript')
</html>