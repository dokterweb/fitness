<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Fitness App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('jenis_latihan'); ?>">Jenis Latihan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('aktifitas'); ?>">List Latihan</a>
                </li>


            </ul>

        </div>
    </div>
</nav>