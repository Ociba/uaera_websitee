<style>
    @media screen and (min-width: 676px) {
    .modal-dialog {
    max-width: 800px; /* New width for default modal */
    }
    }
</style>
</style>
<div class="card col-lg-12 col-sm-12 col-md-12 navbar-container data-animsition-in-class="fade-in" data-animsition-in-duration="1000" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">
    <div class="bs-example">
        <ul class="nav nav-pills mb-5 ">
            <li class="nav-item">
                <a href="#" class="nav-link activ">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Accounts</a>
                <div class="dropdown-menu">
                    <a href="#" data-toggle="modal" data-target="#new-account" class="dropdown-item">+ New Accounts</a>
                    <a href="/organisation/cms-account-table" class="dropdown-item"> Account Table</a>
                    <div class="dropdown-divider"></div>
                    <a href="/organisation/account-recent-records" class="dropdown-item"><b>Recent Records</b></a>
                    <a href="/organisation/account-acc1" class="dropdown-item">ACCA1</a>
                    <a href="/organisation/account-acme" class="dropdown-item">Acme(sample)</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><b>Recent Lists</b></a>
                    <a href="/organisation/my-account"class="dropdown-item">My Accounts</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Leads</a>
                <div class="dropdown-menu" style="font-size:12px;">
                    <a href="/organisation/cms-leads-table" class="dropdown-item"> Leads Table</a>
                    <a href="#"  data-toggle="modal" data-target="#large-Modal"class="dropdown-item">+ New lead</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item" style="font-weight:bold;">Recent Records</a>
                    <a href="/organisation/cms" class="dropdown-item">Peter Kavuma Walls PKW</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><b>+ Open "Peter Kavuma Walls..." in New Tab</b></a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Contacts</a>
                <div class="dropdown-menu" style="font-size:12px;">
                    <a href="/organisation/contacts" class="dropdown-item"> Contacts</a>
                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#exampleModalScrollable">+ New Contact</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item" style="font-weight:bold;">Recent lists</a>
                    <a href="/organisation/cms-my-contacts" class="dropdown-item">my contacts</a>
                    <a href="/organisation/all-contacts" class="dropdown-item">All contacts</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Opportunities</a>
                <div class="dropdown-menu" style="font-size:12px;">
                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#exampleModalScrollable1">+ New opportunity</a>
                    <a href="/organisation/opportunity-table" class="dropdown-item">Opportunity</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item" style="font-weight:bold;">Recent Records</a>
                    <a href="/organisation/cms-opportunity" class="dropdown-item">acme-1250 widgets(Sample)</a>
                    {{--
                        <a href="#" class="dropdown-item">
                        <acme-1200></acme-1200>
                        widgets(Sample)
                    </a>
                        <a href="#" class="dropdown-item">acme-130 widgets(Sample)</a>
                    <a href="#" class="dropdown-item">acme-120 widgets(Sample)</a>
                    <a href="#" class="dropdown-item">acme-1100 widgets(Sample)</a>
                    --}}
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">+ Open "Recently viewed" in new tab</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tasks</a>
                <div class="dropdown-menu" style="font-size:12px;">
                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#tasks">+ New Task</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Calendar</a>
                <div class="dropdown-menu" style="font-size:12px;">
                    <a href="/organisation/calendar" class="dropdown-item" style="font-weight:bold;">Calendar</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item" style="font-weight:bold;">No Recent Records to show</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dashboards</a>
                <div class="dropdown-menu" style="font-size:12px;">
                <a href="/organisation/cms-dashboard" class="dropdown-item">Dashboard</a>
                    <a href="#" class="dropdown-item" style="font-weight:bold;">No Recent Records to show</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Notes</a>
                <div class="dropdown-menu" style="font-size:12px;">
                <a href="/organisation/cms-notes" class="dropdown-item" style="font-weight:bold;">Notes</a>
                    <a href="#" class="dropdown-item" style="font-weight:bold;">New content note</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Reports</a>
                <div class="dropdown-menu" style="font-size:12px;">
                    <a href="/organisation/cms-reports" class="dropdown-item">Reports</a>
                    <a href="#" class="dropdown-item" style="font-weight:bold;">New content note</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More</a>
                <div class="dropdown-menu" style="font-size:12px;">
                    <a href="/organisation/cms-group" class="dropdown-item">Groups</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Sent Items</a>
                    <a href="#"class="dropdown-item">Trash</a>
                </div>
            </li>
        </ul>
    </div>
</div>
@include('layouts.leads-modal')
@include('layouts.contact-modal')
@include('layouts.opportunity_modal')
@include('layouts.account-modal')
@include('layouts.task-modal')

