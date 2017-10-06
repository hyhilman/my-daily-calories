
</div>
</div>

<!-- Saran Komposisi -->
<div class="w3-teal w3-container w3-center" style="height:250px">
    <div class=" w3-content w3-teal" style="padding-right: 30px;margin-top:20px;padding-bottom: 10px; width: 700px">
        <h2 class="w3-bottombar"> SARAN KOMPOSISI MAKANAN </h2> 
        <p>Dapatkan susunan komposisi makanan yang disarankan untuk anda konsumsi dan ketahui informasi jumlah kalorinya. Anda harus menghitung kebutuhan kalori dan masuk sistem terlebih dahulu untuk mendapatkan saran komposisi.</p>

		<?php if(!isset($_SESSION['username']) ):
			echo '<form action="'.base_url().'c_akun/masuk_sistem">';
			echo '<button type="submit" class="w3-btn w3-green w3-large" >Login</button>'; ?>
		<?php  else: ?>

		<?php 

		echo '<form action="'.base_url().'/c_member/saran_makanan" method="post">';
		echo '<button type="submit" class="w3-btn w3-green w3-large">Saran Makanan</button>';

		endif; 
		echo '</form>'
		?>
	</div>
</div>