@include('layouts.edit-forms-modals')
<div class="row">
    <div class="col-lg-12">
        <!-- tab header start -->
        <div class="tab-header card">
            <ul class="nav nav-tabs md-tabs tab-timeline" style="border:none;" role="tablist"
                id="mytab">
                <li class="nav-item mr-1" style="width:196px;">
                    <a class="nav-link active" data-toggle="tab"
                        href="#qualification" role="tab"><span style="border-radius:80%; color:black; width:100px; height:130px; font-size:medium;">1<sup>st</sup></span> | Qualification</a>
                </li>
                <li class="nav-item mr-1" style="width:196px;">
                    <a class="nav-link" data-toggle="tab" href="#analysis"
                        role="tab"><span style="border-radius:80%; color:black; width:100px; height:130px; font-size:medium;">2<sup>nd</sup></span> | Needs Analysis</a>
                </li>
                <li class="nav-item mr-1" style="width:196px;">
                    <a class="nav-link" data-toggle="tab" href="#proposal"
                        role="tab"><span style="border-radius:80%; color:black; width:100px; height:130px; font-size:medium;">3<sup>rd</sup></span> | Proposal</a>
                </li>
                <li class="nav-item mr-1" style="width:196px;">
                    <a class="nav-link" data-toggle="tab" href="#negotiation"
                        role="tab"><span style="border-radius:80%; color:black; width:100px; height:130px; font-size:medium;">4<sup>th</sup></span> | Negotiation</a>
                </li>
                <li class="nav-item" style="width:196px;">
                    <a class="nav-link" data-toggle="tab" href="#closed"
                        role="tab"><span style="border-radius:80%; color:black; width:100px; height:130px; font-size:medium;">5<sup>th</sup></span> | Closed</a>
                </li>
            </ul>
        </div>
        <!-- tab header end -->
        <!-- tab content start -->
        <div class="tab-content">
            <!-- tab panel personal start -->
            <div class="tab-pane active" id="qualification" role="tabpanel">
                <!-- personal card start -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Qualification</h5>
                        <button id="edit-btn" type="button"
                            class="btn btn-sm btn-primary waves-effect waves-light f-right">
                        <i class="icofont icofont-edit"></i> Marked Stage as Completed
                        </button>
                    </div>
                    <div class="card-block">
                        <div class="view-info">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="general-info">
                                        <div class="row">
                                            <div class="row col-lg-12 col-sm-12 col-md-12">
                                                <div class="col-lg-6 col-md-6 col-lg-6">
                                                    <p class="m-0">Key Fields</p>
                                                    <div class="card">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12">
                                                                <div class="dynamic-row">
                                                                    <div class="card-block table-border-style">
                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>Closed date</td>
                                                                                        <td>18/04/2021</td>
                                                                                        <td></td>
                                                                                        <td><a href="#!" 
                                                                                            data-trigger="hover" title="" data-toggle="modal" data-backdrop="false" data-target="#exampleModalScrollableq"><i class="fa fa-pencil"></i></a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Description</td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td><a href="#!" 
                                                                                            data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalScrollableq"><i class="fa fa-pencil"></i></a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Budget Confirmed</td>
                                                                                        <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                            </label>
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td><a href="#!" 
                                                                                            data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalScrollableq"><i class="fa fa-pencil"></i></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-lg-6">
                                                    <p class=""><a href=""><span style="color:blue;" data-toggle="modal" data-target="#exampleModalScrollableedit">Edit</span></a> <b>Guidance for Success</b></p>
                                                    <h6><b>Qualify your opportunity.</b></h6>
                                                    <li>
                                                        <ul>Identify the business need you will solve for them</ul>
                                                    </li>
                                                    <li>
                                                        <ul>Confirm that they have budget and approval</ul>
                                                    </li>
                                                    <li>
                                                        <ul>Determine the timeline based on their needs</ul>
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of row -->
                                    </div>
                                    <!-- end of view-info -->
                                    <!-- end of edit-info -->
                                </div>
                                <!-- end of card-block -->
                            </div>
                            <!-- personal card end-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab pane personal end -->
            <!-- tab pane info start -->
            <div class="tab-pane" id="analysis" role="tabpanel">
                <!-- info card start -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Needs Analysis</h5>
                        <button id="edit-btn" type="button"
                            class="btn btn-sm btn-primary waves-effect waves-light f-right">
                        <i class="icofont icofont-edit"></i> Marked as Current Stage
                        </button>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="row col-lg-12 col-sm-12 col-md-12">
                                <div class="col-lg-6 col-md-6 col-lg-6">
                                    <p class="m-0">Key Fields</p>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="dynamic-row">
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Amount</td>
                                                                    <td>$45,000.00</td>
                                                                    <td></td>
                                                                    <td><a href="#!" 
                                                                        data-trigger="hover" title="" data-toggle="modal" data-backdrop="false" data-target="#exampleModalScrollableanalysis"><i class="fa fa-pencil"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Closed date</td>
                                                                    <td>18/04/2021</td>
                                                                    <td></td>
                                                                    <td><a href="#!" 
                                                                        data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalScrollableanalysis"><i class="fa fa-pencil"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Discovery Completed</td>
                                                                    <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                        </label>
                                                                    </td>
                                                                    <td></td>
                                                                    <td><a href="#!" 
                                                                        data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalScrollableanalysis"><i class="fa fa-pencil"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-lg-6 col-md-6 col-lg-6">
                                    <p class=""><a href=""><span style="color:blue;" data-toggle="modal" data-target="#exampleModalScrollableedit">Edit</span></a> <b>Guidance for Success</b></p>
                                    <h6><b>Identify the products or services required for this opportunity.</b></h6>
                                    <li>
                                        <ul>Gather customer stories, references, or competitive analysis</ul>
                                    </li>
                                    <li>
                                        <ul>Confirm your key stakeholders</ul>
                                    </li>
                                    <li>
                                        <ul>Determine what resources you have available for them</ul>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- info card end -->
            </div>
            <!-- tab pane info end -->
            <!-- tab pane contact start -->
            <div class="tab-pane" id="proposal" role="tabpanel">
                <!-- info card start -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Proposal</h5>
                        <button id="edit-btn" type="button"
                            class="btn btn-sm btn-primary waves-effect waves-light f-right">
                        <i class="icofont icofont-edit"></i> Marked as Current Stage
                        </button>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="row col-lg-12 col-sm-12 col-md-12">
                                <div class="col-lg-6 col-md-6 col-lg-6">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="dynamic-row">
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Amount</td>
                                                                    <td>$45,000.00</td>
                                                                    <td></td>
                                                                    <td><a href="#!" 
                                                                        data-trigger="hover" title="" data-toggle="modal" data-backdrop="false" data-target="#exampleModalScrollableproposal"><i class="fa fa-pencil"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Closed date</td>
                                                                    <td>18/04/2021</td>
                                                                    <td></td>
                                                                    <td><a href="#!" 
                                                                        data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalScrollableproposal"><i class="fa fa-pencil"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>ROI Analysis Completed</td>
                                                                    <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                        </label>
                                                                    </td>
                                                                    <td></td>
                                                                    <td><a href="#!" 
                                                                        data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalScrollableproposal"><i class="fa fa-pencil"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-lg-6">
                                    <p class=""><a href=""><span style="color:blue;" data-toggle="modal" data-target="#exampleModalScrollableedit">Edit</span></a> <b>Guidance for Success</b></p>
                                    <h6><b>Deliver your solution to stakeholders.</b></h6>
                                    <li>
                                        <ul>Communicate the value of your solutions</ul>
                                    </li>
                                    <li>
                                        <ul>Solidify the timeline and budget</ul>
                                    </li>
                                    <li>
                                        <ul>Establish a plan with the customer for when and how you'll close the deal</ul>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- info card end -->
            </div>
            <!-- tab pane contact end -->
            <div class="tab-pane" id="negotiation" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Negotiation</h5>
                        <button id="edit-btn" type="button"
                            class="btn btn-sm btn-primary waves-effect waves-light f-right">
                        <i class="icofont icofont-edit"></i> Marked as Current Stage
                        </button>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="row col-lg-12 col-sm-12 col-md-12">
                                <div class="col-lg-6 col-md-6 col-lg-6">
                                    <p class="m-0">Key Fields</p>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="dynamic-row">
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Amount</td>
                                                                    <td>$45,000.00</td>
                                                                    <td></td>
                                                                    <td><a href="#!" 
                                                                        data-trigger="hover" title="" data-toggle="modal" data-backdrop="false" data-target="#exampleModalScrollablenegotiation"><i class="fa fa-pencil"></i></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Closed date</td>
                                                                    <td>18/04/2021</td>
                                                                    <td></td>
                                                                    <td><a href="#!" 
                                                                        data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalScrollablenegotiation"><i class="fa fa-pencil"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-lg-6">
                                    <p class=""><a href=""><span style="color:blue;">Edit</span></a> <b>Guidance for Success</b></p>
                                    <h6><b>Determine the customer's project implementation plan.</b></h6>
                                    <li>
                                        <ul>Acquire agreements as necessary</ul>
                                    </li>
                                    <li>
                                        <ul>Adhere to your own internal discount processes</ul>
                                    </li>
                                    <li>
                                        <ul>Obtain a signed contract</ul>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="closed" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <button id="edit-btn" type="button"
                            class="btn btn-sm btn-primary waves-effect waves-light f-right">
                        <i class="icofont icofont-edit"></i> Select Closed Stage
                        </button>
                    </div>
                </div>
            </div>
            <!-- tab content end -->
        </div>
    </div>
</div>
<!-- Modal for Qualification -->
<div class="modal fade" id="exampleModalScrollableq" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <!--left side -->
                                        <div class="form-group row">
                                            <label for="fname" class="col-md-5 col-form-label">*Closed Date:</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="fname">
                                            </div>
                                        </div>
                                    </div>
                                    <!--right side -->
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <!--left side -->
                                        <div class="form-group row">
                                            <label for="fname" class="col-md-5 col-form-label">Description</label>
                                            <div class="col-md-7">
                                                <textarea rows="4" type="text" class="form-control" id="fname"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--right side -->
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <!--left side -->
                                        <div class="form-group row">
                                            <label for="fname" class="col-md-5 col-form-label">Budget Confirmed:</label>
                                            <div class="col-md-7">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--right side -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal for Analysis -->
<div class="modal fade" id="exampleModalScrollableanalysis" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <!--left side -->
                                        <div class="form-group row">
                                            <label for="fname" class="col-md-5 col-form-label">Amount</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="fname" placeholder="45000.000">
                                            </div>
                                        </div>
                                    </div>
                                    <!--right side -->
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <!--left side -->
                                        <div class="form-group row">
                                            <label for="fname" class="col-md-5 col-form-label">Closed date</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="fname">
                                            </div>
                                        </div>
                                    </div>
                                    <!--right side -->
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <!--left side -->
                                        <div class="form-group row">
                                            <label for="fname" class="col-md-5 col-form-label">Discovery Completed</label>
                                            <div class="col-md-7">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--right side -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal for Proposal -->
<div class="modal fade" id="exampleModalScrollableproposal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <!--left side -->
                                        <div class="form-group row">
                                            <label for="fname" class="col-md-5 col-form-label">Amount</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="fname" placeholder="45000.000">
                                            </div>
                                        </div>
                                    </div>
                                    <!--right side -->
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <!--left side -->
                                        <div class="form-group row">
                                            <label for="fname" class="col-md-5 col-form-label">Closed date</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="fname">
                                            </div>
                                        </div>
                                    </div>
                                    <!--right side -->
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <!--left side -->
                                        <div class="form-group row">
                                            <label for="fname" class="col-md-5 col-form-label">ROI Analysis Completed</label>
                                            <div class="col-md-7">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--right side -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal for Proposal -->
<div class="modal fade" id="exampleModalScrollablenegotiation" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <!--left side -->
                                        <div class="form-group row">
                                            <label for="fname" class="col-md-5 col-form-label">Amount</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="fname" placeholder="45000.000">
                                            </div>
                                        </div>
                                    </div>
                                    <!--right side -->
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <!--left side -->
                                        <div class="form-group row">
                                            <label for="fname" class="col-md-5 col-form-label">Closed date</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="fname">
                                            </div>
                                        </div>
                                    </div>
                                    <!--right side -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

