<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Data Pertumbuhan</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form <small>Edit Data Pertumbuhan Anak</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" method="post" action="<?php echo site_url('pertumbuhan/edit'); ?>"
                            data-parsley-validate class="form-horizontal form-label-left">
                            <input type="hidden" name="id" value="<?php echo $pertumbuhan->id_pertumbuhan; ?>"
                                class="form-control" id="inputEmail3" placeholder="Nama jenis">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align ">Nama Anak <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select required="required" class="select2_single form-control" name="id_anak"
                                        tabindex="-1" readonly>
                                        <option></option>
                                        <?php foreach ($anak as $valAnak): ?>
                                            <option value="<?= $valAnak->id_anak; ?>" <?php echo ($valAnak->id_anak == $pertumbuhan->id_anak) ? 'selected' : ''; ?>>
                                                <?= $valAnak->nama; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Periksa<span
                                        class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input name="tgl_periksa" value="<?php echo $pertumbuhan->tgl_periksa; ?>"
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
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="keterangan">Keterangan
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea id="message" required="required" class="form-control" name="keterangan"
                                        data-parsley-trigger="keyup" data-parsley-minlength="20"
                                        data-parsley-maxlength="100"
                                        data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                        data-parsley-validation-threshold="10"><?php echo $pertumbuhan->keterangan; ?></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a class="btn btn-primary" href="<?php echo site_url('pertumbuhan'); ?>">Cancel</a>
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