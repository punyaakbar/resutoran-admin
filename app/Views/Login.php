<div class="container">
    <div class="row d-flex auth-page-container justify-content-center align-content-center ">

        <div class="col-11 col-md-4 bg-light p-4 my-5 rounded">

            <div class="text-center mb-4">
                <img src="<?= base_url('img/logo.png') ?>" alt="" width="100px">
                <h1 class="h5 mt-2">RESUTORAN</h1>
            </div>
            <form>
                <div class="form-outline mb-2">
                    <input type="email" id="form2Example1" class="form-control" />
                    <label class="form-label" for="form2Example1">Email address</label>
                </div>

                <div class="form-outline mb-2">
                    <input type="password" id="form2Example2" class="form-control" />
                    <label class="form-label" for="form2Example2">Password</label>
                </div>

                <div class="row mb-2">
                    <div class="col align-self-end">
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <div class="text-center">
                    <div>
                        <a href="/dashboard/" type="submit" class="btn bg-main-color-admin mb-2 rounded-pill ">Masuk</a>
                    </div>
                    <div>
                        <a href="/auth/registrasi/" type="submit" class="btn btn-light mb-2 rounded-pill">Daftar</a>
                    </div>
                </div>

                <div class="dropdown-divider"></div>

                <div class="text-center ">
                    <p>atau masuk dengan</p>
                    <button type="button" class="btn bg-main-color-admin btn-floating mx-1">
                        <i class="fab fa-facebook-f fa-2x text-primary"></i>
                    </button>

                    <button type="button" class="btn bg-main-color-admin btn-floating mx-1">
                        <i class="fab fa-google fa-2x text-primary"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>