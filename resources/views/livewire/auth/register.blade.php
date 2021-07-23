<div>
   
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5 class="text-center">
                            <i class="fa fa-user-plus"></i> Register
                        </h5>
                        <hr>
                        <form wire:submit.prevent="store">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Full Name</label>
                                        <input type="text" wire:model.lazy="name" class="form-control @error('name') is-invalid @enderror" placeholder="input name">
                                        @error('name')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Email</label>
                                        <input type="text" wire:model.lazy="email" class="form-control @error('email') is-invalid @enderror" placeholder="input email">
                                        @error('email')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Password</label>
                                        <input type="password" wire:model.lazy="password" class="form-control @error('password') is-invalid @enderror" placeholder="password">
                                        @error('password')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Confirm Password</label>
                                        <input type="password" wire:model.lazy="password_confirmation" class="form-control" placeholder="confirm password">
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
