<?php require_once('header.php') ?>
<?php require_once('nav.php') ?>

  <div class="content-wrapper">
  <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">EDIT TARGET</h3>

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
                <a href="<?php echo site_url('admin/d_target');?>" class="btn btn-info">Kembali</a>
              </div>
            </div>
            <br>
            <!-- /.box-header -->
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <?php foreach ($target as $u){?>
                <br>
              <form class="" action="<?php echo base_url('Admin/updateterget/'.$u['nip']);?>" method="post">
                <input type="hidden" name="_token" value=" csrf_token() ">
                  <div class="form-group">
                    <input type="text" name="nip" class="form-control" value="<?php echo $u['nip'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <input type="text" name="nama_inst" class="form-control" value="<?php echo $u['nama_inst'] ?>" />
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" name="target" value="<?php echo $u['target'] ?>"/>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" name="keterangan" value="<?php echo $u['keterangan'] ?>"/>
                  </div>
                   <div class="text-center">
                     <input type="submit" name="Submit" value="Update" class="btn btn-lg btn-block btn-primary">
                   </div>
                </form>
                <?php } ?>
                <br>
              </div>
        </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
    <!-- /.content -->
<?php require_once('footer.php') ?>
