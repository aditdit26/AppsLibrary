<?php require_once('header.php') ?>
<?php require_once('nav.php') ?>

  <div class="content-wrapper">
  <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <a href="<?php echo site_url('Export/export_exceluser');?>" class="btn btn-success">Export Excel</a>
              </div>
            </div>
            <br>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>No</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Nama Instansi</th>
                  <th>Alamat Instansi</th>
                  <th>No Telp</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Create</th>
                  <!-- <th>Foto</th> -->
                  <th>Aksi</th>
                </tr>
                <?php $no=1; foreach ($user as $d){ ?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $d->nip;?></td>
                  <td><?php echo $d->nama;?></td>
                  <td><?php echo $d->nama_inst;?></td>
                  <td><?php echo $d->almt_inst;?></td>
                  <td><?php echo $d->no_tlp;?></td>
                  <td><?php echo $d->email;?></td>
                  <td><?php echo md5($d->password);?></td>
                  <td><?php echo $d->created_at;?></td>
                  <td>
                    <span class="pull-right-container">
                      <a type="button" data-toggle="modal" data-target="#view" class="btn btn-primary" <?php $rows = $this->db->query("SELECT * FROM users WHERE nip='".$d->nip."'")->row_array();?>>View </a>
                      <a type="button" href="<?php echo base_url('admin/edit_user/'.$d->nip);?>" class="btn btn-warning">Edit </a>
                      <a type="button" href="<?php echo base_url('admin/hapus_user/'.$d->nip);?>" class="btn btn-danger">Hapus</a>
                    </span>
                  </td>
                  <td>
                  </td>
                </tr>
                <?php }?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>

  <!-- Modal -->
<div class="modal fade" id="view" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align: center">BIODATA SKPD</h4>
      </div>
      <div class="modal-body">
        <?php //$rows = $this->db->query("SELECT * FROM users WHERE nip='".$this->$d->nip."'")->row_array(); ?>
        <form class="" action="<?php echo $rows['id'];?>">
          <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" id="nip" name="nip" class="form-control" value="<?php echo $rows['nip']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $rows['nama']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="nama_instansi">Nama Instansi</label>
            <input type="text" id="nama_instansi" name="nama_inst" class="form-control" value="<?php echo $rows['nama_inst']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="almt_instansi">Alamat Instansi</label>
            <input type="text" id="almt_instansi" name="almt_inst" class="form-control" value="<?php echo $rows['almt_inst']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="no_tlp">No Telphon</label>
            <input type="text" id="no_tlp" name="no_tlp" class="form-control" value="<?php echo $rows['no_tlp']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo $rows['email']; ?>" readonly>
          </div>
          <!-- <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" value="<?php echo $d->password; ?>">
          </div> -->
          <!-- <div class="form-group">
            <label for="gambar">Gambar</label><br>
            <input type="file" id="gambar" name="gambar" class="btn btn-secondary" value="<?php echo $d->gambar; ?>">
          </div> -->
        </form>
        <?php //}?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>

    <!-- /.content -->
<?php require_once('footer.php') ?>
