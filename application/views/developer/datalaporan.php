<?php require_once('header.php') ?>
<?php require_once('nav.php') ?>

<div class="content-wrapper">
<section class="content">
    <!-- /.row -->
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Laporan PAD</h3>

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
              <a href="<?php echo site_url('Export/export_exceltargettahun');?>" class="btn btn-success">Export Excel</a>
            </div>
          </div>
          <br>
          <!-- /.box-header -->
          <div class="row">
            <div class="col-md-12 col-md-12" style="text-align:justify">
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover" border="1">
                  <tr>
                    <th rowspan="2" style="text-align:center;">No</th>
                    <th rowspan="2" style="text-align:center;">Nama SKPD</th>
                    <th rowspan="2" style="text-align:center;">Target Tahunan</th>
                    <th colspan="3" style="text-align:center;"> Januari</th>
                    <th colspan="3" style="text-align:center;"> Febuari</th>
                    <th colspan="3" text-align="center"> Maret</th>
                    <th colspan="3" text-align="center"> April</th>
                    <th colspan="3" style="text-align:center;"> Mei</th>
                    <th colspan="3" style="text-align:center;"> Juni</th>
                    <th colspan="3" style="text-align:center;"> Juli</th>
                    <th colspan="3" style="text-align:center;"> Agustus</th>
                    <th colspan="3" style="text-align:center;"> September</th>
                    <th colspan="3" style="text-align:center;"> Oktober</th>
                    <th colspan="3" style="text-align:center;"> November</th>
                    <th colspan="3" style="text-align:center;"> Desember</th>
                    <tr>
                        <td> Target</td>
                        <td> Realisasi</td>
                        <td> % </td>
                        <td> Target</td>
                        <td> Realisasi</td>
                        <td> % </td>
                        <td> Target</td>
                        <td> Realisasi</td>
                        <td> % </td>
                        <td> Target</td>
                        <td> Realisasi</td>
                        <td> % </td>
                        <td> Target</td>
                        <td> Realisasi</td>
                        <td> % </td>
                        <td> Target</td>
                        <td> Realisasi</td>
                        <td> % </td>
                        <td> Target</td>
                        <td> Realisasi</td>
                        <td> % </td>
                        <td> Target</td>
                        <td> Realisasi</td>
                        <td> % </td>
                        <td> Target</td>
                        <td> Realisasi</td>
                        <td> % </td>
                        <td> Target</td>
                        <td> Realisasi</td>
                        <td> % </td>
                        <td> Target</td>
                        <td> Realisasi</td>
                        <td> % </td>
                        <td> Target</td>
                        <td> Realisasi</td>
                        <td> % </td>
                    </tr>
                  </tr>
                  <!-- <?php $no=1; foreach ($target as $d){ ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $d->opd;?></td>
                    <td><?php echo $d->target;?></td>
                    <td><?php echo $d->januari?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $d->februari?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $d->maret?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $d->april?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $d->mei?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $d->juni?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $d->juli?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $d->agustus?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $d->september?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $d->oktober?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $d->november?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $d->desember?></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <?php }?> -->
                </table>
              </div>
            </div>
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
