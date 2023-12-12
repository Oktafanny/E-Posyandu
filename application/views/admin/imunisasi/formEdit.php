<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Data Imunisasi</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form <small>Edit Data Imunisasi Anak</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" method="post" action="<?php echo site_url('imunisasi/edit'); ?>"
                            data-parsley-validate class="form-horizontal form-label-left">
                            <input type="hidden" name="id" value="<?php echo $imunisasi->id_imunisasi; ?>"
                                class="form-control" id="inputEmail3" placeholder="Nama jenis">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align ">Nama Anak <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select required="required" class="select2_single form-control" name="id_anak" tabindex="-1">
                                        <option></option>
                                        <?php foreach ($anak as $valAnak): ?>
                                            <option value="<?= $valAnak->id_anak; ?>" <?php echo ($valAnak->id_anak == $imunisasi->id_anak) ? 'selected' : ''; ?>>
                                                <?= $valAnak->nama; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align ">Nama Petugas <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select required="required" class="select2_single form-control" name="id_petugas" tabindex="-1">
                                        <option></option>
                                        <?php foreach ($petugas as $valPetugas): ?>
                                            <option value="<?= $valPetugas->id_petugas; ?>" <?php echo ($valPetugas->id_petugas == $imunisasi->id_petugas) ? 'selected' : ''; ?>>
                                                <?= $valPetugas->nama; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Imunisasi<span
                                        class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input name="tgl_imunisasi" value="<?php echo $imunisasi->tgl_imunisasi; ?>"
                                        id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy"
                                        type="text" required="required" type="text" onfocus="this.type='date'"
                                        onmouseover="this.type='date'" onclick="this.type='date'"
                                        onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                    <script>
                                        function timeFunctionLong(input) {
                                            setTimeout(function () {
                                                input.type = 'text';
                                            }, 60000);
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="berat_badan">Jenis Imunisasi
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input name="imunisasi" value="<?php echo $imunisasi->imunisasi; ?>"
                                        type="text" id="imunisasi" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="keterangan">Keterangan
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea id="message" required="required" class="form-control" name="deteksi"
                                        data-parsley-trigger="keyup" data-parsley-minlength="20"
                                        data-parsley-maxlength="100"
                                        data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                        data-parsley-validation-threshold="10"><?php echo $imunisasi->deteksi; ?></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a class="btn btn-primary" href="<?php echo site_url('imunisasi'); ?>">Cancel</a>
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