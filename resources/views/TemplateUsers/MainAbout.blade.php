<script src="//unpkg.com/alpinejs" defer></script>
<section>
    <div class="containerd d-flex align-items-center justify-content-center my-5" x-data="{ activeButton: 1 }">
        <div class="row align-items-center"> <!-- Tambahkan align-items-center pada row -->
            <div class="col-md-6 col-sm-12">
                <!-- Konten yang akan ditampilkan berdasarkan activeButton -->
                <div class="isi mx-4" x-show="activeButton === 1" id="cina">
                    <p class="text-center">-- <b>Visi</b> --</p>
                    <p style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis,
                        vitae
                        recusandae. Esse sunt fuga beatae eos atque dolor asperiores, iure iste tempora, eveniet
                        delectus
                        molestiae, eum ex provident amet neque!</p>
                    <p class="text-center">-- <b>Misi</b> --</p>
                    <p style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis,
                        vitae
                        recusandae. Esse sunt fuga beatae eos atque dolor asperiores, iure iste tempora, eveniet
                        delectus
                        molestiae, eum ex provident amet neque!</p>
                </div>

                <div class="isi mx-4" x-show="activeButton === 2" id="cina">
                    <div class="row justify-content-center">
                        <div class="col-6 d-flex justify-content-center">
                            <img src="<?= url('logo.png'); ?>" alt="logo" style="max-width: 100%; height: auto;">
                        </div>
                    </div>
                    <h6>Elemen</h6>
                    <p style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis,
                        vitae
                        recusandae. Esse sunt fuga beatae eos atque dolor asperiores, iure iste tempora, eveniet
                        delectus
                        molestiae, eum ex provident amet neque!</p>
                    <h6>Warna</h6>
                    <p style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis,
                        vitae
                        recusandae. Esse sunt fuga beatae eos atque dolor asperiores, iure iste tempora, eveniet
                        delectus
                        molestiae, eum ex provident amet neque!</p>
                </div>

                <div class="isi mx-4" x-show="activeButton === 3" id="cina">
                    <div class="row justify-content-center">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus quis non rem fugit odit vel
                        doloremque asperiores odio numquam dolor, facilis nesciunt incidunt sequi? Est voluptas omnis
                        accusantium sapiente labore!</p>
                </div>

                <div class="isi mx-4" x-show="activeButton === 4" id="cina">
                    <div class="row justify-content-center">
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime fugiat eos voluptate nesciunt id?
                        Repellat, velit ut? Dignissimos accusantium praesentium fugit? Provident commodi laboriosam
                        inventore deleniti fugiat molestias deserunt aut!</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mt-4 justify-content-center">
                <!-- pke alpinejs soale ez -->
                <div class="container mx-1 my-3">
                    <a href="#cina">
                        <div class="tombolAbout" @click="activeButton = 1">Visi Misi</div>
                    </a>
                    <a href="#cina">
                        <div class="tombolAbout" @click="activeButton = 2">Filosofi Logo</div>
                    </a>
                    <a href="#cina">
                        <div class="tombolAbout" @click="activeButton = 3">Kelembagaan</div>
                    </a>
                    <a href="#cina">
                        <div class="tombolAbout" @click="activeButton = 4">Sejarah</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .tombolAbout {
            text-align: center;
            background: rgb(255, 89, 0);
            border-radius: 4px;
            padding: 8px 4px;
            margin: 4px 50px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tombolAbout:hover {
            background: rgb(137, 48, 0);
            transform: scale(0.94);
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</section>