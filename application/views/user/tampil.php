<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta property="og:title" content="Hello, Diary" />
    <meta property="og:description" content="how do you feel today?" />
    <meta property="og:image"
        content="https://cdn.glitch.global/71e49bf7-c262-4705-b19f-2aeb98561be6/diary.jpg?v=1697470658204" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
    <title>E - Posyandu</title>

</head>

<body>
    <?php if (empty($pertumbuhan)): ?>
        <script>
            alert("ID tidak ditemukan. Anda akan diarahkan ke halaman login");
            window.location.href = "<?php echo site_url('user'); ?>";
        </script>
    <?php endif; ?>
    <div class="container">
        <!-- jumbotron -->
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">
                    <?php echo $pertumbuhan->nama; ?>
                </h1>
                <h6 style="color: grey;">ID Pertumbuhan /
                    <?php echo $pertumbuhan->id_pertumbuhan; ?>
                </h6>
                <div class="input-group mb-3" style="margin-top: 25px;">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Jenis Imunisasi
                    </label>
                    <input type="text" class="form-control" id="image-title" placeholder="Image title goes here"
                        aria-label="Image title" aria-describedby="basic-addon1"
                        value="<?php echo $pertumbuhan->imunisasi; ?>" disabled>
                </div>
                <div class="input-group mb-3">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Berat Badan
                    </label>
                    <input type="text" class="form-control" id="image-title" placeholder="Image title goes here"
                        aria-label="Image title" aria-describedby="basic-addon1"
                        value="<?php echo $pertumbuhan->berat_badan; ?> Kg" disabled>
                </div>
                <div class="input-group mb-3">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tinggi Badan
                    </label>
                    <input type="text" class="form-control" id="image-title" placeholder="Image title goes here"
                        aria-label="Image title" aria-describedby="basic-addon1"
                        value="<?php echo $pertumbuhan->tinggi_badan; ?> Cm" disabled>
                </div>
                <div class="input-group mb-3">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tanggal Imunisasi
                    </label>
                    <input type="text" class="form-control" id="image-title" placeholder="Image title goes here"
                        aria-label="Image title" aria-describedby="basic-addon1"
                        value="<?php echo $pertumbuhan->tgl_periksa; ?>" disabled>
                </div>
                <div class="input-group mb-3">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Keterangan
                    </label>
                    <input type="text" class="form-control" id="image-title" placeholder="Image title goes here"
                        aria-label="Image title" aria-describedby="basic-addon1"
                        value="<?php echo $pertumbuhan->keterangan; ?>" disabled>
                </div>
            </div>
            <div class="card">
                <h5 class="card-header">Rekomendasi MPASI </h5>
                <div class="card-body">
                    <?php
                    $mpasiExist = false;

                    foreach ($mpasi as $valMpasi) {
                        if ($valMpasi->id_pertumbuhan == $pertumbuhan->id_pertumbuhan) {
                            $mpasiExist = true;
                            ?>
                            <h5 class="card-title">
                                <?php echo $valMpasi->menu_utama; ?>
                            </h5>
                            <p class="card-text">Selingan :
                                <?php echo $valMpasi->snack; ?>
                            </p>
                        <?php }
                    }

                    if ($mpasiExist) { ?>
                        <a href="https://ayosehat.kemkes.go.id/pub/files/d8a32723535961f3f2a6e44f0f8ba915.pdf"
                            class="btn btn-primary" target="_blank">Unduh Resep</a>
                    <?php } ?>
                </div>

            </div>
            <button onclick="window.location.href='<?php echo site_url('user/logout'); ?>'"
                class="btn btn-danger btn-lg" style="margin-top: 25px;" type="button">LogOut</button>
            <!-- <button
                onclick="window.location.href='<?php echo site_url('user/mpasi/' . $pertumbuhan->id_pertumbuhan); ?>'"
                class="btn btn-primary btn-lg" type="button">MPASI</button> -->
        </div>

        <!-- card -->
        <div class="row justify-content-start" id="cards-box">
        </div>
    </div>
</body>

</html>