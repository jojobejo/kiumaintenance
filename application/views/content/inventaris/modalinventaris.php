<div class="modal fade" id="addInventaris">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pembelian Inventaris Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('addinventaris'); ?>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Pic<span class="required">*</span></label>
                        <div class="col-sm-8">
                            <select class="form-control select2bs4" name="owner_isi" id="owner_isi">
                                <option value="&nbsp" selected></option>
                            </select>
                            <input class="form-control" type="text" id="kduser_isi" name="kduser_isi" value="" hidden readonly />
                            <input class="form-control" type="text" id="dep_isi" name="dep_isi" value="" hidden readonly />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Kode Inventaris<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="kd_isi" name="kd_isi" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Departement<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="kd_isi" name="kd_isi" value="" /></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Komputer<span class="required">*</span></label>
                        <div class="col-sm-8">
                            <select name="kat_isi" id="kat_isi" class="form-control">
                                <option value="PC">PROCESSOR</option>
                                <option value="RAM">RAM</option>
                                <option value="HARDISK">HARDISK</option>
                                <option value="POWERSUPPLY">POWERSUPPLY</option>
                                <option value="VGA">VGA</option>
                                <option value="PRINTER">PRINTER</option>
                                <option value="OTHER">OTHER</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Descripsi<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="nm_barang" name="nm_barang" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Tanggal Beli<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="nm_barang" name="nm_barang" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Harga Beli<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="date" id="tgl_pembelian" name="tgl_pembelian" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Status<span class="required">*</span></label>
                        <div class="col-sm-8">
                            <select name="kat_isi" id="kat_isi" class="form-control">
                                <option value="Aktif">Aktif</option>
                                <option value="Non Aktif">Non Aktif</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">History<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="date" id="tgl_pembelian" name="tgl_pembelian" value="" /></div>
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