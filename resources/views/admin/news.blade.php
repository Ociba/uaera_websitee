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
                                        <div class="col-xl-12">
                                                <!-- To Do Card List card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>News</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="input-group input-group-button">
                                                            <input type="text" class="form-control"
                                                                placeholder="Create your task list" name="task-insert">
                                                            <button id="create-task"
                                                                class="btn btn-primary input-group-addon">Add
                                                                News</button>
                                                        </div>
                                                        <section id="task-container">
                                                            <ul id="task-list">
                                                                <li>
                                                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                                                </li>
                                                                <li>
                                                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                                                </li>
                                                                <li>
                                                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                                                </li>
                                                                <li>
                                                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                                                </li>
                                                                <li>
                                                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                                                </li>
                                                                <li>
                                                                    <p>Lorem Ipsum Dolor Sit Amet</p>
                                                                </li>
                                                            </ul>
                                                            <div class="text-center">
                                                                <button id="clear-all-tasks"
                                                                    class="btn btn-primary m-b-0" type="button">Edit
                                                                    </button>
                                                                    <button id="clear-all-tasks"
                                                                    class="btn btn-danger m-b-0" type="button">Delete
                                                                    </button>
                                                            </div>
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