<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Pertumbuhan</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row" style="display: block;">
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Daftar<small>Data Pertumbuhan Anak</small></h2>
                        <ul class="nav navbar-left panel_toolbox">
                            <button type="button" class="btn btn-success"><a href=<?php echo site_url('pertumbuhan/add'); ?>> +
                                    Tambah </a></button>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p> -->
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <!-- <th>
                                            <input type="checkbox" id="check-all" class="flat">
                                        </th> -->
                                        <th class="column-title">No </th>
                                        <th class="column-title">ID Pertumbuhan </th>
                                        <th class="column-title">Nama Anak</th>
                                        <th class="column-title">Jenis Imunisasi</th>
                                        <th class="column-title">Berat Badan (Kg)</th>
                                        <th class="column-title">Tinggi Badan (Cm)</th>
                                        <th class="column-title">Tanggal Periksa</th>
                                        <th class="column-title">Keterangan</th>
                                        <th class="column-title"><span class="nobr">Action</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1;
                                    foreach ($pertumbuhan as $valPertumbuhan) {
                                        // foreach ($anak as $valAnak) {
                                        //     foreach ($imunisasi as $valImunisasi) {
                                        //         foreach ($penimbangan as $valPenimbangan) {
                                                    // if ($valAnak->id_anak == $valImunisasi->id_anak && $valAnak->id_anak == $valPenimbangan->id_anak && $valPertumbuhan->id_anak == $valImunisasi->id_imunisasi && $valPertumbuhan->id_anak == $valPenimbangan->id_penimbangan) { ?>
                                                        <tr class="even pointer">
                                                            <td class=" ">
                                                                <?php echo $no; ?>
                                                            </td>
                                                            <td class=" ">
                                                                <?php echo $valPertumbuhan->id_pertumbuhan; ?>
                                                            </td>
                                                            <td class=" ">
                                                                <?php echo $valPertumbuhan->nama; ?>
                                                            </td>
                                                            <td class=" ">
                                                                <?php echo $valPertumbuhan->imunisasi; ?> 
                                                            </td>
                                                            <td class=" ">
                                                                <?php echo $valPertumbuhan->berat_badan; ?> Kg
                                                            </td>
                                                            <td class=" ">
                                                                <?php echo $valPertumbuhan->tinggi_badan; ?> Cm
                                                            </td>
                                                            <td class=" ">
                                                                <?php echo $valPertumbuhan->tgl_periksa; ?>
                                                            </td>
                                                            <td class=" ">
                                                                <?php echo $valPertumbuhan->keterangan; ?>
                                                            </td>
                                                            <td class=" last">
                                                                <button type="button" class="btn btn-danger">
                                                                    <a href=<?php echo site_url('pertumbuhan/delete/' . $valPertumbuhan->id_pertumbuhan); ?>> Hapus
                                                                    </a></button>
                                                            </td>
                                                        </tr>
                                                        <?php $no++;
                                    }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->