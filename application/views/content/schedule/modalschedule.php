    <div class="modal fade" id="addschedule">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Schedule</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('addschedule'); ?>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Tanggal<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="date" id="tgl" name="tgl" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Jam<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="time" id="jam" name="jam" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Instansi<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" id="instansi" name="instansi" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">PIC<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="texts" id="pic" name="pic" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Estimasi<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" id="estimasi" name="estimasi" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label text-right" for="id_bar">Tujuan<span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" id="tujuan" name="tujuan" />
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
    </div>