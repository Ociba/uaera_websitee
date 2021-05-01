@include('layouts.edit-forms-modals')
<div class="row">
    <div class="col-lg-12">
        <!-- tab header start -->
        <div class="tab-header card">
            <ul class="nav nav-tabs md-tabs" style="border:none;" role="tablist"
                id="mytab">
                <li class="nav-item mr-1" style="width:196px;">
                    <a class="nav-link active"  data-toggle="tab"
                        href="#personal" role="tab"><span style="border-radius:80%; color:black; width:100px; height:130px; font-size:medium;">1<sup>st</sup></span> | Unqualified</a>
                    
                </li>
                <li class="nav-item mr-1" style="width:195px;">
                    <a class="nav-link" data-toggle="tab" href="#binfo"
                        role="tab"> <span style="border-radius:80%; color:black; width:100px; height:130px; font-size:medium;">2<sup>nd</sup></span> | New</a>
                    
                </li>
                <li class="nav-item mr-1" style="width:195px;">
                    <a class="nav-link" data-toggle="tab" href="#contacts"
                        role="tab"> <span style="border-radius:80%; color:black; width:100px; height:130px; font-size:medium;">3<sup>rd</sup></span> | Working</a>
                    
                </li>
                <li class="nav-item mr-1" style="width:195px;">
                    <a class="nav-link" data-toggle="tab" href="#review"
                        role="tab"><span style="border-radius:80%; color:black; width:100px; height:130px; font-size:medium;">5<sup>th</sup></span> | Nurturing</a>
                    
                </li>
                <li class="nav-item" style="width:195px;">
                    <a class="nav-link" data-toggle="tab" href="#converted"
                        role="tab"><span style="border-radius:80%; color:black; width:100px; height:50px;font-size:medium;">6<sup>th</sup></span> | Converted</a>
                    
                </li>
            </ul>
        </div>
        <!-- tab header end -->
        <!-- tab content start -->
        <div class="tab-content">
            <!-- tab panel personal start -->
            <div class="tab-pane active" id="personal" role="tabpanel">
                <!-- personal card start -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Unqualified</h5>
                        <button id="edit-btn" type="button"
                            class="btn btn-sm btn-primary waves-effect waves-light f-right">
                        <i class="icofont icofont-edit"></i> Marked Status as Completed
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
                                                    <p><span class="mr-4">Lead source</span> <b>Advertisment</b></p>
                                                    <hr>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-lg-6">
                                                    <p class=""><a href="#"><span style="color:blue;" data-toggle="modal" data-target="#exampleModalScrollableedit">Edit</span></a> <b>Guidance for Success</b></p>
                                                    <h6><b>Keep track of the info related to your unqualified leads.</b></h6>
                                                    <p>Your lead may be unqualified if they are not interested in your products or they 
                                                        have left the company associated with the prospect.
                                                    </p>
                                                    <li>
                                                        <ul>Document lessons learned for future reference</ul>
                                                    </li>
                                                    <li>
                                                        <ul>Save outreach details and contact information</ul>
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
            <div class="tab-pane" id="binfo" role="tabpanel">
                <!-- info card start -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">New</h5>
                        <button id="edit-btn" type="button"
                            class="btn btn-sm btn-primary waves-effect waves-light f-right">
                        <i class="icofont icofont-edit"></i> Marked as Current Status
                        </button>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="row col-lg-12 col-sm-12 col-md-12">
                                <div class="col-lg-6 col-md-6 col-lg-6">
                                    <p class="m-0">Key Fields</p>
                                    <p><span class="mr-4">Company</span> <b>Stysol</b></p>
                                    <hr>
                                    <p><span class="mr-4">Website</span> <b></b></p>
                                    <hr>
                                    <p><span class="mr-4">Industry</span> <b>Communication</b></p>
                                    <hr>
                                    <p><span class="mr-4">No. of Employees</span> <b>13</b></p>
                                    <hr>
                                </div>
                                <div class="col-lg-6 col-md-6 col-lg-6">
                                    <p class=""><a href=""><span style="color:blue;" data-toggle="modal" data-target="#exampleModalScrollableedit">Edit</span></a> <b>Guidance for Success</b></p>
                                    <h6><b>Determine which leads are qualified or unqualified.</b></h6>
                                    <li>
                                        <ul>Assign the lead to a representative</ul>
                                    </li>
                                    <li>
                                        <ul>Gather key details on the lead from their company's website</ul>
                                    </li>
                                    <li>
                                        <ul>Create a plan to build a connection with this lead</ul>
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
            <div class="tab-pane" id="contacts" role="tabpanel">
                <!-- info card start -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Contacts</h5>
                        <button id="edit-btn" type="button"
                            class="btn btn-sm btn-primary waves-effect waves-light f-right">
                        <i class="icofont icofont-edit"></i> Marked as Current Status
                        </button>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="row col-lg-12 col-sm-12 col-md-12">
                                <div class="col-lg-6 col-md-6 col-lg-6">
                                    <p class="m-0">Key Fields</p>
                                    <p><span class="mr-4">Title</span> IT</p>
                                    <hr>
                                    <p><span class="mr-4">Email</span> <b><span style="color:blue;">sysolltd@gmail.com</span></b></p>
                                    <hr>
                                    <p><span class="mr-4">Phone</span> <b><span style="color:blue;">256701329627</span></b></p>
                                    <hr>
                                </div>
                                <div class="col-lg-6 col-md-6 col-lg-6">
                                    <p class=""><a href=""><span style="color:blue;" data-toggle="modal" data-target="#exampleModalScrollableedit">Edit</span></a> <b>Guidance for Success</b></p>
                                    <h6><b>Qualify promising leads..</b></h6>
                                    <li>
                                        <ul>Identify a contact for the lead</ul>
                                    </li>
                                    <li>
                                        <ul>Save their contact information to the lead record</ul>
                                    </li>
                                    <li>
                                        <ul>Make a plan for your outreach (For example, How many times will you reach out? What's your pitch?)</ul>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- info card end -->
            </div>
            <!-- tab pane contact end -->
            <div class="tab-pane" id="review" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Nurturing</h5>
                        <button id="edit-btn" type="button"
                            class="btn btn-sm btn-primary waves-effect waves-light f-right">
                        <i class="icofont icofont-edit"></i> Marked as Current Status
                        </button>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="row col-lg-12 col-sm-12 col-md-12">
                                <div class="col-lg-6 col-md-6 col-lg-6">
                                    <p class="m-0">Key Fields</p>
                                    <p><span class="mr-4">Rating</span> <b>Warm</b></p>
                                    <hr>
                                </div>
                                <div class="col-lg-6 col-md-6 col-lg-6">
                                    <p class=""><a href=""><span style="color:blue;" data-toggle="modal" data-target="#exampleModalScrollableedit">Edit</span></a> <b>Guidance for Success</b></p>
                                    <h6><b>Nurture your leads and identify opportunities.</b></h6>
                                    <li>
                                        <ul>Identify pain points that you can solve for this lead</ul>
                                    </li>
                                    <li>
                                        <ul>Determine the likelihood of this lead converting</ul>
                                    </li>
                                    <li>
                                        <ul>If this lead is qualified, convert it to an opportunity</ul>
                                    </li>
                                    <li>
                                        <ul>Ensure that Marketing and Sales work together to develop your lead qualifying process</ul>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="converted" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Converted</h5>
                        <button id="edit-btn" type="button"
                            class="btn btn-sm btn-primary waves-effect waves-light f-right">
                        <i class="icofont icofont-edit"></i> Select Converted Status
                        </button>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="row col-lg-12 col-sm-12 col-md-12">
                                <div class="col-lg-6 col-md-6 col-lg-6">
                                    <p class="m-0">Key Fields</p>
                                    <p><span class="mr-4">Rating</span> <b>Warm</b></p>
                                    <hr>
                                </div>
                                <div class="col-lg-6 col-md-6 col-lg-6">
                                    <p class=""><a href=""><span style="color:blue;" data-toggle="modal" data-target="#exampleModalScrollableedit">Edit</span></a> <b>Guidance for Success</b></p>
                                    <h6><b>Nurture your leads and identify opportunities.</b></h6>
                                    <li>
                                        <ul>Identify pain points that you can solve for this lead</ul>
                                    </li>
                                    <li>
                                        <ul>Determine the likelihood of this lead converting</ul>
                                    </li>
                                    <li>
                                        <ul>If this lead is qualified, convert it to an opportunity</ul>
                                    </li>
                                    <li>
                                        <ul>Ensure that Marketing and Sales work together to develop your lead qualifying process</ul>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tab content end -->
    </div>
</div>


