<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Penimbangan</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row" style="display: block;">
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Daftar<small>Data Penimbangan Anak</small></h2>
                        <ul class="nav navbar-left panel_toolbox">
                            <button type="button" class="btn btn-success"><a href=<?php echo site_url('penimbangan/add'); ?>> +
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
                                        <th class="column-title">Nama Anak</th>
                                        <th class="column-title">Nama Petugas</th>
                                        <th class="column-title">Tanggal Penimbangan </th>
                                        <th class="column-title">Berat Badan (Kg)</th>
                                        <th class="column-title">Tinggi Badan (Cm)</th>
                                        <th class="column-title">Keterangan</th>
                                        <th class="column-title"><span class="nobr">Action</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1;
                                    foreach ($penimbangan as $valPenimbangan) { 
                                        foreach ($anak as $valAnak) { 
                                            foreach ($petugas as $valPetugas) {
                                                if ($valAnak->id_anak == $valPenimbangan->id_anak && $valPenimbangan->id_petugas == $valPetugas->id_petugas) {?>
                                                    <tr class="even pointer">
                                                    <td class=" ">
                                                        <?php echo $no; ?>
                                                    </td>
                                                    <td class=" ">
                                                        <?php echo $valAnak->nama; ?>
                                                    </td>
                                                    <td class=" ">
                                                        <?php echo $valPetugas->nama; ?>
                                                    </td>
                                                    <td class=" ">
                                                        <?php echo $valPenimbangan->tgl_penimbangan; ?>
                                                    </td>
                                                    <td class=" ">
                                                        <?php echo $valPenimbangan->berat_badan; ?> Kg
                                                    </td>
                                                    <td class=" ">
                                                        <?php echo $valPenimbangan->tinggi_badan; ?> Cm
                                                    </td>
                                                    <td class=" ">
                                                        <?php echo $valPenimbangan->deteksi; ?>
                                                    </td>
                                                    <td class=" last">
                                                        <button type="button" class="btn btn-warning">
                                                            <a href=<?php echo site_url('penimbangan/get_by_id/' . $valPenimbangan->id_penimbangan); ?>> Edit
                                                            </a></button>
                                                        <button type="button" class="btn btn-danger">
                                                            <a href=<?php echo site_url('penimbangan/delete/' . $valPenimbangan->id_penimbangan); ?>> Hapus
                                                            </a></button>
                                                    </td>
                                                </tr>
                                                <?php $no++;
                                                break;
                                                }
                                            }
                                        }
                                    }
                                    ; ?>
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