<div class="modal fade" id="addInventaris">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Laporan Distribusi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('add_lap_distribusi_hrd'); ?>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Nopol<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="nopol" name="nopol" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">No Lambung<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="nolambung" name="nolambung" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Nama Driver<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="nm_driver" name="nm_driver" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Nama Helper<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="nm_helper" name="nm_helper" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Tujuan<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="tujuan" name="tujuan" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Tanggal Keluar<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="date" id="tgl_keluar" name="tgl_keluar" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Jam Keluar<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="jm_keluar" name="jm_keluar" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Km Keluar<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="number" id="km_keluar" name="km_keluar" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Tgl Masuk<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="date" id="tgl_masuk" name="tgl_masuk" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Jam Masuk<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="jm_masuk" name="jm_masuk" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Km Masuk<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="number" id="km_masuk" name="km_masuk" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Keterangan<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="keterangan" name="keterangan" value="" /></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- MODAL EDIT -->
<?php foreach ($laporan as $l) : ?>
    <div class="modal fade" id="editlap<?= $l->id ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Laporan Distribusi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('edit_lap_distribusi_hrd'); ?>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Nopol<span class="required">*</span></label>
                            <div class="col-sm-8"><input class="form-control" type="text" id="nopol" name="nopol" value="<?= $l->nopol ?>" />
                                <input class="form-control" type="text" id="id_isi" name="id_isi" value="<?= $l->id ?>" hidden />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">No Lambung<span class="required">*</span></label>
                            <div class="col-sm-8"><input class="form-control" type="text" id="nolambung" name="nolambung" value="<?= $l->nolambung ?>" /></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Nama Driver<span class="required">*</span></label>
                            <div class="col-sm-8"><input class="form-control" type="text" id="nm_driver" name="nm_driver" value="<?= $l->namadriver ?>" /></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Nama Helper<span class="required">*</span></label>
                            <div class="col-sm-8"><input class="form-control" type="text" id="nm_helper" name="nm_helper" value="<?= $l->namahelper ?>" /></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Tujuan<span class="required">*</span></label>
                            <div class="col-sm-8"><input class="form-control" type="text" id="tujuan" name="tujuan" value="<?= $l->tujuan ?>" /></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Tanggal Keluar<span class="required">*</span></label>
                            <div class="col-sm-8"><input class="form-control" type="date" id="tgl_keluar" name="tgl_keluar" value="<?= $l->tglkeluar ?>" /></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Jam Keluar<span class="required">*</span></label>
                            <div class="col-sm-8"><input class="form-control" type="text" id="jm_keluar" name="jm_keluar" value="<?= $l->jamkeluar ?>" /></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Km Keluar<span class="required">*</span></label>
                            <div class="col-sm-8"><input class="form-control" type="number" id="km_keluar" name="km_keluar" value="<?= $l->kmkeluar ?>" /></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Tgl Masuk<span class="required">*</span></label>
                            <div class="col-sm-8"><input class="form-control" type="date" id="tgl_masuk" name="tgl_masuk" value="<?= $l->tglmasuk ?>" /></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Jam Masuk<span class="required">*</span></label>
                            <div class="col-sm-8"><input class="form-control" type="text" id="jm_masuk" name="jm_masuk" value="<?= $l->jammasuk ?>" /></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Km Masuk<span class="required">*</span></label>
                            <div class="col-sm-8"><input class="form-control" type="number" id="km_masuk" name="km_masuk" value="<?= $l->kmmasuk ?>" /></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Keterangan<span class="required">*</span></label>
                            <div class="col-sm-8"><input class="form-control" type="text" id="keterangan" name="keterangan" value="<?= $l->keterangan ?>" /></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach; ?>
<!-- MODAL HAPUS -->
<?php foreach ($laporan as $l) : ?>
    <div class="modal fade" id="hapuslap<?= $l->id ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Apakah Anda </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('hapus_lap_distribusi_hrd'); ?>
                    <h3>DATA YANG TERHAPUS AKAN HILANG PERMANEN</h3>
                    <div class="form-group" hidden>
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Nopol<span class="required">*</span></label>
                            <input class="form-control" type="text" id="id_isi" name="id_isi" value="<?= $l->id ?>" hidden />
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach; ?>