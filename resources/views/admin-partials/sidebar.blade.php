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
            <li @if(request()->route()->getName() == 'Portifolio')class="active pcoded-trigger" @endif class="pcoded-trigger">
                <a href="/portifolio">
                    <span class="pcoded-micon"><i class="fa fa-plus-square"></i></span>
                    <span class="active pcoded-mtext">Portfolio</span>
                </a>
            </li>
            <li @if(request()->route()->getName() == 'Achievements')class="active pcoded-trigger" @endif class="pcoded-trigger">
                <a href="/achievements">
                    <span class="pcoded-micon"><i class="fa fa-bullhorn"></i></span>
                    <span class="active pcoded-mtext">Achievements</span>
                </a>
            </li>
            <li @if(request()->route()->getName() == 'Team')class="active pcoded-trigger" @endif class="pcoded-trigger">
                <a href="/team">
                    <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                    <span class="active pcoded-mtext">Team</span>
                </a>
            </li>
        </ul>
    </div>
</nav>