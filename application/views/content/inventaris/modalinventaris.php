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
                        <label class="col-sm-3 control-label text-right" for="id_bar">Kode Inventaris<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="kd_isi" name="kd_isi" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Kode Inventaris<span class="required">*</span></label>
                        <div class="col-sm-8">
                            <select name="kat_isi" id="kat_isi" class="form-control">
                                <option value="PC">PC</option>
                                <option value="PRINTER">PRINTER</option>
                                <option value="OTHER">OTHER</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Owner<span class="required">*</span></label>
                        <div class="col-sm-8">
                            <select class="form-control select2bs4" name="owner_isi" id="owner_isi">
                                <option value="&nbsp" selected></option>
                            </select>
                            <input class="form-control" type="text" id="kduser_isi" name="kduser_isi" value="" readonly />
                            <input class="form-control" type="text" id="dep_isi" name="dep_isi" value="" readonly />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Nama Barang<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="nm_barang" name="nm_barang" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Deskripsi Pembelian<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="text" id="nm_barang" name="nm_barang" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Tanggal Pembelian<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="date" id="tgl_pembelian" name="tgl_pembelian" value="" /></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label text-right" for="id_bar">Nominal Pembelian<span class="required">*</span></label>
                        <div class="col-sm-8"><input class="form-control" type="number" id="hrg_pembelian" name="hrg_pembelian" value="" /></div>
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