<?php 
$query = mysqli_query($koneksi, "select * from tb_user where nipy = '".$_SESSION['nipy']."'");
$sql = mysqli_fetch_array($query);
?>
<div class="row">
	<div class="col-md-12">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Setting Profile User</h3>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card-body">
						<form action="proses/update_user.php" method="post">
							<div class="form-group">
					            <label for="no">No Urut :</label>
					            <input type="text" class="form-control" id="no" name="no" value="<?= $sql['no']; ?>" readonly>
					          </div>
					          <div class="form-group">
					            <label for="nipy">NIPY :</label>
					            <input type="text" class="form-control" id="nipy" name="nipy" value="<?= $sql['nipy']; ?>" required>
					          </div>
					          <div class="form-group">
					            <label for="full_name">Full Name :</label>
					            <input type="text" class="form-control" id="full_name" name="full_name" value="<?= $sql['full_name']; ?>" required>
					          </div>
					          <input type="submit" class="form-control btn-primary" name="simpan" value="simpan Perubahan">
					    </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>