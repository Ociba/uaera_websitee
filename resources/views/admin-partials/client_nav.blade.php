<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <ul class="pcoded-item pcoded-left-item">
            <div class="pcoded-navigatio-lavel">Help Desk</div>
            <li @if(request()->route()->getName() == "Clients Dashboard")class="active pcoded-trigger"@endif>
                <a href="/client/clients-help-desk">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Companies / Organisations</span>
                </a>
            </li>
            <li @if(request()->route()->getName() == "Client Open Tickets")class="active pcoded-trigger"@endif>
                <a href="/client/open-tickets">
                    <span class="pcoded-micon"><i class="feather icon-smartphone" style="color: green"></i></span>
                    <span class="pcoded-mtext">Open Tickets</span>
                </a>
            </li>
            <li @if(request()->route()->getName() == "Client Closed Tickets")class="active pcoded-trigger"@endif>
                <a href="/client/closed-tickets">
                    <span class="pcoded-micon"><i class="feather icon-smartphone" style="color: red"></i></span>
                    <span class="pcoded-mtext">Closed Tickets</span>
                </a>
            </li>
        </ul>
    </div>
</nav>