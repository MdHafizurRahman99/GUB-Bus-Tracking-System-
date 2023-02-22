<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#dashboard" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
{{--            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Course">--}}
{{--                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#course" type="button"><i class="bi bi-book"></i></button>--}}
{{--            </li>--}}
            </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{asset('frontEndAsset')}}/img/favicon.png" width="130" height="70" alt=""/>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="dashboard">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('dashboard')}}" class="list-group-item"><i class="bi bi-plus-circle-fill"></i>Dashboard</a>
{{--                    <a href="{{route('register')}}" class="list-group-item"><i class="bi bi-plus-circle-fill"></i>ADD Admin</a>--}}
                    <a href="{{route('add-driver')}}" class="list-group-item"><i class="bi bi-plus-circle-fill"></i>ADD Driver</a>
                    <a href="{{route('manage-driver')}}" class="list-group-item"><i class="bi bi-plus-circle-fill"></i>Manage Driver</a>
                    <a href="{{route('add-bus')}}" class="list-group-item"><i class="bi bi-plus-circle-fill"></i>Add Bus</a>
                    <a href="{{route('add-route')}}" class="list-group-item"><i class="bi bi-plus-circle-fill"></i>Add Routes</a>
                    <a href="{{route('add-bus-stops')}}" class="list-group-item"><i class="bi bi-plus-circle-fill"></i>Add Bus Stops</a>

                   </div>
            </div>
            <div class="tab-pane fade" id="course">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('add-course')}}" class="list-group-item"><i class="bi bi-plus-circle-fill"></i>ADD Course</a>
                    <a href="{{route('manage-course')}}" class="list-group-item"><i class="bi bi-plus-circle-fill"></i>Manage Course</a>
                   </div>
            </div>
        </div>
    </div>
</aside>
