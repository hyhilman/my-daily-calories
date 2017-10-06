<div class="bgimg-3 w3-container w3-pale-green" id="contact" style="height: 1000px;padding-top: 50px;">
  <div class="w3-container w3-teal">
      <h3><i class="w3-margin-right w3-wide"></i>Hasil Susunan Komposisi Makanan</h3>
  </div>
  <div class="w3-row">
  </div>
  <div class="w3-row w3-container w3-card-4 w3-white">
    <center>
      <p>Karbohidrat </p>
      <div class="w3-col" style="width:18%;height:50px;margin-right: 10px">
          <p> Nama Makanan </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
          <p> Berat Makanan (gr) </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
          <p> Kalori/Gram </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
          <p> Total Kalori </p>
      </div>
      <div class="w3-col" style="width:18%;margin-right: 10px">
        <p>
        <?php if(isset($saran_tukar_komposisi)): ?>
         Tukar Makanan 
        <?php endif;?>
        <span>&nbsp;</span>
        </p>
      </div>  
    </center>

  <!-- ISI HASIL  --> 
  <?php 
  $karbo = 0;$counter=0; 
  foreach ($data_makanan_dipilih as $row) :
    if(isset($row) && $row['jenis']=='karbohidrat'):
  ?>
      <div class="w3-col w3-container w3-pale-green" style="width:18%;height:50px;margin-right: 10px">
          <p> <?=($row['nama_makanan'])?> </p>
      </div>
      <div class="w3-col w3-container w3-pale-green" style="width:18%;height: 50px;margin-right: 10px">
          <p> <?=number_format($row['berat_makanan'],2)?> gram</p>
      </div>
      <div class="w3-col w3-container w3-pale-green" style="width:18%;height: 50px;margin-right: 10px">
          <p> <?=($row['kaloripergram'])?> kgram</p>
      </div>
      <div class="w3-col w3-container w3-pale-green" style="width:18%;height: 50px;margin-right: 10px">
          <p> <?=number_format($row['total_kalori'],2)?> gram</p>
      </div>
      <div class="w3-col " style="width:18%">
      <?php if(isset($saran_tukar_komposisi)):?>
        <select class="w3-select w3-border  w3-green" style="height:50px">
          <option value="" disabled selected>Tukar Makanan</option>
          <?php
            foreach ($saran_tukar_komposisi[$counter] as $value) {
              echo "<option>".$value['nama_makanan']." ".number_format(($value['berat_makanan']),2)." gram</option>";
            }
            
          ?>
        </select>
      <?php else:?>
        <span>&nbsp;</span>
      <?php endif;?>
      </div>  
    <?php 
    $karbo += $row['total_kalori'];
    endif;
    $counter++;
    endforeach; 
    ?>
    </div>
    <div class="w3-row w3-container w3-card-4 w3-white" style="padding-bottom: 50px; box-shadow:none;">
      <div class="w3-col" style="width:18%;height:50px;margin-right: 10px">
      <p>
        Kebutuhan karbohidrat
      </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
      <p>
        <?=number_format($_COOKIE['mdc_karbo'],2)?>
      </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
        <p> Total kalori</p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px; 
      <?php 
      if($karbo/$_COOKIE['mdc_karbo']<.8)
        echo "background-color: yellow;"; 
      elseif($karbo/$_COOKIE['mdc_karbo'] > 1.1) 
        echo "background-color: red;"; 
      ?>">
        <p> <?=number_format($karbo,2)?> gram</p>
      </div>
  </div>
  <div class="w3-row w3-container w3-card-4 w3-white">
    <center>
      <p>Protein </p>
      <div class="w3-col" style="width:18%;height:50px;margin-right: 10px">
          <p> Nama Makanan </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
          <p> Berat Makanan (gr) </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
          <p> Kalori/Gram </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
          <p> Total Kalori </p>
      </div>
      <div class="w3-col" style="width:18%;margin-right: 10px">
        <p>
        <?php if(isset($saran_tukar_komposisi)): ?>
         Tukar Makanan 
        <?php endif;?>
        <span>&nbsp;</span>
        </p>
      </div>  
    </center>

  <!-- ISI HASIL  --> 
  <?php 
  $protein = 0; $counter=0; 
  foreach ($data_makanan_dipilih as $row) :
    if(isset($row) && $row['jenis']=='protein'):
  ?>
      <div class="w3-col w3-container w3-pale-green" style="width:18%;height:50px;margin-right: 10px">
          <p> <?=($row['nama_makanan'])?> </p>
      </div>
      <div class="w3-col w3-container w3-pale-green" style="width:18%;height: 50px;margin-right: 10px">
          <p> <?=number_format($row['berat_makanan'],2)?> gram</p>
      </div>
      <div class="w3-col w3-container w3-pale-green" style="width:18%;height: 50px;margin-right: 10px">
          <p> <?=($row['kaloripergram'])?> kgram</p>
      </div>
      <div class="w3-col w3-container w3-pale-green" style="width:18%;height: 50px;margin-right: 10px">
          <p> <?=number_format($row['total_kalori'],2)?> gram</p>
      </div>
      <div class="w3-col " style="width:18%">
      <?php if(isset($saran_tukar_komposisi)):?>
        <select class="w3-select w3-border  w3-green" style="height:50px">
          <option value="" disabled selected>Tukar Makanan</option>
          <?php
            foreach ($saran_tukar_komposisi[$counter] as $value) {
              echo "<option>".$value['nama_makanan']." ".number_format(($value['berat_makanan']),2)." gram</option>";
            }
            
          ?>
        </select>
      <?php else:?>
        <span>&nbsp; </span>
      <?php endif;?>
      </div>  
    <?php 
    $protein += $row['total_kalori'];
    endif;
    $counter++;
    endforeach; 
    ?>
    </div>
    <div class="w3-row w3-container w3-card-4 w3-white" style="padding-bottom: 50px; box-shadow:none;">
      <div class="w3-col" style="width:18%;height:50px;margin-right: 10px">
      <p>
        Kebutuhan protein
      </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
      <p>
        <?=number_format($_COOKIE['mdc_protein'],2)?>
      </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
        <p> Total kalori</p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px; 
      <?php 
      if($protein/$_COOKIE['mdc_protein']<.8)
        echo "background-color: yellow;"; 
      elseif($protein/$_COOKIE['mdc_protein'] > 1.1) 
        echo "background-color: red;" 
      ?>">
      <p> <?=number_format($protein,2)?> gram</p>
      </div>
  </div>
  <div class="w3-row w3-container w3-card-4 w3-white">
    <center>
      <p>Lemak </p>
      <div class="w3-col" style="width:18%;height:50px;margin-right: 10px">
          <p> Nama Makanan </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
          <p> Berat Makanan (gr) </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
          <p> Kalori/Gram </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
          <p> Total Kalori </p>
      </div>
      <div class="w3-col" style="width:18%;margin-right: 10px">
        <p>
        <?php if(isset($saran_tukar_komposisi)): ?>
         Tukar Makanan 
        <?php endif;?>
        <span>&nbsp;</span>
        </p>
      </div>  
    </center>

  <!-- ISI HASIL  --> 
  <?php 
  $lemak = 0;$counter=0; 
  foreach ($data_makanan_dipilih as $row) :
    if(isset($row) && $row['jenis']=='lemak'):
  ?>
      <div class="w3-col w3-container w3-pale-green" style="width:18%;height:50px;margin-right: 10px">
          <p> <?=($row['nama_makanan'])?> </p>
      </div>
      <div class="w3-col w3-container w3-pale-green" style="width:18%;height: 50px;margin-right: 10px">
          <p> <?=number_format($row['berat_makanan'],2)?> gram</p>
      </div>
      <div class="w3-col w3-container w3-pale-green" style="width:18%;height: 50px;margin-right: 10px">
          <p> <?=($row['kaloripergram'])?> kgram</p>
      </div>
      <div class="w3-col w3-container w3-pale-green" style="width:18%;height: 50px;margin-right: 10px">
          <p> <?=number_format($row['total_kalori'],2)?> gram</p>
      </div>
      <div class="w3-col " style="width:18%">
      <?php if(isset($saran_tukar_komposisi)):?>
        <select class="w3-select w3-border  w3-green" style="height:50px">
          <option value="" disabled selected>Tukar Makanan</option>
          <?php
            foreach ($saran_tukar_komposisi[$counter] as $value) {
              echo "<option>".$value['nama_makanan']." ".number_format(($value['berat_makanan']),2)." gram</option>";
            }
            
          ?>
        </select>
      <?php else:?>
        <span>&nbsp;</span>
      <?php endif;?>
      </div>  
    <?php 
    $lemak += $row['total_kalori'];
    endif;
    $counter++;
    endforeach; 
    ?>
    </div>
    <div class="w3-row w3-container w3-card-4 w3-white" style="padding-bottom: 50px; box-shadow:none;">
      <div class="w3-col" style="width:18%;height:50px;margin-right: 10px">
      <p>
        Kebutuhan lemak
      </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
      <p>
        <?=number_format($_COOKIE['mdc_lemak'],2)?>
      </p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px">
        <p> Total kalori</p>
      </div>
      <div class="w3-col" style="width:18%;height: 50px;margin-right: 10px; 
      <?php 
      if($lemak/$_COOKIE['mdc_lemak']<.8)
        echo "background-color: yellow;"; 
      elseif($lemak/$_COOKIE['mdc_lemak'] > 1.1) 
        echo "background-color: red;" 
      ?>">
      <p> <?=number_format($lemak,2)?> gram</p>
      </div>
  </div>
</div>