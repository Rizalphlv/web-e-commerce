<div class="container d-flex flex-column justify-content-between vh-100">
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-xl-5 col-lg-6 col-md-10">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="app-brand">
                        <a href="/index.html">
                            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                                <g fill="none" fill-rule="evenodd">
                                    <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                                </g>
                            </svg>
                            <span class="brand-name">Sleek Dashboard</span>
                        </a>
                    </div>
                </div>
                <div class="card-body p-5">
                    <h4 class="text-dark mb-5">Sign Up</h4>
                    <form action="<?= base_url('auth/registration'); ?>" method="post">
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <input type="text" class="form-control input-lg" id="Username" name="username" aria-describedby="nameHelp" placeholder="Username" value="<?= set_value('username') ?>">
                                <?= form_error('username', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                <input type="email" class="form-control input-lg" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="<?= set_value('email') ?>">
                                <?= form_error('email', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-12 mb-4">
                                <input type="telpon" class="form-control input-lg" id="telpon" name="telpon" aria-describedby="telponlHelp" placeholder="Telepon" value="<?= set_value('telpon') ?>">
                                <?= form_error('telpon', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-12 ">
                                <input type="password" class="form-control input-lg" name="password1" id="password" placeholder="Password">
                                <?= form_error('password1', '<small class="text-danger ">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-12 ">
                                <input type="password" class="form-control input-lg" name="password2" id="cpassword" placeholder="Confirm Password">
                            </div>

                            <div class="col-md-12">
                                <div class="d-inline-block mr-3">
                                    <label class="control control-checkbox">
                                        <input type="checkbox" required />
                                        <div class="control-indicator"></div>
                                        I Agree the terms and conditions
                                    </label>

                                </div>
                                <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign Up</button>
                                <p>Already have an account?
                                    <a class="text-blue" href="<?= base_url("auth"); ?>">Sign in</a>
                                </p>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>