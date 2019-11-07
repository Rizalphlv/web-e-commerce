<div class="container d-flex flex-column justify-content-between vh-100">
    <div class="row justify-content-center mt-5 ">
        <div class="col-xl-5 ">
            <div class="card ">
                <div class="card-header bg-primary">
                    <div class="app-brand">
                        <a href="/index.html">
                            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                                <g fill="none" fill-rule="evenodd">
                                    <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                                </g>
                            </svg>
                            <span class="brand-name">Login</span>
                        </a>
                    </div>
                </div>
                <div class="card-body p-5">


                    <form action="<?= base_url('auth_admin') ?>" method="post">
                        <h6 class="row">
                            <div class="form-group col-md-12 mb-4">
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                <input type="email" class="form-control input-lg" id="email" name="email" aria-describedby="emailHelp" placeholder="email" value="<?= set_value('email') ?>">
                                <?= form_error('email', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-12 ">
                                <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <h6 class="col-md-12">

                                <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>

                            </h6>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>