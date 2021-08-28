<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  <title>Starter Template · Bootstrap v4.6</title>

  <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/starter-template/"> -->

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/starter-template.css" rel="stylesheet">
</head>

<body>
  <?php $this->load->view('template/menu'); ?>

  <main role="main" class="container">


    <div class="row">
      <div class="col-sm-8">
        <div class="card border-info">
          <div class="card-header">
            <h3><?php echo $title ?></h3>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Latihan</th>
                <th scope="col">Action</th>
              </tr>

              <?php $no = 1 ?>
              <?php foreach ($row as $r) : ?>
                <tr>
                  <th scope="row"><?php echo $no++ ?></th>
                  <td><?php echo $r->nama_latihan ?></td>
                  <td>
                    <a class="btn btn-sm btn-warning" href="#modalEdit<?php echo $r->jenis_lat_id; ?>" data-toggle="modal" title="Edit">Edit</a>
                    <a href="<?php echo base_url(); ?>jenis_latihan/delete/<?php echo $r->jenis_lat_id; ?>" onclick="return confirm('Are you sure want to delete?');" class="btn btn-danger btn-sm" style="color:white">Del</a>
                  </td>
                </tr>
              <?php endforeach ?>
            </table>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card border-danger">
          <div class="card-header">
            <h3>Input Jenis Latihan</h3>
          </div>
          <div class="card-body">
            <form class="mt-4" method="post" action="<?php echo base_url('jenis_latihan/add'); ?>">
              <div class="form-group">
                <label>Jenis Latihan</label>
                <input type="text" class="form-control" name="nama_latihan">
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main><!-- /.container -->


  <?php
  foreach ($row as $r) {
  ?>
    <!-- Modal -->
    <div class="modal fade" id="modalEdit<?php echo $r->jenis_lat_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form class="form-horizontal" method="post" action="<?php echo base_url('jenis_latihan/edit'); ?>">
            <div class="modal-body">
              <input name="jenis_lat_id" type="hidden" value="<?php echo $r->jenis_lat_id; ?>">
              <div class="form-group">
                <label>Nama kelas</label>
                <input type="text" class="form-control" name="nama_latihan" value="<?php echo $r->nama_latihan; ?>">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php } ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    // window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>


</body>

</html>