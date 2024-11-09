<?= $this->extend('layouts/sidebar'); ?>
<?= $this->section('dashboardContent'); ?>

<form action="/dashboard/lokasi" method="POST" class="p-10 flex justify-center items-center gap-10">
    <?php csrf_field() ?>
    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">Asal</span>
        </div>
        <select class="select select-bordered" name="asal" id="asal">
            <option selected value="<?= $asal['provinsi_id']; ?>"><?= $asal['nama_provinsi']; ?></option>
        </select>
        <div class="label">
            <span class="label-text-alt">Alt label</span>
        </div>
    </label>
    <label class="form-control w-full max-w-xs">
        <div class="label">
            <span class="label-text">Tujuan Provinsi</span>
        </div>
        <select class="select select-bordered" name="tujuan" id="tujuan">
            <option disabled selected>Pilih Provinsi</option>
            <?php if ($tujuan): ?>
                <?php foreach ($tujuan as $index => $tuju): ?>
                    <option value="<?= $tuju['provinsi_id']; ?>"><?= $tuju['nama_provinsi']; ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
        <div class="label">
            <span class="label-text-alt">Alt label</span>
        </div>
    </label>
    <label class="form-control w-full max-w-xs hidden" id="kotaContainer">
        <div class="label">
            <span class="label-text">Kota</span>
        </div>
        <select class="select select-bordered" name="kota" id="kota">

        </select>
        <div class="label">
            <span class="label-text-alt">Alt label</span>
        </div>
    </label>
    <label class="form-control w-full max-w-xs hidden" id="kecamatanContainer">
        <div class="label">
            <span class="label-text">Kota</span>
        </div>
        <select class="select select-bordered" name="kecamatan" id="kecamatan">

        </select>
        <div class="label">
            <span class="label-text-alt">Alt label</span>
        </div>
    </label>
    <label class="form-control w-full max-w-xs hidden" id="kelurahanContainer">
        <div class="label">
            <span class="label-text">Kota</span>
        </div>
        <select class="select select-bordered" name="kelurahan" id="kelurahan">

        </select>
        <div class="label">
            <span class="label-text-alt">Alt label</span>
        </div>
    </label>
    <button type="submit" class="btn btn-neutral">Tambah</button>
</form>

<script>
    document.getElementById('tujuan').addEventListener('change', function() {
        const tujuanId = this.value;
        fetch(`carikota/${tujuanId}`)
            .then(response => response.json())
            .then(data => {
                const kotaContainer = document.getElementById('kotaContainer');
                const selectKota = document.getElementById('kota');
                kotaContainer.style.display = 'flex'
                selectKota.innerHTML = '<option disabled selected>Pilih Kota</option>'
                data.forEach(kota => {
                    selectKota.innerHTML += `<option value="${kota.kota_id}">${kota.nama_kota}</option>`
                });
            })
    });

    document.getElementById('kota').addEventListener('change', function() {
        const kotaId = this.value;
        fetch(`carikecamatan/${kotaId}`)
            .then(response => response.json())
            .then(data => {
                const kecamatanContainer = document.getElementById('kecamatanContainer');
                const selectKecamatan = document.getElementById('kecamatan');
                kecamatanContainer.style.display = 'flex';
                selectKecamatan.innerHTML = '<option disabled selected>Pilih Kecamatan</option>';
                data.forEach(kecamatan => {
                    selectKecamatan.innerHTML += `<option value="${kecamatan.kecamatan_id}">${kecamatan.nama_kecamatan}</option>`
                });
            })

    })
</script>

<?= $this->endSection(); ?>