<script>
function myFunction() {
    alert("Maaf, Anda Harus Login Terlebih Dahulu!");
}
</script>

<!-- Modal Login -->
<div id="masuk" class="w3-modal">
	<div class="w3-modal-content w3-card-8 w3-animate-top" style="max-width:400px">
		<div class="w3-center"><br>
			<span onclick="document.getElementById('masuk').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">×</span>  
			<img src="img_avatar4.png" alt="Logo" style="width:30%" class="w3-circle w3-margin-top">
			<h4> MASUK </h4>
		</div>

		<form class="w3-container" action="form.asp">
			<div class="w3-section">
				<label><b>Username</b></label>
				<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Masukkan Username" name="usrname" required>
				<label><b>Password</b></label>
				<input class="w3-input w3-border" type="text" placeholder="Masukkan Password" name="psw" required>
				<button class="w3-btn-block w3-green w3-section w3-padding" type="submit">Masuk</button>
				<span class="w3-right w3-padding w3-hide-small"><a href="#">Lupa password?</a></span>
				<input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Ingat Saya
			</div>
		</form>
	</div>
</div>

  <!-- Saran Komposisi -->
  <div class="w3-teal w3-container w3-center" id="saran" style="height:250px">
      <div class=" w3-content w3-teal" style="padding-right: 30px;margin-top:20px;padding-bottom: 10px; width: 700px">
            <h2 class="w3-bottombar"> SARAN KOMPOSISI MAKANAN </h2> 
            <p>Dapatkan susunan komposisi makanan yang disarankan untuk anda konsumsi dan ketahui informasi jumlah kalorinya. Anda harus menghitung kebutuhan kalori terlebih dahulu untuk mendapatkan saran komposisi.</p>
            
            <button type="submit" class="w3-btn w3-green w3-large"><a onclick="myFunction()">Saran Komposisi</button>
      </div>
  </div>
