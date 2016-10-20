<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Mahasiswa - Admin</title>

        <?php $this->load->view('layout/CssLayout'); ?>

    </head>

    <body>

        <?php $this->load->view('layout/NavigationLayout'); ?>


        <div id="page-wrapper">
            <div class="row">
                <p></p>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>index.php/admin/">Home</a></li>
                    <li>Data Mahasiswa</li>
                </ol>
                <div class="col-lg-8">
                    <h1 class="page-header">Data Mahasiswa</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                    <a href="<?php echo base_url(); ?>index.php/admin/mahasiswa/tambahmahasiswa">
                        <button type="button" class="btn btn-primary">
                            Tambah Mahasiswa
                        </button>
                    </a>

                    <p></p>

                    <table id="dataMahasiswa" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">NPM</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($mahasiswa as $m) { ?>
                                <tr>
                                    <td><?php echo $m->npm; ?></td>
                                    <td><?php echo $m->nama; ?></td>
                                    <td><?php echo $m->jenis_kelamin; ?></td>
                                    <td><?php echo $m->kelas; ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>index.php/admin/mahasiswa/editmahasiswa/<?php echo $m->npm; ?>">
                                            <button type="button" class="btn btn-success">
                                                Edit
                                            </button>
                                        </a>
                                        <a href="<?php echo base_url(); ?>index.php/admin/mahasiswa/hapusmahasiswa/<?php echo $m->npm; ?>"">
                                            <button type="button" class="btn btn-danger">
                                                Hapus
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php $this->load->view('layout/JsLayout'); ?>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#dataMahasiswa').DataTable();
            });
        </script>
    </body>

</html>
