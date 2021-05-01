<div class="card">
        <div class="card-block">
            <!-- Row start -->
            <div class="row m-b-30">
                <div class="col-lg-12 col-xl-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs btn-round md-tabs" style="border:none;" role="tablist">
                        <li class="nav-item mr-1">
                            <a class="nav-link active" data-toggle="tab"
                                href="#home" role="tab"><span style="border-radius:80%; color:black; width:100px; height:130px; font-size:medium;">1<sup>st</sup></span> | Related</a>
                            
                        </li>
                        <li class="nav-item mr-1">
                            <a class="nav-link" data-toggle="tab"
                                href="#profile" role="tab"><span style="border-radius:80%; color:black; width:100px; height:130px; font-size:medium;">2<sup>nd</sup></span> | Details</a>
                            
                        </li>
                            <li class="nav-item">
                            <a class="nav-link" data-toggle="tab"
                                href="#messages" role="tab"><span style="border-radius:80%; color:black; width:100px; height:130px; font-size:medium;">3<sup>rd</sup></span> | News</a>
                            
                        </li>
                        {{--
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab"
                                href="#settings3" role="tab">News</a>
                            
                        </li>
                        --}}
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content card-block">
                        <div class="tab-pane active"  style="margin-top:-50px;" id="home"
                            role="tabpanel">
                            <div class="wrapper wrapper-640">
                                <div class="j-tabs-container">
                                    <!-- start tab #1 -->
                                    <input id="tab1" type="radio" name="tabs" checked>
                                    <label class="j-tabs-label" for="tab1" title="Login">
                                    <i class="icofont icofont-login "></i>
                                    <span>Log a call</span>
                                    </label>
                                    <!-- end tab #1 -->
                                    <!-- start tab #2 -->
                                    <input id="tab2" type="radio" name="tabs">
                                    <label class="j-tabs-label" for="tab2" title="Registration">
                                    <i class="icofont icofont-ui-user"></i>
                                    <span>New Task</span>
                                    </label>
                                    <!-- end tab #2 -->
                                    <!-- start tab #3 -->
                                    <input id="tab3" type="radio" name="tabs">
                                    <label class="j-tabs-label" for="tab3" title="Reset password">
                                    <i class="icofont icofont-unlock"></i>
                                    <span>New Event</span>
                                    </label>
                                    <!-- end tab #3 -->
                                    <!-- start tab #4 -->
                                    <input id="tab4" type="radio" name="tabs">
                                    <label class="j-tabs-label" for="tab4" title="Reset password">
                                    <i class="icofont icofont-unlock"></i>
                                    <span>Email</span>
                                    </label>
                                    <!-- end tab #4 -->
                                    <!-- start form #1 -->
                                    <div id="tabs-section-1" class="j-tabs-section">
                                        <form action="#" method="post" class="j-forms" novalidate>
                                            <div class="content">
                                                <div class="j-row">
                                                    <!-- end /.span6 -->
                                                    <div class="span12">
                                                        <!-- start login -->
                                                        <div class="unit">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1" mb-2>* Subject</label>
                                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="call">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1 mb-2">Comments</label>
                                                                <textarea rows="8" type="email" class="form-control" id="exampleFormControlInput1" placeholder=""></textarea>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="inputEmail4 mb-2">Name</label>
                                                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Peter Kavuma WallsPKW">
                                                                    <small id="emailHelp" class="form-text text-muted">One lead per task</small>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="inputPassword4 mb-2">Related To</label>
                                                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Account">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row pull-right mb-3">
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                        <!-- end login -->
                                                        <!-- end keep logged -->
                                                    </div>
                                                    <!-- end /.span6 -->
                                                </div>
                                                <!-- end /.j-row -->
                                            </div>
                                            <!-- end /.content -->
                                        </form>
                                        <div class="row card">
                                            <div class="card-header btn-sm bg-light">
                                                <h5>Upcoming & Overdue</h5>
                                            </div>
                                            <div class="row card-block">
                                                <div class="col-md-12 col-lg-12">
                                                    <h6 class="sub-title checkbox-color checkbox-primary" style="text-transform:capitalize;">
                                                        <span><i
                                                            class="icofont fa fa-wpforms text-success fa-lg"></i></span>
                                                        <input id="checkbox18" type="checkbox" checked="">
                                                        <label for="checkbox18">
                                                        <span style="color:#3498DB;">send quote</span>
                                                        </label>
                                                        <p style="font-size:13px; text-transform:lowercase;"><span style="text-transform:capitalize;">You</span> have an upcoming task</p>
                                                    </h6>
                                                    <ul class="basic-list">
                                                        <li class="text-center">
                                                            <p>No past activity. Past meetings and tasks marked as done show up here.
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form #1 -->
                                    <!-- start form #2 -->
                                    <div id="tabs-section-2" class="j-tabs-section">
                                        <form action="#" method="post" class="j-forms" novalidate>
                                            <div class="content">
                                                <!-- start name email -->
                                                <div class="j-row">
                                                    <div class="span12 unit">
                                                        <div class="input">
                                                            <label for="exampleFormControlInput1 mb-4">* Subject</label>
                                                            <input type="text" id="username"
                                                                name="username"
                                                                placeholder="Call">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end name email -->
                                                <!-- start password -->
                                                <div class="j-row">
                                                    <div class="span6 unit">
                                                        <div class="input">
                                                            <label for="exampleFormControlInput1 mb-4">* Due Date:</label>
                                                            <input id="dropper-dangercolor" class="form-control"
                                                                type="text" placeholder="Write Due Date" />
                                                        </div>
                                                    </div>
                                                    <div class="span6 unit">
                                                        <div class="input">
                                                            <label for="exampleFormControlInput1 mb-4">* Assigned To:</label>
                                                            <input type="text" id="username"
                                                                name="username"
                                                                placeholder="Jema Makaka">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="j-row">
                                                    <div class="span6 unit">
                                                        <div class="input">
                                                            <label for="exampleFormControlInput1 mb-4">Name:</label>
                                                            <input id="dropper-dangercolor" class="form-control"
                                                                type="text" placeholder="peter kavuma wallsPKW" />
                                                            <small id="emailHelp" class="form-text text-muted">One lead per task</small>
                                                        </div>
                                                    </div>
                                                    <div class="span6 unit">
                                                        <div class="input">
                                                            <label for="exampleFormControlInput1 mb-4"> Related To:</label>
                                                            <input type="text" id="username"
                                                                name="username"
                                                                placeholder="account">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-primary m-b-20 f-right">Save</button>
                                            </div>
                                            <!-- end /.content -->
                                        </form>
                                        <div class="row card">
                                            <div class="card-header btn-sm bg-light">
                                                <h5>Upcoming & Overdue</h5>
                                            </div>
                                            <div class="row card-block">
                                                <div class="col-md-12 col-lg-12">
                                                    <h6 class="sub-title checkbox-color checkbox-primary" style="text-transform:capitalize;">
                                                        <span><i
                                                            class="icofont fa fa-wpforms text-success fa-lg"></i></span>
                                                        <input id="checkbox18" type="checkbox" checked="">
                                                        <label for="checkbox18">
                                                        <span style="color:#3498DB;">send quote</span>
                                                        </label>
                                                        <p style="font-size:13px; text-transform:lowercase;"><span style="text-transform:capitalize;">You</span> have an upcoming task</p>
                                                    </h6>
                                                    <ul class="basic-list">
                                                        <li class="text-center">
                                                            <p>No past activity. Past meetings and tasks marked as done show up here.
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form #2 -->
                                    <!-- start form #3 -->
                                    <div id="tabs-section-3" class="j-tabs-section">
                                        <form action="#" method="post" class="j-forms" novalidate>
                                            <div class="content">
                                                <!-- start name email -->
                                                <div class="j-row">
                                                    <div class="span12 unit">
                                                        <div class="input">
                                                            <label for="exampleFormControlInput1 mb-4">* Subject</label>
                                                            <input type="text" id="username"
                                                                name="username"
                                                                placeholder="Call">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end name email -->
                                                <div class="j-row">
                                                    <div class="span12 unit">
                                                        <div class="input">
                                                            <label for="exampleFormControlInput1 mb-4">Description</label>
                                                            <textarea rows="8" type="text" id="username"
                                                                name="username"
                                                                placeholder="Call"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- start password -->
                                                <div class="j-row">
                                                    <div class="span3 unit">
                                                        <div class="input">
                                                            <label for="exampleFormControlInput1 mb-4">* Start Date:</label>
                                                            <input id="dropper-dangercolor" class="form-control"
                                                                type="text" placeholder="Write Due Date" />
                                                        </div>
                                                    </div>
                                                    <div class="span3 unit">
                                                        <div class="input">
                                                            <label for="exampleFormControlInput1 mb-4">Time:</label>
                                                            <input type="text" id="username"
                                                                name="username"
                                                                placeholder="Jema Makaka">
                                                        </div>
                                                    </div>
                                                    <div class="span3 unit">
                                                        <div class="input">
                                                            <label for="exampleFormControlInput1 mb-4">* End Date:</label>
                                                            <input type="text" id="username"
                                                                name="username"
                                                                placeholder="Jema Makaka">
                                                        </div>
                                                    </div>
                                                    <div class="span3 unit">
                                                        <div class="input">
                                                            <label for="exampleFormControlInput1 mb-4">Time</label>
                                                            <input type="text" id="username"
                                                                name="username"
                                                                placeholder="Jema Makaka">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="j-row">
                                                    <div class="span12 unit">
                                                        <div class="input">
                                                            <label for="exampleFormControlInput1 mb-4">Location</label>
                                                            <input type="text" id="username"
                                                                name="username"
                                                                placeholder="Call">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="j-row">
                                                    <div class="span6 unit">
                                                        <div class="input">
                                                            <label for="exampleFormControlInput1 mb-4">Name:</label>
                                                            <input id="dropper-dangercolor" class="form-control"
                                                                type="text" placeholder="peter kavuma wallsPKW" />
                                                            <small id="emailHelp" class="form-text text-muted">One lead per task</small>
                                                        </div>
                                                    </div>
                                                    <div class="span6 unit">
                                                        <div class="input">
                                                            <label for="exampleFormControlInput1 mb-4"> Related To:</label>
                                                            <input type="text" id="username"
                                                                name="username"
                                                                placeholder="account">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-primary m-b-20 f-right">Save</button>
                                            </div>
                                            <!-- end /.content -->
                                        </form>
                                        <div class="row card">
                                            <div class="card-header btn-sm bg-light">
                                                <h5>Upcoming & Overdue</h5>
                                            </div>
                                            <div class="row card-block">
                                                <div class="col-md-12 col-lg-12">
                                                    <h6 class="sub-title checkbox-color checkbox-primary" style="text-transform:capitalize;">
                                                        <span><i
                                                            class="icofont fa fa-wpforms text-success fa-lg"></i></span>
                                                        <input id="checkbox18" type="checkbox" checked="">
                                                        <label for="checkbox18">
                                                        <span style="color:#3498DB;">send quote</span>
                                                        </label>
                                                        <p style="font-size:13px; text-transform:lowercase;"><span style="text-transform:capitalize;">You</span> have an upcoming task</p>
                                                    </h6>
                                                    <ul class="basic-list">
                                                        <li class="text-center">
                                                            <p>No past activity. Past meetings and tasks marked as done show up here.
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form #3 -->
                                    <!--Start form #4-->
                                    <div id="tabs-section-4" class="j-tabs-section">
                                        <form action="#" method="post" class="j-forms" novalidate>
                                            <div class="content">
                                                <!-- start widget button 130 -->
                                                <div class="unit">
                                                    <p style="font-size:16px; font-weight:bold;">Do you want to send emails through your Office 365 account?</p>
                                                    <p style="font-size:14px;">Start here to connect your Office 365 account to Salesforce so you can send email through that account for better deliverability and open rates. You can also see the emails you’ve sent in your Office 365 account’s Sent Items folder.</p>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-inverse btn-outline-inverse text-info"><i
                                                                class="icofont icofont-warning-alt"></i>No, Send through Salesforce
                                                            </button>
                                                        </div>
                                                        <!-- Border button -->
                                                        <div class="col-sm-6">
                                                            <buttonbtn-gray
                                                                class="btn btn-inverse btn-outline-inverse">
                                                            <img style="height:20px; width:30px;" src="{{asset('cms/office.png')}}"><span class="text-info">Yes, Connect Office 365</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end widget button 130 -->
                                            </div>
                                            <!-- end /.content -->
                                        </form>
                                        <div class="row card">
                                            <div class="card-header btn-sm bg-light">
                                                <h5>Upcoming & Overdue</h5>
                                            </div>
                                            <div class="row card-block">
                                                <div class="col-md-12 col-lg-12">
                                                    <h6 class="sub-title checkbox-color checkbox-primary" style="text-transform:capitalize;">
                                                        <span><i
                                                            class="icofont fa fa-wpforms text-success fa-lg"></i></span>
                                                        <input id="checkbox18" type="checkbox" checked="">
                                                        <label for="checkbox18">
                                                        <span style="color:#3498DB;">send quote</span>
                                                        </label>
                                                        <p style="font-size:13px; text-transform:lowercase;"><span style="text-transform:capitalize;">You</span> have an upcoming task</p>
                                                    </h6>
                                                    <ul class="basic-list">
                                                        <li class="text-center">
                                                            <p>No past activity. Past meetings and tasks marked as done show up here.
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end form #4-->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <div class="j-wrapper j-wrapper-640">
                                <form action="#" method="post" style="margin-top:-50px;"
                                    class="j-pro" id="j-pro" novalidate>
                                    <div class="j-content">
                                        <div
                                            class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                                            <span>Post</span>
                                        </div>
                                        <div class="j-divider j-gap-bottom-25"></div>
                                        <!-- start widget button 130 -->
                                        <div class="j-unit">
                                            <div class="j-widget j-right-130">
                                                <div class="j-input">
                                                    <input type="email"
                                                        placeholder="Share an Update"
                                                        name="email">
                                                </div>
                                                <button type="submit"
                                                    class="j-addon-btn j-adn-130 j-adn-right">
                                                Share
                                                </button>
                                            </div>
                                        </div>
                                        <!-- end widget button 130 -->
                                        <!-- start response from server -->
                                        <div class="j-response"></div>
                                        <!-- end response from server -->
                                    </div>
                                    <!-- end /.content -->
                                </form>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Recent Actiities</h5>
                                </div>
                                <div class="card-block accordion-block">
                                    <div id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="accordion-panel">
                                            <div class="accordion-heading" role="tab"
                                                id="headingOne">
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapseOne"
                                                        aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                    <img class="media-object m-r-10 m-l-10" style="width:30px; height:25px; border-radius:50%"
                                                        src="{{asset('design/files/assets/images/browser/chrome.png')}}"
                                                        alt="Generic placeholder image">
                                                    Mukasa Robert <span class="pull-right text-primary">23/04/2021 7:30pm <i class="fa fa-caret-square-o-down"></i></span>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in"
                                                role="tabpanel" aria-labelledby="headingOne">
                                                <div class="accordion-content accordion-desc">
                                                    <p><span style="color:green;"><i class="fa fa-tasks"></i></span> Task created</p>
                                                    <p style="color:blue;"><a href="">Send Quote</a>
                                                    </p>
                                                    <p>Subject: Send Quote</p>
                                                    <p>Name:Peter Kavuma WallsPKW, Sysol</p>
                                                    <p>Related To:</p>
                                                    <p style="color:blue;"><a href=""><i class="fa fa-comments-o"></i> Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-panel">
                                            <div class="accordion-heading" role="tab"
                                                id="headingTwo">
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapseTwo"
                                                        aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                    <img class="media-object m-r-10 m-l-10" style="width:30px; height:25px; border-radius:50%"
                                                        src="{{asset('design/files/assets/images/browser/firefox.png')}}"
                                                        alt="Generic placeholder image">
                                                    Okello peter <span class="pull-right text-primary">22/04/2021 5:00pm <i class="fa fa-caret-square-o-down"></i></span>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse"
                                                role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="accordion-content accordion-desc">
                                                    <p><span style="color:green;"><i class="fa fa-tasks"></i></span> Task created</p>
                                                    <p style="color:blue;"><a href="">Send Quote</a>
                                                    </p>
                                                    <p>Subject: Send Quote</p>
                                                    <p>Name:Peter Kavuma WallsPKW, Sysol</p>
                                                    <p>Related To:</p>
                                                    <p style="color:blue;"><a href=""><i class="fa fa-comments-o"></i> Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-panel">
                                            <div class=" accordion-heading" role="tab"
                                                id="headingThree">
                                                <h3 class="card-title accordion-title">
                                                    <a class="accordion-msg" data-toggle="collapse"
                                                        data-parent="#accordion"
                                                        href="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                    <img class="media-object m-r-10 m-l-10" style="width:30px; height:25px; border-radius:50%"
                                                        src="{{asset('design/files/assets/images/browser/ie.png')}}"
                                                        alt="Generic placeholder image">
                                                    Ann Kasumba
                                                    <span class="pull-right text-primary">21/04/2021 5:00am <i class="fa fa-caret-square-o-down"></i></span>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse"
                                                role="tabpanel" aria-labelledby="headingThree">
                                                <div class="accordion-content accordion-desc">
                                                    <p><span style="color:green;"><i class="fa fa-tasks"></i></span> Task created</p>
                                                    <p style="color:blue;"><a href="">Send Quote</a>
                                                    </p>
                                                    <p>Subject: Send Quote</p>
                                                    <p>Name:Peter Kavuma WallsPKW, Sysol</p>
                                                    <p>Related To:</p>
                                                    <p style="color:blue;"><a href=""><i class="fa fa-comments-o"></i> Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="messages"
                            role="tabpanel">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Dynamic List start -->
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <div class="dynamic-row">
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Mark</td>
                                                                        <td>Otto</td>
                                                                        <td><a href="#!" 
                                                                            data-trigger="hover" title="" data-toggle="modal" data-backdrop="false" data-target="#exampleModalCenter"><i class="fa fa-pencil"></i></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Jacob</td>
                                                                        <td>Thornton</td>
                                                                        <td><a href="#!" 
                                                                            data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalCenter"><i class="fa fa-pencil"></i></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Mark</td>
                                                                        <td>Otto</td>
                                                                        <td><a href="#!" 
                                                                            data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalCenter"><i class="fa fa-pencil"></i></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Mark</td>
                                                                        <td>Otto</td>
                                                                        <td><a href="#!" 
                                                                            data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalCenter"><i class="fa fa-pencil"></i></a></td>
                                                                    </tr>
                                                                    <td>1</td>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td><a href="#!" 
                                                                        data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalCenter"><i class="fa fa-pencil"></i></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Jacob</td>
                                                                        <td>Thornton</td>
                                                                        <td><a href="#!" 
                                                                            data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalCenter"><i class="fa fa-pencil"></i></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Larry</td>
                                                                        <td>the Bird</td>
                                                                        <td><a href="#!" 
                                                                            data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalCenter"><i class="fa fa-pencil"></i></a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="dynamic-row">
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Mark</td>
                                                                        <td>Otto</td>
                                                                        <td><a href="#!" 
                                                                            data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalCenter"><i class="fa fa-pencil"></i></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Jacob</td>
                                                                        <td>Thornton</td>
                                                                        <td><a href="#!" 
                                                                            data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalCenter"><i class="fa fa-pencil"></i></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Mark</td>
                                                                        <td>Otto</td>
                                                                        <td><a href="#!" 
                                                                            data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalCenter"><i class="fa fa-pencil"></i></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Mark</td>
                                                                        <td>Otto</td>
                                                                        <td><a href="#!" 
                                                                            data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalCenter"><i class="fa fa-pencil"></i></a></td>
                                                                    </tr>
                                                                    <td>1</td>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td><a href="#!" 
                                                                        data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalCenter"><i class="fa fa-pencil"></i></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Jacob</td>
                                                                        <td>Thornton</td>
                                                                        <td><a href="#!" 
                                                                            data-trigger="hover" title="Edit" data-toggle="modal" data-backdrop="false" data-target="#exampleModalCenter"><i class="fa fa-pencil"></i></a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Dynamic List end -->
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered col-sm-12 col-md-6 col-lg-6" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <!-- Job application card start -->
                                                <div class="card-bloc">
                                                    <div class="j-wrapper j-wrapper-640">
                                                        <form action="" method="post"
                                                            class="j-pro" id="j-pro" enctype="multipart/form-data"
                                                            novalidate>
                                                            <!-- end /.header-->
                                                            <div class="j-content">
                                                                <!-- start name -->
                                                                <div class="j-row">
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">Lead status</label>
                                                                        <div class="j-input">
                                                                            <label class="j-input j-select">
                                                                                <select name="country">
                                                                                    <option value="Australia">Unqualifed
                                                                                    </option>
                                                                                    <option value="Austria">New</option>
                                                                                    <option value="Brazil">Working</option>
                                                                                    <option value="Canada">Nurturing</option>
                                                                                    <option value="Germany">Qualified</option>
                                                                                </select>
                                                                                <i></i>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">Lead Owner</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="name" name="name"
                                                                                placeholder="Jema Makaka">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end name -->
                                                                <!-- start email phone -->
                                                                <div class="j-row">
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">Name Salutation</label>
                                                                        <div class="j-input">
                                                                            <label class="j-input j-select">
                                                                                <select name="country">
                                                                                    <option value="Australia">Mr
                                                                                    </option>
                                                                                    <option value="Austria">Ms</option>
                                                                                    <option value="Brazil">Mrs</option>
                                                                                    <option value="Canada">Dr</option>
                                                                                    <option value="Germany">Prof</option>
                                                                                </select>
                                                                                <i></i>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">First Name</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="name" name="name"
                                                                                placeholder="Peter">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end email phone -->
                                                                <!-- start last middle name -->
                                                                <div class="j-row">
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">last name</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="name" name="name"
                                                                                placeholder="Kavuma">
                                                                        </div>
                                                                    </div>
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">last name</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="name" name="name"
                                                                                placeholder="Walls">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end middle lastname -->
                                                                <!-- start suffix website -->
                                                                <div class="j-row">
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">suffix</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="name" name="name"
                                                                                placeholder="Kavuma">
                                                                        </div>
                                                                    </div>
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">Website</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="name" name="name"
                                                                                placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end suffix website -->
                                                                <div class="j-row">
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">Title</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="name" name="name"
                                                                                placeholder="IT">
                                                                        </div>
                                                                    </div>
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">Company</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="name" name="name"
                                                                                placeholder="Sysol">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="j-row">
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">Email</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="name" name="name"
                                                                                placeholder="sysolltd1@gmail.com">
                                                                        </div>
                                                                    </div>
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">Industry</label>
                                                                        <div class="j-input">
                                                                            <label class="j-input j-select">
                                                                                <select name="country">
                                                                                    <option value="Australia">Communication
                                                                                    </option>
                                                                                    <option value="Austria">Banking</option>
                                                                                    <option value="Brazil">Agriculture</option>
                                                                                    <option value="Canada">Chemicalsr</option>
                                                                                    <option value="Germany">Construction</option>
                                                                                </select>
                                                                                <i></i>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="j-row">
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">Phone</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="name" name="name"
                                                                                placeholder="256700044563">
                                                                        </div>
                                                                    </div>
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">No. of Employees</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="name" name="name"
                                                                                placeholder="13">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="j-row">
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">Mobile</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="name" name="name"
                                                                                placeholder="25678456356">
                                                                        </div>
                                                                    </div>
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">Lead source</label>
                                                                        <div class="j-input">
                                                                            <label class="j-input j-select">
                                                                                <select name="country">
                                                                                    <option value="Australia">Advertisment
                                                                                    </option>
                                                                                    <option value="Austria">Partner</option>
                                                                                    <option value="Brazil">Website</option>
                                                                                    <option value="Canada">Other</option>
                                                                                    <option value="Germany">Webnair</option>
                                                                                </select>
                                                                                <i></i>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="j-row">
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">Rating</label>
                                                                        <div class="j-input">
                                                                            <label class="j-input j-select">
                                                                                <select name="country">
                                                                                    <option value="Australia">Warm
                                                                                    </option>
                                                                                    <option value="Austria">Hot</option>
                                                                                    <option value="Brazil">Cold</option>
                                                                                </select>
                                                                                <i></i>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                                                                    <span>Address Information</span>
                                                                </div>
                                                                <!-- start address -->
                                                                <div class="j-unit">
                                                                    <label class="j-label">Address</label>
                                                                    <div class="j-input">
                                                                        <label class="j-icon-right" for="address">
                                                                        <i class="fa fa-search"></i>
                                                                        </label>
                                                                        <input type="text" id="address"
                                                                            placeholder="Address" name="address">
                                                                    </div>
                                                                </div>
                                                                <!-- end address -->
                                                                <!-- start message -->
                                                                <div class="j-unit">
                                                                    <label class="j-label">Street</label>
                                                                    <div class="j-input">
                                                                        <textarea placeholder="Additional info"
                                                                            spellcheck="false"
                                                                            name="message"></textarea>
                                                                        <span
                                                                            class="j-tooltip j-tooltip-right-top">Any
                                                                        useful information about you</span>
                                                                    </div>
                                                                </div>
                                                                <!-- end message -->
                                                                <!-- start city post code -->
                                                                <div class="j-row">
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">City</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="city"
                                                                                placeholder="Kampala" name="city">
                                                                        </div>
                                                                    </div>
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">State/Province</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="post"
                                                                                placeholder="Mengo"
                                                                                name="post_code">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end city post code -->
                                                                <div class="j-row">
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">Zip/Postalcode</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="city"
                                                                                placeholder="25677" name="city">
                                                                        </div>
                                                                    </div>
                                                                    <div class="j-span6 j-unit">
                                                                        <label class="j-label">Country</label>
                                                                        <div class="j-input">
                                                                            <input type="text" id="post"
                                                                                placeholder="Uganda"
                                                                                name="post_code">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="j-row">
                                                                    <div class="j-span8 j-unit">
                                                                        <label class="j-label">Created By</label>
                                                                    </div>
                                                                    <div class="j-span4 j-unit">
                                                                        <span style="color:#3498DB;"><i class="fa fa-empire"></i></span> Jema Makaka, 31/03/2021, 18:40
                                                                    </div>
                                                                </div>
                                                                <div class="j-row">
                                                                    <div class="j-span8 j-unit">
                                                                        <label class="j-label">Last Modified By</label>
                                                                    </div>
                                                                    <div class="j-span4 j-unit">
                                                                        <span style="color:#3498DB;"><i class="fa fa-empire"></i></span> Jema Makaka, 31/03/2021, 18:40
                                                                    </div>
                                                                </div>
                                                                <!-- start ratings -->
                                                                <div class="j-row">
                                                                    <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                                                                        <span>Customer Links</span>
                                                                    </div>
                                                                    <div class="j-unit text-center">
                                                                        <a href=""><span style="color:#3498DB;">Google Maps</span></a>
                                                                    </div>
                                                                </div>
                                                                <!-- end ratings -->
                                                                <!-- start response from server -->
                                                                <div class="j-response"></div>
                                                                <!-- end response from server -->
                                                            </div>
                                                            <!-- end /.content -->
                                                            <div class="j-footer">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Save</button>
                                                                <button type="reset"
                                                                    class="btn btn-default m-r-20">Cancel</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                            <!-- end /.footer -->
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- Job application card end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings3"
                            role="tabpanel">
                            <p class="m-0">
                                Data not available
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

