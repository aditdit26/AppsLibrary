<?php require_once('header.php') ?>
<?php require_once('nav.php') ?>

<div class="content-wrapper">
<section class="content">
    <!-- /.row -->
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Target PAD Perbulan</h3>

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
              <a href="<?php echo site_url('Export/export_exceltargetbulan');?>" class="btn btn-success">Export Excel</a>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Instansi</th>
                <th>Bulan</th>
                <th>Realisasi</th>
                <th>Realisasi</th>
                <th>Create</th>
                <th>Aksi</th>
              </tr>
              <?php $no=1; foreach ($realisasi as $d){ ?>
              <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $d->nip;?></td>
                <td><?php echo $d->nama_inst;?></td>
                <td><?php echo $d->bulan;?></td>
                <td><?php echo $d->target_bulanan;?></td>
                <td><?php echo $d->realisasi;?></td>
                <td><?php echo $d->create_at;?></td>
                <td>
                  <span class="pull-right-container">
                  <a type="button" href="<?php echo base_url('admin/edit_user/'.$d->nip);?>" class="btn btn-primary">View </a>
                  <a type="button" href="<?php echo base_url('admin/edit_realisasi/'.$d->nip);?>" class="btn btn-warning">Edit </a>
                  <a type="button" href="<?php echo base_url('admin/hapus_realisasi/'.$d->nip);?>" class="btn btn-danger">Hapus</a>
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
  <!-- /.content-wrapper -->
<?php require_once('footer.php') ?>
