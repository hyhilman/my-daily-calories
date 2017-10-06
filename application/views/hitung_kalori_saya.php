<!-- Image Header -->
<div class="bgimg-1 w3-display-container" >
  <div class="w3-display-middle w3-container w3-white w3-hover-black  w3-wide w3-animate-opacity"
    style="bottom:10%;opacity:0.9;width:70%">
    <h2 class="w3-center"><b>Hitung Kalori Saya</b></h2>
    <h3 class="w3-center "> My Daily Calories</h3>
  </div>
</div>



<!-- Form Hitung Kalori -->
  <div class="bgimg-3 w3-container" id="hitung" style="padding-top: 50px">
    <div class="w3-row">
      <div class="w3-half w3-card-2 w3-content" style="width:400px;margin-left: 100px">
          <div class="w3-container w3-teal">
              <h3><i class="w3-margin-right w3-wide"></i>HITUNG KALORI</h3>
          </div>
          <div class="w3-container w3-white w3-padding-16 ">
            <form class="w3-container">
                  <label class="w3-label w3-text-brown"><b>Berat Badan (kg)</b></label>
                  <input class="w3-input w3-border w3-white" required="required" name="bb" type="number" style="width:40%" value="<?php if(isset($_GET['bb'])) echo $_GET['bb'];?>"></p>
                  <p>      
                  <label class="w3-label w3-text-brown"><b>Tinggi Badan (cm)</b></label>
                  <input class="w3-input w3-border w3-white" name="tb" required="required" type="number" style="width:40%" value="<?php if(isset($_GET['tb'])) echo $_GET['tb'];?>"></p>
                  <p>    
                  <label class="w3-label w3-text-brown"><b>Usia (tahun)</b></label>
                  <input class="w3-input w3-border w3-white" name="usia" required="required" type="number" style="width:40%" value="<?php if(isset($_GET['usia'])) echo $_GET['usia'];?>"></p>
                  <p>      
                  <label class="w3-label w3-text-brown"><b>Jenis Kelamin</b></label><br>
                  <select class="w3-select w3-border w3-white" name="jk" required="required" style="width:40%">
                    <option value="" disabled selected>Pilihan Anda</option>
                    <option value="pria" <?php if(isset($_GET['jk']) && $_GET['jk']=='pria') echo 'selected';?> >Pria</option>
                    <option value="wanita" <?php if(isset($_GET['jk']) && $_GET['jk']=='wanita') echo 'selected';?>>Wanita</option>
                  </select>
                  <p>
                  <label class="w3-label w3-text-brown"><b>Tingkat Aktivitas</b></label><br>
                  <select class="w3-select w3-border  w3-white" name="aktifitas" required="required" style="width:40%" value="<?=$_GET['aktifitas'];?>">
                    <option value="" disabled selected>Pilihan Anda</option>
                    <option value="ringan" <?php if(isset($_GET['aktifitas']) && $_GET['aktifitas']=='ringan') echo 'selected';?>>Ringan</option>
                    <option value="sedang" <?php if(isset($_GET['aktifitas']) && $_GET['aktifitas']=='sedang') echo 'selected';?>>Sedang</option>
                    <option value="berat" <?php if(isset($_GET['aktifitas']) && $_GET['aktifitas']=='berat') echo 'selected';?>>Berat</option>
                  </select>
                  </p>
                  <button class="w3-btn w3-teal" name="hitung" value="true">Hitung Kalori</button>
                  </p>
                  </div>
                </form>
        </div>

