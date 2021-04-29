<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li @if(request()->route()->getName() == 'Dashboard')class="active pcoded-trigger" @endif class="pcoded-trigger">
                <a href="/dashboard">
                    <span class="pcoded-micon text-info"><i class="feather icon-home"></i></span>
                    <span class="active pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li @if(request()->route()->getName() == 'News')class="active pcoded-trigger" @endif class="pcoded-trigger">
                <a href="/news">
                    <span class="pcoded-micon"><i class="fa fa-newspaper-o"></i></span>
                    <span class="active pcoded-mtext">News</span>
                </a>
            </li>
            <li @if(request()->route()->getName() == 'Adverts')class="active pcoded-trigger" @endif class="pcoded-trigger">
                <a href="/advertisements">
                    <span class="pcoded-micon"><i class="fa fa-bullhorn"></i></span>
                    <span class="active pcoded-mtext">advertisements</span>
                </a>
            </li>
            <li @if(request()->route()->getName() == 'About')class="active pcoded-trigger" @endif class="pcoded-trigger">
                <a href="/about">
                    <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                    <span class="active pcoded-mtext">About</span>
                </a>
            </li>
            <li @if(request()->route()->getName() == 'Inspiring Stories')class="active pcoded-trigger" @endif class="pcoded-trigger">
                <a href="/inspiring-stories">
                    <span class="pcoded-micon"><i class="fa fa-certificate"></i></span>
                    <span class="active pcoded-mtext">Inspiring Stories</span>
                </a>
            </li>
            <li @if(request()->route()->getName() == 'Companies') class="active pcoded-trigger" @endif>
                <a href="/licensed-companies">
                    <span class="pcoded-micon"><i class="fa fa-user-md"></i></span>
                    <span class="pcoded-mtext">Licensed Companies</span>
                </a>
            </li>
            <li @if(request()->route()->getName() == 'Articles')class="active pcoded-trigger" @endif class="pcoded-trigger">
                <a href="/articles">
                    <span class="pcoded-micon"><i class="fa fa-columns"></i></span>
                    <span class="active pcoded-mtext">Articles</span>
                </a>
            </li>
            <li @if(request()->route()->getName() == 'Benefits')class="active pcoded-trigger" @endif class="pcoded-trigger">
                <a href="/benefits">
                    <span class="pcoded-micon"><i class="fa fa-plus-square"></i></span>
                    <span class="active pcoded-mtext">Benefits</span>
                </a>
            </li> 
            <li @if(request()->route()->getName() == 'Projects')class="active pcoded-trigger" @endif class="pcoded-trigger">
                <a href="/projects">
                    <span class="pcoded-micon"><i class="fa fa-star"></i></span>
                    <span class="active pcoded-mtext">Projects</span>
                </a>
            </li>
            <li @if(request()->route()->getName() == 'Subscribers')class="active pcoded-trigger" @endif class="pcoded-trigger">
                <a href="/subscribers">
                    <span class="pcoded-micon"><i class="fa fa-envelope-o"></i></span>
                    <span class="active pcoded-mtext">Subscribers</span>
                </a>
            </li>

            <div class="pcoded-navigatio-lavel">Set Up</div>
            <li @if(request()->route()->getName() == 'CMS') class="active pcoded-trigger" @endif>
                <a href="/change-theme">
                    <span class="pcoded-micon"><i class="fa fa-cogs"></i></span>
                    <span class="pcoded-mtext">Change Themes</span>
                </a>
            </li>
            <div class="pcoded-navigatio-lavel">Profile</div>
            <li class="pcoded-trigger">
                <a href="/user/profile">
                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                    <span class="pcoded-mtext">Profile</span>
                </a>
            </li>
            <li class="pcoded-trigger">
                <a href="/organisation/profile">
                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                    <span class="pcoded-mtext">Organisation Profile</span>
                </a>
            </li>
        </ul>
    </div>
</nav>