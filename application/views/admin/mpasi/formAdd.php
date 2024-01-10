<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tambah Data MPASI Anak</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form <small> Tambah Data MPASI Anak</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                            method="post" action="<?php echo site_url('mpasi/save'); ?>">

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ID
                                    Pertumbuhan
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="select2_single form-control" name="id_pertumbuhan" tabindex="-1">
                                        <option></option>
                                        <?php foreach ($pertumbuhan as $valPertumbuhan) { ?>
                                            <option value="<?php echo $valPertumbuhan->id_pertumbuhan ?>">
                                                <?php echo $valPertumbuhan->id_pertumbuhan ?> -
                                                <?php echo $valPertumbuhan->nama ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>



                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Menu Utama
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="select2_group form-control" name="menu_utama">
                                        <option></option>
                                        <optgroup label="BU 6 - 8 Bulan">
                                            <option value="Bubur Singkong Isi Ikan dan Ayam dengan Saus Jeruk">Bubur
                                                Singkong Isi Ikan dan Ayam dengan Saus Jeruk</option>
                                            <option value="Bubur Soto Ayam Santan">Bubur Soto Ayam Santan</option>
                                            <option value="Bubur Sup Daging Kacang Merah">Bubur Sup Daging Kacang Merah
                                            </option>
                                            <option value="Bubur Kanju Rumbi Ayam dan Udang">Bubur Kanju Rumbi Ayam dan
                                                Udang</option>
                                        </optgroup>
                                        <optgroup label="BU 9 - 11 Bulan">
                                            <option value="Nasi Tim Ikan Tuna Telur Puyuh">Nasi Tim Ikan Tuna Telur
                                                Puyuh</option>
                                            <option value="Nasi Tim Ayam Lele Cincang">Nasi Tim Ayam Lele Cincang
                                            </option>
                                            <option value="Mie Kukus Telur Puyuh">Mie Kukus Telur Puyuh</option>
                                            <option value="Nasi Tim Ikan Telur Sayuran">Nasi Tim Ikan Telur Sayuran
                                            </option>
                                            <option value="Tim Bubur Manado Daging dan Udang">Tim Bubur Manado Daging
                                                dan Udang</option>
                                        </optgroup>
                                        <optgroup label="BU 12 - 23 Bulan">
                                            <option value="Nasi Sup Telur Puyuh Bola Tahu Ayam">Nasi Sup Telur Puyuh
                                                Bola Tahu Ayam</option>
                                            <option value="Nasi Soto Ayam Kuah Kuning">Nasi Soto Ayam Kuah Kuning
                                            </option>
                                            <option value="Sup Telur Puyuh Ikan Air Tawar Labu Kuning">Sup Telur Puyuh
                                                Ikan Air Tawar Labu Kuning</option>
                                            <option value="Nasi Ikan Kuah Kuning">Nasi Ikan Kuah Kuning</option>
                                        </optgroup>
                                        <optgroup label="U 2 - 5 Tahun">
                                            <option value="Nasi Bakar Ayam Santan">Nasi Bakar Ayam Santan</option>
                                            <option value="Nasi Sup Tabas Udang Sayur">Nasi Sup Tabas Udang Sayur
                                            </option>
                                            <option value="Nasi Masak Ayam Kecap Sayur">Nasi Masak Ayam Kecap Sayur
                                            </option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label for="middle-name"
                                    class="col-form-label col-md-3 col-sm-3 label-align">Selingan</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="select2_group form-control" name="buah">
                                        <option></option>
                                        <optgroup label="BU 6 - 8 Bulan">
                                            <option value="100 gr (3 buah kecil) jeruk manis diambil sarinya">100 gr (3
                                                buah kecil) jeruk manis diambil sarinya</option>
                                            <option value="50 gr (6 potong kecil) Pepaya">50 gr (6 potong kecil) Pepaya
                                            </option>
                                        </optgroup>
                                        <optgroup label="BU 9 - 11 Bulan">
                                            <option value="180 gr (1 potong besar) semangka">180 gr (1 potong besar)
                                                semangka</option>
                                            <option value="150 gr (6 potong kecil) Pepaya">150 gr (6 potong kecil)
                                                Pepaya </option>
                                            <option value="180 gr buah semangka">180 gr buah semangka</option>
                                            <option value="180 gr (1 potong) buah naga">180 gr (1 potong) buah naga
                                            </option>
                                        </optgroup>
                                        <optgroup label="BU 12 - 23 Bulan">
                                            <option value="135 gr (3 potong) Melon">135 gr (3 potong) Melon</option>
                                            <option value="150 gr (6 potong) pepaya">150 gr (6 potong) pepaya
                                            </option>
                                            <option value="270 gr semangka">270 gr semangka</option>
                                        </optgroup>
                                        <optgroup label="U 2 - 5 Tahun">
                                            <option value="300 gr buah pepaya">300 gr buah pepaya</option>
                                            <option value="540 gr Semangka">540 gr Semangka
                                            </option>
                                            <option value="300 gr (3 buah) Jeruk">300 gr (3 buah) Jeruk
                                            </option>
                                            <option value="300 gr buah Naga">300 gr buah Naga
                                            </option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a class="btn btn-primary" href="<?php echo site_url('ibu'); ?>">Cancel</a>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>