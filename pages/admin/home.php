<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body bg-light">
			    <div class="row">
			        <div class="col-md-6">
    					<form action="" method="GET">
    						<div class="input-group">
    						    <label for="tgl" class="form-control bg-blue">Pilih Tanggal :</label>
    							<input type="date" name="tgl" class="form-control">
    							<button type="submit" class="btn btn-light"><i class="fas fa-search"></i></button>
    						</div>
    					</form>		
    				</div>
    				<div class="col-md-6">
    				    <a href="" class="btn bg-blue" data-toggle="modal" data-target="#modal-default">Export to Excel</a>
    				</div>
			    </div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="card-body">
			<table id="example1" class="table table-bordered table-striped">
		      <thead class="bg-primary">
		      <tr>
		          <th>No</th>
		        <th>NIPY</th>
		        <th>Nama Pengawas</th>
		        <th>Hari dan Tgl</th>
		        <th>Waktu</th>
		        <th>Mapel</th>
		        <th>Ruang/lab</th>
		        <th>Detail</th>
		      </tr>
		      </thead>
		      <tbody>
		      <?php 
		      if (isset($_GET['tgl'])) {
		      	$query = mysqli_query($koneksi, "select * from tb_pengawas where tgl = '".$_GET['tgl']."'");
		      }else if(!isset($_GET['tgl'])){
		      	$query = mysqli_query($koneksi, "select * from tb_pengawas");
		      }
                $no = 1;
		      while ($sql = mysqli_fetch_array($query)) { 
		        ?>
		        <tr>
		            <td><?= $no++; ?></td>
		          <td><?= $sql['nipy_pengawas']; ?></td>
		          <td><?= $sql['nama_pengawas']; ?></td>
		          <td><?= $sql['hari_ini'].", ".$sql['tgl']; ?></td>
		          <td><?= $sql['mulai']." - ".$sql['berakhir']; ?></td>
		          <td><?= $sql['mapel']; ?></td>
		          <td><?= $sql['ruang_lab']; ?></td>
		          <td><a href="fpdf184/print_pdf.php?pdf=<?= $sql['no']; ?>" target="_blank">Print PDF</a>
		          </td>
		        </tr>
		      <?php }
		      ?>
		      </tbody>
		      <tfoot>
		      <tr>
		          <th>No</th>
		        <th>NIPY</th>
		        <th>Nama Pengawas</th>
		        <th>Hari dan Tgl</th>
		        <th>Waktu</th>
		        <th>Mapel</th>
		        <th>Ruang/lab</th>
		        <th>Detail</th>
		      </tr>
		      </tfoot>
		    </table>
		</div>
	</div>
</div>

      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Export to excel</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="pages/admin/exp.php" method="POST">
            	<div class="modal-body">
              	<input type="date" name="tgl" class="form-control">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->