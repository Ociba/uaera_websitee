

<!DOCTYPE html>
<html lang="en">

@include('admin-partials.styling')

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
                                            <div class="col-12">
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
    @include('admin-partials.javascript')
</body>

</html>