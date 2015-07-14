
<?php $this->load->view('admin/master_peta/daerah/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('master_peta/daerah/process/add/') ?>" method="POST">
                    <div class="form-group">
                        <label for="inpTingkat" class="col-lg-2 col-sm-2 control-label">Tingkat Daerah</label>
                        <div class="col-lg-4">
                            <select name="inpTingkat" class="form-control" >     
                                <?php
                                $no = 1;
                                foreach ($SIList_tingkat_daerah as $row) {
                                    echo "<option value=\"" . $row->list_item . "\">" . $row->list_item . "</option>";
                                    $no++;
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="prm_1 bx">
                        <div class="form-group">
                            <label for="inpKodeDaerah_prop" class="col-lg-2 col-sm-2 control-label">Kode Daerah</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="inpKodeDaerah_prop" name="inpKodeDaerah_prop" placeholder="Kode Daerah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inpNamaDaerah_prop" class="col-lg-2 col-sm-2 control-label">Nama Propinsi</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="inpNamaDaerah_prop" name="inpNamaDaerah_prop" placeholder="Nama Propinsi">
                            </div>
                        </div>
                    </div>
                    <div class="prm_2 bx">
                        <div class="form-group">
                            <label for="inpKodeDaerah_kab" class="col-lg-2 col-sm-2 control-label">Kode Daerah</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="inpKodeDaerah_kab" name="inpKodeDaerah_kab" placeholder="Kode Daerah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inpNamaDaerah_kab" class="col-lg-2 col-sm-2 control-label">Nama Kabupaten</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="inpNamaDaerah_kab" name="inpNamaDaerah_kab" placeholder="Nama Kabupaten">
                            </div>
                        </div>
                    </div>
                    <div class="prm_3 bx">
                        <div class="form-group">
                            <label for="inpKodeDaerah_kec" class="col-lg-2 col-sm-2 control-label">Kode Daerah</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="inpKodeDaerah_kec" name="inpKodeDaerah_kec" placeholder="Kode Daerah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inpNamaDaerah_kec" class="col-lg-2 col-sm-2 control-label">Nama Kecamatan</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="inpNamaDaerah_kec" name="inpNamaDaerah_kec" placeholder="Nama Kabupaten">
                            </div>
                        </div>
                    </div>
                    <div class="prm_4 bx">
                        <div class="form-group">
                            <label for="inpKodeDaerah_kel" class="col-lg-2 col-sm-2 control-label">Kode Daerah</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="inpKodeDaerah_kel" name="inpKodeDaerah_kel" placeholder="Kode Daerah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inpNamaDaerah_kel" class="col-lg-2 col-sm-2 control-label">Nama Kelurahan</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="inpNamaDaerah_kel" name="inpNamaDaerah_kel" placeholder="Nama Kelurahan">
                            </div>
                        </div>
                    </div>
                    <div class="prm_5 bx">
                        <div class="form-group">
                            <label for="inpKodeDaerah_des" class="col-lg-2 col-sm-2 control-label">Kode Daerah</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="inpKodeDaerah_des" name="inpKodeDaerah_des" placeholder="Kode Daerah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inpNamaDaerah_des" class="col-lg-2 col-sm-2 control-label">Nama Desa</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="inpNamaDaerah_des" name="inpNamaDaerah_des" placeholder="Nama Desa">
                            </div>
                        </div>   
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_add'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>