<style>
    .backBlue {
        background-color: rgba(255, 119, 0, 0.87);
    }

    .gradient {
        background: linear-gradient(to bottom, rgba(255, 119, 0, 0.87), rgb(255, 255, 255)) !important;
    }
</style>
<section>
    <div class="gradient">
        <br>
        <!--Start-->
        <?php foreach ($pengumuman as $h): ?>
            <div class="container">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 mt-2">
                        <div class="pengumuman">
                            <h5 class="text-center bg-danger text-white"><b>PENGUMUMAN</b></h5>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row">
                    <div class="col-2">

                    </div>
                    <div class="col-8 mt-3" style="text-align: justify;">
                        <?= $h['content']; ?>
                    </div>
                    <div class="col-2">

                    </div>
                </div>
                <div class="row">
                    <div class="col-2">

                    </div>
                    <div class="col-4 text-truncate">
                        <br>
                        <p><b><?= $h['tgl']; ?></b> <br>
                            <a href="<?= $h['link']; ?>"><?= $h['link']; ?></a>
                        </p>
                    </div>
                    <div class="col-4">
                        <p style="text-align: right;"><?= $h['pj']; ?><br><span
                                style="text-align: center; font-size: small;">
                                <?= $h['cp']; ?></span></p>
                    </div>
                    <div class="col-2">

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!--end-->

        <br>
    </div>
</section>