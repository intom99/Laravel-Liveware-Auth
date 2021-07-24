<div>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5><i class="fa fa-list-ul"></i> Main Menu</h5>
                        <hr>

                        <ul class="list-group">
                            <li class="list-group-item"><i class="fas fa-tachometer-alt"></i>Dashboard</li>
                            <li class="list-group-item"><i class="fas fa-tags"></i>Tags</li>
                            <li class="list-group-item"><i class="fas fa-folder"></i>Categories</li>
                            <li class="list-group-item"><i class="fas fa-book"></i>Posts</li>
                            <li class="list-group-item active"><i class="fas fa-sign-out-alt"></i>Logout</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5><i class="fa fa-tachometer-alt"></i> Dashboard</h5>
                        <hr>
                        Welcome <strong>{{auth()->user()->name}}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
