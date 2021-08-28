<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  <title>Fitness</title>
  <!-- <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.min.js"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
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
    <div class="card  border-primary">
      <div class="card-header">
        <h3>Input Latihan</h3>
      </div>
      <div class="card-body">
        <form>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Tgl Latihan</label>
              <input type="date" class="form-control" id="tgl_latihan" name="tgl_latihan">
            </div>
            <div class="form-group col-md-8">
              <label>Judul</label>
              <input type="text" class="form-control" id="judul" name="judul">
            </div>
          </div>
          <hr style="border: 1px solid red;">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputState">Jenis Latihan</label>
              <select class="form-control" id="r_jenis_lat" name="r_jenis_lat">
                <?php
                foreach ($jenis_lat as $j) : ?>
                  <option value="<?php echo $j->jenis_lat_id; ?>"><?php echo $j->nama_latihan ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label>Repetisi</label>
              <input type="number" class="form-control" id="r_repetisi" name="r_repetisi">
            </div>
          </div>
          <button type="button" onclick="selesai()" class="btn btn-primary btn-sm" name="submit">Simpan</button>
          <button type="button" onclick="add_latihan_det()" class="btn btn-primary btn-sm" name="add">Tambah Latihan</button>
        </form>
      </div>
    </div>
    <br>
    <div class="card border-danger">
      <div id="list" class="card-body">

      </div>
    </div>

  </main><!-- /.container -->

  <body onload="load_data_temp()"></body>

  <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> -->
  <!-- <script src="<?php echo base_url('assets') ?>/jquery/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function add_latihan_det() {
      // console.log("id_mak=" + $("#id_mak :selected").val());
      var r_jenis_lat = $('#r_jenis_lat').find(":selected").val();
      var r_repetisi = $("#r_repetisi").val();
      $.ajax({
        type: "GET",
        url: "<?php echo base_url('home/input_ajax') ?>",
        data: "r_jenis_lat=" + r_jenis_lat + "&r_repetisi=" + r_repetisi,
        success: function(html) {

          load_data_temp();
        }
      });
    }

    function load_data_temp() {
      $.ajax({
        type: "GET",
        url: "<?php echo base_url('home/load_temp') ?>",
        data: "",
        success: function(html) {
          $("#list").html(html);
        }
      });
    }

    function hapus(id) {
      $.ajax({
        type: "GET",
        url: "<?php echo base_url('home/hapus_temp') ?>",
        data: "id=" + id,
        success: function(html) {
          $("#dataku" + id).hide(500);
        }
      });
    }

    function selesai() {
      var tgl_latihan = $("#tgl_latihan").val();
      var judul = $("#judul").val();
      $.ajax({
        type: "GET",
        url: "<?php echo base_url('home/chekout') ?>",
        data: "judul=" + judul + "&tgl_latihan=" + tgl_latihan,
        success: function(html) {
          alert('transaksi_berhasil');
          window.location.href = "<?php echo base_url('home') ?>";
          // load_data_temp();
        }
      });
      return false;
    }
  </script>


</body>

</html>