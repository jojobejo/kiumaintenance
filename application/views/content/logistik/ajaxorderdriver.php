<script type="text/javascript">
    $(document).ready(function() {
        var i = 1;

        $('#add').click(function() {
            i++;
            $('#driveroption').append('<div id="row'+i+'"><div class="row"><div class="col-sm-2"><label for="noInv" class="">Nama Driver</label><input type="text" id="nm_driver_i[]" name="nm_driver_i[]" value="" class="form-control"></div><div class="col-sm-1"><label for="noInv" class="">Kode Truk</label><input type="text" id="kd_truk_i[]" name="kd_truk_i[]" value="" class="form-control"></div><div class="col-sm-4"><label for="noInv" class="">Destinasi Kota</label><input type="text" id="destinsasi_i[]" name="destinsasi_i[]" value="" class="form-control"></div><div class="col-sm-4"><label for="noInv" class="">Nama Toko</label><input type="text" id="nm_toko_i[]" name="nm_toko_i[]" value="" class="form-control"></div><div class="col-sm-1"><label for="noInv" class=""></label><br><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove m-2"><i class="fas fa-ban"></i></button></div></div>');
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            var res = confirm('Apakah akan menghapus field ini ? ');
            if (res == true) {
                $('#row' + button_id + '').remove();
                $('#' + button_id + '').remove();
            }
        });

    });
</script>