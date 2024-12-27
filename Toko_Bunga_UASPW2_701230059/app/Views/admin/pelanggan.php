<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5">Pelanggan</h2>
<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">No HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th scope="row">Amalia Aisaturadia</th>
                <th scope="row">0876453248</th>
                <th scope="row">Bahar Selatan Muaro Jambi</th>
                <th scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn btn-danger">Hapus</a>
                </th>
            </tr>
            <tr>
                <th scope="row">2</th>
                <th scope="row">Dipa</th>
                <th scope="row">06544353</th>
                <th scope="row">Kuburan Cino</th>
                <th scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn btn-danger">Hapus</a>
                </th>
            </tr>
            <tr>
                <th scope="row">3</th>
                <th scope="row">Azwa</th>
                <th scope="row">0546453366</th>
                <th scope="row">Pluto</th>
                <th scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn btn-danger">Hapus</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endSection();?>