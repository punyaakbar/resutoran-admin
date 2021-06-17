<div class="container">
    <div class="row d-flex auth-page-container justify-content-center align-content-center ">

        <div class="col-11 col-md-4 bg-light p-4 my-5 rounded">

            <div class="text-center mb-4">
                <img src="<?= base_url('img/logo.png') ?>" alt="" width="100px">
                <h1 class="h5 mt-2">RESUTORAN</h1>
            </div>

            <form>
                <div class="form-outline mb-2">
                    <input type="email" id="regEmailSession" class="form-control" placeholder="<?= $email ?>"
                        aria-label="readonly input example" readonly />
                    <!-- <label class="form-label" for="regEmailSession"></label> -->
                </div>

                <div class="form-outline mb-2">
                    <input type="tel" id="regWhatsapp" class="form-control" />
                    <label class="form-label" for="regWhatsapp">Nomor whatsapp</label>
                </div>

                <div class="form-outline mb-2">
                    <input type="name" id="regNamaRestoran" class="form-control" />
                    <label class="form-label" for="regNamaRestoran">Nama restoran</label>
                </div>

                <div class="form-outline mb-3">
                    <textarea id="regRestoranDeskription" class="form-control" rows="4" style="resize: none"
                        data-mdb-showcounter="true" maxlength="200"></textarea>
                    <label class="form-label" for="regRestoranDeskription">Deskripsi restoran</label>
                    <div class="form-helper" style="font-size: 12px;"></div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="customFile">Foto restoran</label>
                    <input type="file" class="form-control" id="customFile" />
                </div>

                <div class="text-center">
                    <div>
                        <a href="/auth/registrasi/2" type="submit"
                            class="btn bg-main-color-admin mb-2 rounded-pill">Daftar</a>
                    </div>
                </div>

                <div class="row mb-2 mt-3">
                    <div class="col align-self-end">
                        <a href="<?= site_url() ?>/auth/login/"> &lArr; Kembali ke halaman masuk</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>