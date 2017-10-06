				<table class="table">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Nama</th>
				      <th>Username</th>
				      <th>Email</th>
				      <th>Password</th>
				      <th>Admin</th>
				      <th>Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	foreach($akun as $row) {
				  		echo '<tr id='.$row['id_akun'].'>';
				  		echo '<th scope="row">'.$row['id_akun'].'</th>';
				  		echo '<td>'.$row['nama'].'</td>';
				  		echo '<td>'.$row['username'].'</td>';
				  		echo '<td>'.$row['email'].'</td>';
				  		echo '<td>'.$row['password'].'</td>';
				  		if($row['admin'])
				  			echo '<td>'.'<i class="fa fa-check fa-fw text-success" aria-hidden="true"></i>'.'</td>';
				  		else 
				  			echo '<td>'.'<i class="fa fa-minus fa-fw text-faded" aria-hidden="true"></i>'.'</td>';
				  		echo '<td>'.'<button type="button" data-target="#deleteModalAkun" data-toggle="modal" data-target="#deleteModalAkun" data-id="'.$row['id_akun'].'" data-username="'.$row['username'].'" data-nama="'.$row['nama'].'" data-email="'.$row['email'].'" data-admin="'.$row['admin'].'"><i class="fa fa-trash fa-fw text-danger" aria-hidden="true"></i></button>'.'</td>';
				  		echo "</tr>";
				  	}
				  	?>
				  	<div class="modal fade" id="deleteModalAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					    <div class="modal-dialog" role="document">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					            <span aria-hidden="true">&times;</span>
					          </button>
					          <h4 class="modal-title" id="deleteLabel">Hapus akun</h4>
					        </div>
					        <div class="modal-body">
					          <form>
					          	<div class="form-group">
					              <label for="id-akun" class="form-control-label">Id:</label>
					              <input type="text" class="form-control" id="id-akun">
					            </div>
					            <div class="form-group">
					              <label for="nama" class="form-control-label">Nama:</label>
					              <input type="text" class="form-control" id="nama">
					            </div>
					            <div class="form-group">
					              <label for="username" class="form-control-label">Username:</label>
					              <input type="text" class="form-control" id="username"></textarea>
					            </div>
					            <div class="form-group">
					              <label for="email" class="form-control-label">Email:</label>
					              <input type="text" class="form-control" id="email">
					            </div>
					            <div class="form-group">
					              <label for="admin" class="form-control-label">Admin:</label>
					              <input type="text" class="form-control" id="admin">
					            </div>
					          </form>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					          <button type="button" id="submit_del_akun" class="btn btn-danger" data-dismiss="modal">Hapus</button>
					        </div>
					      </div>
					    </div>
			      </div>
				  </tbody>
				</table>
			</div>
		</div>
	</div>