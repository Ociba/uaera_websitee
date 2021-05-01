<!DOCTYPE html>
<html lang="en">

@include('admin-partials.styling')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/design/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/design/files/assets/pages/data-table/css/buttons.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/design/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">

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
                                            <!-- Zero config.table start -->
                                            <div class="card">
                                                    <div class="card-header">
                                                        <h5>Company</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="simpletable"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Tiger Nixon</td>
                                                                        <td>System Architect</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>61</td>
                                                                        <td>2011/04/25</td>
                                                                        <td>$320,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>63</td>
                                                                        <td>2011/07/25</td>
                                                                        <td>$170,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Ashton Cox</td>
                                                                        <td>Junior Technical Author</td>
                                                                        <td>San Francisco</td>
                                                                        <td>66</td>
                                                                        <td>2009/01/12</td>
                                                                        <td>$86,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cedric Kelly</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2012/03/29</td>
                                                                        <td>$433,060</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Airi Satou</td>
                                                                        <td>Accountant</td>
                                                                        <td>Tokyo</td>
                                                                        <td>33</td>
                                                                        <td>2008/11/28</td>
                                                                        <td>$162,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Brielle Williamson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>New York</td>
                                                                        <td>61</td>
                                                                        <td>2012/12/02</td>
                                                                        <td>$372,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Herrod Chandler</td>
                                                                        <td>Sales Assistant</td>
                                                                        <td>San Francisco</td>
                                                                        <td>59</td>
                                                                        <td>2012/08/06</td>
                                                                        <td>$137,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rhona Davidson</td>
                                                                        <td>Integration Specialist</td>
                                                                        <td>Tokyo</td>
                                                                        <td>55</td>
                                                                        <td>2010/10/14</td>
                                                                        <td>$327,900</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Colleen Hurst</td>
                                                                        <td>Javascript Developer</td>
                                                                        <td>San Francisco</td>
                                                                        <td>39</td>
                                                                        <td>2009/09/15</td>
                                                                        <td>$205,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sonya Frost</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>23</td>
                                                                        <td>2008/12/13</td>
                                                                        <td>$103,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jena Gaines</td>
                                                                        <td>Office Manager</td>
                                                                        <td>London</td>
                                                                        <td>30</td>
                                                                        <td>2008/12/19</td>
                                                                        <td>$90,560</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Quinn Flynn</td>
                                                                        <td>Support Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>22</td>
                                                                        <td>2013/03/03</td>
                                                                        <td>$342,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Charde Marshall</td>
                                                                        <td>Regional Director</td>
                                                                        <td>San Francisco</td>
                                                                        <td>36</td>
                                                                        <td>2008/10/16</td>
                                                                        <td>$470,600</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Haley Kennedy</td>
                                                                        <td>Senior Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>43</td>
                                                                        <td>2012/12/18</td>
                                                                        <td>$313,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tatyana Fitzpatrick</td>
                                                                        <td>Regional Director</td>
                                                                        <td>London</td>
                                                                        <td>19</td>
                                                                        <td>2010/03/17</td>
                                                                        <td>$385,750</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Michael Silva</td>
                                                                        <td>Marketing Designer</td>
                                                                        <td>London</td>
                                                                        <td>66</td>
                                                                        <td>2012/11/27</td>
                                                                        <td>$198,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Paul Byrd</td>
                                                                        <td>Chief Financial Officer (CFO)</td>
                                                                        <td>New York</td>
                                                                        <td>64</td>
                                                                        <td>2010/06/09</td>
                                                                        <td>$725,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gloria Little</td>
                                                                        <td>Systems Administrator</td>
                                                                        <td>New York</td>
                                                                        <td>59</td>
                                                                        <td>2009/04/10</td>
                                                                        <td>$237,500</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Bradley Greer</td>
                                                                        <td>Software Engineer</td>
                                                                        <td>London</td>
                                                                        <td>41</td>
                                                                        <td>2012/10/13</td>
                                                                        <td>$132,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dai Rios</td>
                                                                        <td>Personnel Lead</td>
                                                                        <td>Edinburgh</td>
                                                                        <td>35</td>
                                                                        <td>2012/09/26</td>
                                                                        <td>$217,500</td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Zero config.table end -->
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
    <!-- data-table js -->
    <script src="{{ asset('admin/design/files/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('admin/design/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('admin/design/files/assets/pages/data-table/js/jszip.min.js')}}"></script>
    <script src="{{ asset('admin/design/files/assets/pages/data-table/js/pdfmake.min.js')}}"></script>
    <script src="{{ asset('admin/design/files/assets/pages/data-table/js/vfs_fonts.js')}}"></script>
    <script src="{{ asset('admin/design/files/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('admin/design/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('admin/design/files/assets/pages/data-table/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('admin/design/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('admin/design/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- Custom js -->
    <script src="{{ asset('admin/design/files/assets/pages/data-table/js/data-table-custom.js')}}"></script>
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