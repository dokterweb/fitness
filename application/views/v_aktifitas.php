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
                <th scope="col">Tgl Latihan</th>
                <th scope="col">Judul</th>
                <th scope="col">Action</th>
              </tr>

              <?php $no = 1 ?>
              <?php foreach ($row as $r) : ?>
                <tr>
                  <th scope="row"><?php echo $no++ ?></th>
                  <td><?php echo $r->tgl_latihan ?></td>
                  <td><?php echo $r->judul ?></td>
                  <td>
                    <a href="<?php echo base_url(); ?>aktifitas/detail/<?php echo $r->latihan_id; ?>" class="btn btn-info btn-sm" style="color:white">Detail</a>
                    <a href="<?php echo base_url(); ?>aktifitas/del/<?php echo $r->latihan_id; ?>" onclick="return confirm('Are you sure want to delete?');" class="btn btn-danger btn-sm" style="color:white">Del</a>
                  </td>
                </tr>
              <?php endforeach ?>
            </table>
          </div>
        </div>
      </div>

    </div>
  </main><!-- /.container -->


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    // window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>


</body>

</html>