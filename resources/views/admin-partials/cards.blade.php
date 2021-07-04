<div class="col-xl-3 col-md-6">
    <div class="card bg-c-yellow update-card">
        <div class="card-block">
            <div class="row align-items-end">
                <div class="col-8">
                    <h4 class="text-white">{{auth()->user()->countMembers()}}</h4>
                    <h6 class="text-white m-b-0">Number of Members</h6>
                </div>
                <div class="col-4 text-right">
                    <canvas id="update-chart-1" height="50"></canvas>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <p class="text-white m-b-0"><i
                    class="feather icon-clock text-white f-14 m-r-10"></i>update
                : 2:15 am</p>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6">
    <div class="card bg-c-green update-card">
        <div class="card-block">
            <div class="row align-items-end">
                <div class="col-8">
                    <h4 class="text-white">{{auth()->user()->countNews()}}</h4>
                    <h6 class="text-white m-b-0">Trending News</h6>
                </div>
                <div class="col-4 text-right">
                    <canvas id="update-chart-2" height="50"></canvas>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <p class="text-white m-b-0"><i
                    class="feather icon-clock text-white f-14 m-r-10"></i>update
                : 2:15 am</p>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6">
    <div class="card bg-c-pink update-card">
        <div class="card-block">
            <div class="row align-items-end">
                <div class="col-8">
                    <h4 class="text-white">{{auth()->user()->countUsers()}}</h4>
                    <h6 class="text-white m-b-0">Number of Users</h6>
                </div>
                <div class="col-4 text-right">
                    <canvas id="update-chart-3" height="50"></canvas>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <p class="text-white m-b-0"><i
                    class="feather icon-clock text-white f-14 m-r-10"></i>update
                : 2:15 am</p>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6">
    <div class="card bg-c-lite-green update-card">
        <div class="card-block">
            <div class="row align-items-end">
                <div class="col-8">
                    <h4 class="text-white">{{auth()->user()->countAchievements()}}</h4>
                    <h6 class="text-white m-b-0">Current Achievements</h6>
                </div>
                <div class="col-4 text-right">
                    <canvas id="update-chart-4" height="50"></canvas>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <p class="text-white m-b-0"><i
                    class="feather icon-clock text-white f-14 m-r-10"></i>update
                : 2:15 am</p>
        </div>
    </div>
</div>