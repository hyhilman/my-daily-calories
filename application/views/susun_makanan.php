
<div class="bgimg-1 w3-display-container" >
	<div class="w3-display-middle w3-container w3-white w3-hover-black w3-hide-small"
	style="bottom:10%;opacity:0.8;width:70%">
	<h2><b>Hitung Susunan Komposisi Makanan</b></h2>
</div>
</div>


<div class="bgimg-3 w3-container w3-pale-green" style="height: 1000px">

   <div class="w3-row w3-padding-large">
        <div class="w3-third" style="padding: 0px 50px 50px 0px;">
            <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Susun Komposisi Makanan</span></div>
              <p>Susun komposisi makanan yang telah atau akan anda konsumsi untuk mengetahui informasi jumlah kalorinya</p>
              <br><br>
        </div>
        <div class="w3-twothird" style="width: 600px">
          <div class="w3-container w3-teal">
              <h3><i class="w3-margin-right w3-wide"></i>Hitung Susunan Komposisi Makanan</h3>
          </div>
          <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="">
          <center>
					<div class="w3-row">
						<?php 
						for($counter = 0; $counter < 10; $counter++){
							echo '<div class="w3-half" style="padding-top:0px">';
							echo '<p><select class="w3-select w3-border w3-white" style="width:300px" name="makanan_dipilih['.$counter.']">';
							echo '<option value="" disabled selected>Nama Makanan</option>'; 
							$tipe = null;
							foreach ($makanan as $row) {
								if($tipe != $row['jenis']) {
									$tipe = $row['jenis'];
									echo '</optgroup>';
									echo "<optgroup label=".$row['jenis'].">";
								}
								echo '<option value="'.$row['id_makanan'].'"';
									if(isset($data_makanan_dipilih[$counter]['id_makanan']) && $row['id_makanan'] == $data_makanan_dipilih[$counter]['id_makanan']) {
										echo ' selected';
									}
									echo '>'.$row['nama_makanan'].'</option>';
							}
							echo '</select></p>';
							echo '</div>';
							echo '<div class="w3-half">';
							if(isset($data_makanan_dipilih[$counter]['id_makanan'])) {
								echo '<p><input class="w3-input w3-border w3-white" name="berat_makanan['.$counter.']" type="number" placeholder="Berat Makanan(gr)" value="'. number_format($data_makanan_dipilih[$counter]['berat_makanan'],2) .'" style="width:180px"></p>';
							} else {
								echo '<p><input class="w3-input w3-border w3-white" name="berat_makanan['.$counter.']" type="number" placeholder="Berat Makanan(gr)" style="width:180px"></p>';
							}
							echo '</div>';
						}
						?>
					</div>
					<button type="submit" class="w3-btn w3-large w3-green" name="hitung" value="true">Hitung</button>
				</center>
			</form><br>
		</div>
	</div>
</div>

