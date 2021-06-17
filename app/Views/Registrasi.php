<div class="container">
    <div class="row d-flex auth-page-container justify-content-center align-content-center ">

        <div class="col-11 col-md-4 bg-light p-4 my-5 rounded">

            <div class="text-center mb-4">
                <img src="<?= base_url('img/logo.png') ?>" alt="" width="100px">
                <h1 class="h5 mt-2">RESUTORAN</h1>
            </div>

            <form>
                <div class="form-outline mb-2">
                    <input type="name" id="regName" class="form-control" />
                    <label class="form-label" for="regName">Nama lengkap</label>
                </div>

                <div class="form-outline mb-2">
                    <input type="email" id="regEmail" class="form-control" />
                    <label class="form-label" for="regEmail">Alamat Email</label>
                </div>

                <div class="form-outline mb-2">
                    <input type="password" id="regPassword" class="form-control" />
                    <label class="form-label" for="regPassword">Kata sandi</label>
                </div>

                <div class="form-outline mb-2">
                    <input type="password" id="regPassword2" class="form-control" />
                    <label class="form-label" for="regPassword2">Ulangi kata sandi</label>
                </div>

                <div class="text-center">
                    <div>
                        <a href="/auth/registrasi/2" type="submit"
                            class="btn bg-main-color-admin mb-2 rounded-pill">Daftar</a>
                    </div>
                </div>

                <div class="row mb-2 mt-3">
                    <div class="col align-self-end">
                        <a href="/auth/login/"> &lArr; Kembali ke halaman masuk</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>