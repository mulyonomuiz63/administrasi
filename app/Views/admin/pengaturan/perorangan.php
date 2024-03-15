<form action="<?php echo (site_url('pengaturan/ubah/profil')) ?>" class="row g-3 form text-left needs-validation" novalidate="" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="row mb-3">
        <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
        <div class="col-md-8 col-lg-9">
            <input name="id" type="hidden" class="form-control" value="<?= $id; ?>">
            <input name="status" type="hidden" class="form-control" value="perorangan">
            <input name="nama" type="text" class="form-control" value="<?= $rows->nama; ?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="Tempat" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
        <div class="col-md-8 col-lg-9">
            <input name="tempat_lahir" type="text" class="form-control" value="<?= $rows->tempat_lahir ?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="nama" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
        <div class="col-md-8 col-lg-9">
            <input name="tgl_lahir" type="date" class="form-control" value="<?= $rows->tgl_lahir ?>" required>
        </div>
    </div>


    <div class="row mb-3">
        <label for="Almat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
        <div class="col-md-8 col-lg-9">
            <textarea name="alamat" class="form-control" style="height: 100px" required><?= $rows->alamat; ?></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label for="Jenis Kelamin" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
        <div class="col-md-8 col-lg-9">
            <select name="jk" class="form-control" required>
                <option value="">Pilih</option>
                <option value="L" <?= $rows->jk == 'L' ? 'selected' : ''; ?>>Laki-Laki</option>
                <option value="P" <?= $rows->jk == 'P' ? 'selected' : ''; ?>>Perempuan</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="Agama" class="col-md-4 col-lg-3 col-form-label">Agama</label>
        <div class="col-md-8 col-lg-9">
            <select name="agama" class="form-control" required>
                <option value="">Pilih</option>
                <option value="Islam" <?= $rows->agama == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                <option value="Khatolik" <?= $rows->agama == 'Khatolik' ? 'selected' : ''; ?>>Khatolik</option>
                <option value="Kristen" <?= $rows->agama == 'Kristen' ? 'selected' : ''; ?>>Kristen</option>
                <option value="Hindu" <?= $rows->agama == 'Hindu' ? 'selected' : ''; ?>>Hindu</option>
                <option value="Buda" <?= $rows->agama == 'Buda' ? 'selected' : ''; ?>>Buda</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="NIK" class="col-md-4 col-lg-3 col-form-label">NIK</label>
        <div class="col-md-8 col-lg-9">
            <input name="nik" type="text" class="form-control" value="<?= $rows->nik; ?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="Telpon" class="col-md-4 col-lg-3 col-form-label">No Hp</label>
        <div class="col-md-8 col-lg-9">
            <input name="hp" type="text" class="form-control" value="<?= $rows->hp; ?>" required>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form><!-- End Profile Edit Form -->