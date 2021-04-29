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
                                            <!-- task, page, download counter  start -->
                                            @include('admin-partials.cards')
                                            <!-- task, page, download counter  end -->

                                            <!-- social download  end -->

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