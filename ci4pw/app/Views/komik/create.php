<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="my-3">Form Tambah Data Komik</h2>
    <form action="/komik/save" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('judul'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="Sampul" class="col-sm-2 col-form-label">Sampul</label>
            <div class="col-sm-10">
                <input class="<?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" type="file" id="sampul" name="sampul">
                <div class="invalid-feedback">
                    <?= $validation->getError('sampul'); ?>
                </div>
                <p class="font-weight-light">Biarkan kosong jika belum memiliki sampul</p>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>