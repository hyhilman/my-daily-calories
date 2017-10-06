 <script src="<?=base_url()?>js/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7"
 crossorigin="anonymous"></script>
 <script src="<?=base_url()?>js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8"
 crossorigin="anonymous"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="<?=base_url()?>js/bootstrap.js"></script>

<script type="text/javascript">
var id_akun;
var admin;

$('#deleteModalAkun').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var username = button.data('username'); // Extract info from data-* attributes
  var id_akun = button.data('id');
  var nama = button.data('nama');
  var admin = button.data('admin');
  var email = button.data('email');
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  modal.find('.modal-title').text('Hapus akun ' + username);
  modal.find('.modal-body #id-akun').val(id_akun);
  modal.find('.modal-body #nama').val(nama);
  modal.find('.modal-body #username').val(username);
  modal.find('.modal-body #email').val(email);
  if(admin)
  	modal.find('.modal-body #admin').val(admin);
  else 
  	modal.find('.modal-body #admin').val("bukan");
});

$('#submit_del_akun').click(function()
{
	$.ajax({
        url: '<?=base_url()?>c_admin/hapus_akun',
        type:'POST',
        data:
        {
            id_akun:  document.getElementById("id-akun").value,
            admin: document.getElementById("admin").value
        },
        success: function(msg)
        {
            alert('Akun terhapus');
            window.location.reload();
        }               
    });
});

var id_akun;
var admin;

$('#deleteModalMakanan').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var id_makanan = button.data('id');
  var nama = button.data('nama');
  var kaloripergram = button.data('kaloripergram');
  var jenis = button.data('jenis');
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  modal.find('.modal-title').text('Hapus makanan ' + nama);
  modal.find('.modal-body #id-makanan').val(id_makanan);
  modal.find('.modal-body #nama').val(nama);
  modal.find('.modal-body #kaloripergram').val(kaloripergram);
  modal.find('.modal-body #jenis').val(jenis);
});

$('#submit_del_mk').click(function()
{
  $.ajax({
        url: '<?=base_url()?>c_admin/hapus_makanan',
        type:'POST',
        data:
        {
            id_makanan:  document.getElementById("id-makanan").value
        },
        success: function(msg)
        {
            alert('Makanan terhapus');
            window.location.reload();
        }               
    });
});
</script>
</body>