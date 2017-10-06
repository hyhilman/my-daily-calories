				<table class="table">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Nama</th>
				      <th>Jenis</th>
				      <th>Kalori per gram</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	foreach($makanan as $row) {
				  		echo '<tr id='.$row['id_makanan'].'>';
				  		echo '<th scope="row">'.$row['id_makanan'].'</th>';
				  		echo '<td>'.$row['nama_makanan'].'</td>';
				  		echo '<td>'.$row['jenis'].'</td>';
				  		echo '<td>'.$row['kaloripergram'].'</td>';
				  		echo '<td>'.'<button type="button" data-target="#deleteModalMakanan" data-toggle="modal" data-target="#deleteModalMakanan" data-jenis="'.$row['jenis'].'" data-id="'.$row['id_makanan'].'" data-nama="'.$row['nama_makanan'].'" data-kaloripergram="'.$row['kaloripergram'].'"><i class="fa fa-trash fa-fw text-danger" aria-hidden="true"></i></button>'.'</td>';
				  		echo "</tr>";
				  	}
				  	?>
				  	<div class="modal fade" id="deleteModalMakanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					    <div class="modal-dialog" role="document">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					            <span aria-hidden="true">&times;</span>
					          </button>
					          <h4 class="modal-title" id="deleteLabel">Hapus makanan</h4>
					        </div>
					        <div class="modal-body">
					          <form>
					          	<div class="form-group">
					              <label for="id-makanan" class="form-control-label">Id:</label>
					              <input type="text" class="form-control" id="id-makanan" disabled="disabled">
					            </div>
					            <div class="form-group">
					              <label for="nama" class="form-control-label">Nama:</label>
					              <input type="text" class="form-control" id="nama">
					            </div>
					            <div class="form-group">
					              <label for="jenis" class="form-control-label">Jenis:</label>
					              <input type="text" class="form-control" id="jenis"></textarea>
					            </div>
					            <div class="form-group">
					              <label for="kaloripergram" class="form-control-label">Kalori per gram:</label>
					              <input type="text" class="form-control" id="kaloripergram"></textarea>
					            </div>
					          </form>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					          <button type="button" id="submit_del_mk" class="btn btn-danger" data-dismiss="modal">Hapus</button>
					        </div>
					      </div>
					    </div>
			      </div>
				  </tbody>
				</table>
			</div>
		</div>
	</div>