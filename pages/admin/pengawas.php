<div class="row">
	<div class="col-md-12">
		<div class="card-body">
			<table id="example1" class="table table-bordered table-striped">
		      <thead class="bg-primary">
		      <tr>
		        <th>No</th>
		        <th>NIPY</th>
		        <th>Nipy Pengawas</th>
		        <th>Full Name</th>
		      </tr>
		      </thead>
		      <tbody>
		      <?php
		      $no=1;
		      $query = mysqli_query($koneksi, "select * from tb_user");
		      while ($sql = mysqli_fetch_array($query)) { 
		        ?>
		        <tr>
		            <td><?= $no++; ?></td>
		          <td><?= $sql['no']; ?></td>
		          <td><?= $sql['nipy']; ?></td>
		          <td><?= $sql['full_name'];?></td>
		        </tr>
		      <?php }
		      ?>
		      </tbody>
		      <tfoot>
		      <tr>
		        <th>No</th>
		        <th>NIPY</th>
		        <th>Nipy Pengawas</th>
		        <th>Full Name</th>
		      </tr>
		      </tfoot>
		    </table>
		</div>
	</div>
</div>