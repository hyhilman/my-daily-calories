				<form class="p-1" method="post">
					<div class="text-xs-center display-4 font-weight-bold">Buat Akun</div>
					<div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control" id="nama" aria-describedby="nama" placeholder="Enter name" name="nama" required="required">
				  	</div>
					<div class="form-group">
					<div class="form-group">
				    <label for="username">Username</label>
				    <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="Enter username" name="username" required="required">
				  	</div>
					<div class="form-group">
						<label for="email">Email address</label>
						<input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email" name="email" required="required">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required="required">
						<input type="password" class="form-control" id="password_confirm" placeholder="Password confirmation" name="password_confirm" required="required">
					</div>
					<div class="form-group">
				    <label for="level">Level</label>
				    <select class="form-control" id="level" name="admin" required="required">
				      <option value="false">Member</option>
				      <option value="true">Admin</option>
				    </select>
				  </div>
			  	<button type="submit" class="btn btn-primary" name="submit" value="true">Submit</button>
			  </form>
			</div>
		</div>
	</div>
	</div>