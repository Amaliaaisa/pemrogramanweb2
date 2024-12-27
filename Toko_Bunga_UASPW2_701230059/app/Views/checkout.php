<?= $this->extend('template') ?>

<?= $this->section('main') ?>
<div class="container">
    <h2>Review Order</h2>
    <hr />
    <h5>Bunga Mawar</h5>
    <h5>Rp 5.000</h5>

    <h2 class="mt-3">Alamat pengiriman</h2>
    <hr />
    <h5>Bahar Selatan Muaro Jambi</h5>

    <h2 class="mt-3">Metode Bayar</h2>
    <hr />
    <h5>Transfer Bank</h5>
    <h5>BRI Azwa </h5>
    <h5>Rek. 34448323</h5>

    <div class="mt-5">
        <form action="<?= base_url('submit')?>" method="POST">
            <button type="submit" class="btn btn-success">Submit Order</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
