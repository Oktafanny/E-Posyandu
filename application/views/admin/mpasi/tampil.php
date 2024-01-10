<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data MPASI</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row" style="display: block;">
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Daftar<small>Data Makanan Pendamping Asi</small></h2>
                        <ul class="nav navbar-left panel_toolbox">
                            <button type="button" class="btn btn-success"><a href=<?php echo site_url('mpasi/add'); ?>> +
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
                                        <!-- <th class="column-title">ID MPASI</th> -->
                                        <th class="column-title">ID Pertumbuhan</th>
                                        <th class="column-title">Nama Anak</th>
                                        <th class="column-title">Menu Utama</th>
                                        <th class="column-title">Selingan </th>
                                        <th class="column-title"><span class="nobr">Action</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1;
                                    foreach ($mpasi as $valMpasi) {
                                        foreach ($pertumbuhan as $valPertumbuhan) {
                                            if ($valMpasi->id_pertumbuhan == $valPertumbuhan->id_pertumbuhan) { ?>
                                                <tr class="even pointer">
                                                    <td class=" ">
                                                        <?php echo $no; ?>
                                                    </td>
                                                    <!-- <td class=" ">
                                                        <?php echo $valMpasi->id_mpasi; ?>
                                                    </td> -->
                                                    <td class=" ">
                                                        <?php echo $valMpasi->id_pertumbuhan; ?>
                                                    </td>
                                                    <td class=" ">
                                                        <?php echo $valPertumbuhan->nama; ?>
                                                    </td>
                                                    <td class=" ">
                                                        <?php echo $valMpasi->menu_utama; ?>
                                                    </td>
                                                    <td class=" ">
                                                        <?php echo $valMpasi->snack; ?>
                                                    </td>
                                                    <td class=" last">
                                                        <button type="button" class="btn btn-warning">
                                                            <a href=<?php echo site_url('mpasi/get_by_id/' . $valMpasi->id_mpasi); ?>>
                                                                Edit
                                                            </a></button>
                                                        <button type="button" class="btn btn-danger">
                                                            <a href=<?php echo site_url('mpasi/delete/' . $valMpasi->id_mpasi); ?>> Hapus
                                                            </a></button>
                                                    </td>
                                                </tr>
                                                <?php $no++;
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