<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Data Anak</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form <small>Edit Data Anak</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" method="post" action="<?php echo site_url('anak/edit'); ?>"
                            data-parsley-validate class="form-horizontal form-label-left">
                            <input type="hidden" name="id" value="<?php echo $anak->id_anak; ?>" class="form-control"
                                id="inputEmail3" placeholder="Nama jenis">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align ">Nama Ibu <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select required="required" class="select2_single form-control" name="id_ibu" tabindex="-1">
                                        <option></option>
                                        <?php foreach ($ibu as $valIbu): ?>
                                            <option value="<?= $valIbu->id_ibu; ?>" <?php echo ($valIbu->id_ibu == $anak->id_ibu) ? 'selected' : ''; ?>>
                                                <?= $valIbu->nama; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama
                                    Anak
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input name="nama" value="<?php echo $anak->nama; ?>" type="text" id="first-name"
                                        required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input name="tgl_lahir" value="<?php echo $anak->tgl_lahir; ?>" id="birthday"
                                        class="date-picker form-control" placeholder="dd-mm-yyyy" type="text"
                                        required="required" type="text" onfocus="this.type='date'"
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
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                        <label
                                            class="btn btn-secondary <?php echo ($anak->jenis_kelamin == 'L') ? 'active' : ''; ?>"
                                            data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="jenis_kelamin" value="L" <?php echo ($anak->jenis_kelamin == 'L') ? 'checked' : ''; ?> class="join-btn">
                                            &nbsp;
                                            Laki-laki
                                            &nbsp;
                                        </label>
                                        <label
                                            class="btn btn-primary <?php echo ($anak->jenis_kelamin == 'P') ? 'active' : ''; ?>"
                                            data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="jenis_kelamin" value="P" <?php echo ($anak->jenis_kelamin == 'P') ? 'checked' : ''; ?> class="join-btn">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a class="btn btn-primary" href="<?php echo site_url('anak'); ?>">Cancel</a>
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