<form action="<?php echo (site_url('pengaturan/ubah/profil')) ?>" class="row g-3 form text-left needs-validation" novalidate="" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="row mb-3">
        <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
        <div class="col-md-8 col-lg-9">
            <input name="id" type="hidden" class="form-control" value="<?= $id; ?>">
            <input name="status" type="hidden" class="form-control" value="badan">
            <input name="nama" type="text" class="form-control" value="<?= $rows->nama; ?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="nama" class="col-md-4 col-lg-3 col-form-label">Tanggal Pendirian</label>
        <div class="col-md-8 col-lg-9">
            <input name="tgl_pendirian" type="date" class="form-control" value="<?= $rows->tgl_pendirian ?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="Almat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
        <div class="col-md-8 col-lg-9">
            <textarea name="alamat" class="form-control" style="height: 100px" required><?= $rows->alamat; ?></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label for="NPWP" class="col-md-4 col-lg-3 col-form-label">NPWP</label>
        <div class="col-md-8 col-lg-9">
            <input name="npwp" type="text" class="form-control" value="<?= $rows->npwp; ?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="Telpon" class="col-md-4 col-lg-3 col-form-label">No Telpon</label>
        <div class="col-md-8 col-lg-9">
            <input name="hp" type="text" class="form-control" value="<?= $rows->hp; ?>" required>
        </div>
    </div>
    <div>
        <hr>
    </div>


    <div class="row mb-3">
        <label for="PIC" class="col-md-4 col-lg-3 col-form-label">PIC</label>
        <div class="col-md-8 col-lg-9">
            <input name="pic" type="text" class="form-control" value="<?= $rows->pic; ?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="Jabatan" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
        <div class="col-md-8 col-lg-9">
            <input name="jabatan" type="text" class="form-control" value="<?= $rows->jabatan; ?>" required>
        </div>
    </div>


    <div class="text-center">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form><!-- End Profile Edit Form -->