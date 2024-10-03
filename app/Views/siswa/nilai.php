<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 mt-3">Data Nilai</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Nama Siswa</h6>
                            <select class="form-control mb-3 mt-3">
                                        <option value="" disabled selected>Pilih Semester</option>
                                        <option value="1">Semester 1</option>
                                        <option value="2">Semester 2</option>
                            </select>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mata Pelajaran</th>
                                            <th>Nilai</th>
                                            <th>KKM</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Mata Pelajaran</th>
                                            <th>Nilai</th>
                                            <th>KKM</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Kewarganegaraan</td>
                                            <td>86</td>
                                            <td>75</td>
                                            <td>Lulus KKM</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?= $this->endSection() ?>