<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Admin></title>

    <?php $this->load->view('layout/CssLayout'); ?>

</head>

<body>

			<?php $this->load->view('layout/HeaderLayout.php'); ?>

            <?php $this->load->view('layout/navigationLayout'); ?>
            <!-- /.navbar-static-side -->
        </nav>

        
        <div id="page-wrapper">
            <div class="row">
            <p></p>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>index.php/admin/">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/admin/">Data Mahasiswa</a></li>
                    <li>Tambah Mahasiswa</li>
                </ol>
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data Mahasiswa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">                   

                    <form method="post" action="<?php echo base_url(); ?>index.php/admin/Mahasiswa/simpanMahasiswa">

                        <div class="form-group">
                            <label for="name">NPM</label>
                            <input name="npm" type="text" class="form-control" placeholder="masukkan NPM anda" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input name="nama" type="text" class="form-control" placeholder="masukkan nama anda" required>
                        </div>


                        <div class="form-group">
							<label for="jenis_kelamin">Jenis Kelamin</label>
				<select type="text" name="jenis_kelamin" class="form-control">
					<option value="pria">Pria</option>
					<option value="wanita">Wanita</option>
				</select>
		</div>

                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input name="kelas" type="text" class="form-control" placeholder="masukkan kelas lahir anda" required>
                        </div>                  
                       
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?php echo base_url(); ?>index.php/admin/AnggotaController/index">
                            <button type="button" class="btn btn-warning">Batal</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>