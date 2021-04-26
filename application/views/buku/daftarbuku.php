<?= $this->session->flashdata('pesan'); ?>
<div style="padding: 25px;">
    <div class="x_panel">

        <div class="x_content">

            <!--tampilkan semua produk -->
            <div class="row">

                <!--looping product-->
                <?php foreach ($buku as $buku)   {   ?>
                <div class="col-md-2 col-md-3">
                <div class="thumbnail" style="height: 370px;">
                <img src="<?php echo base_url();?>assets/img/upload/<?= $buku               ?>">  

