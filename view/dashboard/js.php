    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../assets/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../assets/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../assets/plugins/scrollreveal/scrollreveal.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../assets/plugins/node-waves/waves.js"></script>

    <!-- Select Plugin Js -->
    <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="../assets/js/pages/examples/sign-in.js"></script>
    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
    
<script>
        jQuery(document).ready(function($){
            $('.delete-link').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: "PERHATIAN !",
                        text: "Anda yakin akan menghapus data ?",
                        type: "warning",
                        html: true,
                        confirmButtonColor: '#DD6B55',
                        confirmButtonText: 'Hapus',
                        showCancelButton: true,
                        cancelButtonText: 'Jangan',
                        closeOnConfirm: true
                        },function(){
                        swal("Deleted!", "Your imaginary file has been deleted!", "success");
                        window.location.href = getLink
                    })
                return false;
            });
        });
</script>
<script type="text/javascript"> 
  $(document).ready(function(){
    var counter = 2;
    $("#add").click(function () {
    if(counter>15){
            alert("Sudah 15 ");
            return false;
    }   
 
    var newTextBoxDiv = $(document.createElement('div'))
         .attr("id", 'addMore' + counter);
    newTextBoxDiv.after().html('<div class="col-sm-3"><select name="id_produk" class="form-control show-tick" "data-live-search="true"></select></div><div class="col-sm-3"><select name="id_bahan_baku" class="form-control show-tick" " data-live-search="true"></select></div><div class="col-sm-3"><div class="input-group"><span class="input-group-addon"><i class="material-icons">dns</i></span><div class="form-line"><input type="text" name="komposisi" class="form-control" placeholder="Komposisi" required></div></div></div><div class="col-sm-2"><div class="input-group"><span class="input-group-addon"><i class="material-icons">bookmark</i></span><div class="form-line"><input type="text" name="status" class="form-control" placeholder="Status" required></div></div></div>');
    newTextBoxDiv.appendTo("#addMoreAgain"); 
    counter++;
     });
 
     $("#min").click(function () {
    if(counter==2){
            swal("Perhatian!", "Tidak ada yang dihapus", "warning");
       }   
    counter--;
         $("#addMore" + counter).remove();
      });
  });
</script>
<script>
        jQuery(document).ready(function($){
            $('.lanjut-link').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: "PERHATIAN !",
                        text: "Pelanggan sudah membayar ?",
                        type: "warning",
                        html: true,
                        confirmButtonColor: '#03A9F4',
                        confirmButtonText: 'Ya',
                        showCancelButton: true,
                        cancelButtonText: 'Belum',
                        closeOnConfirm: true
                        },function(){
                        swal("Deleted!", "Your imaginary file has been deleted!", "success");
                        window.location.href = getLink
                    })
                return false;
            });
        });
    </script>