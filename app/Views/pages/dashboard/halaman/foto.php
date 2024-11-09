<?= $this->extend('layouts/sidebar'); ?>
<?= $this->section('dashboardContent'); ?>

<div>
    <?php if (session()->get('error')): ?>
        <div role="alert" class="m-10 w-1/2 alert alert-error">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 shrink-0 stroke-current"
                fill="none"
                viewBox="0 0 24 24">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span><?= session()->get('error') ?></span>
        </div>
    <?php endif; ?>
    <?php if (session()->get('success')): ?>
        <div role="alert" class="m-10 w-1/2 alert alert-info">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 shrink-0 stroke-current"
                fill="none"
                viewBox="0 0 24 24">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span><?= session()->get('success') ?></span>
        </div>
    <?php endif; ?>
    <div class="p-10">
        <h1 class="font-bold text-3xl">Kelola Foto</h1>
    </div>
    <div class="container p-10 flex justify-around items-center">
        <form action="/foto" method="post" enctype="multipart/form-data" class="my-5">
            <?= csrf_field(); ?>
            <?php if (session()->get('errors') && isset(session()->get('errors')['judul'])): ?>
                <small class="text-red-600 text-right">
                    <?= session()->get('errors')['judul'] ?>
                </small>
            <?php endif; ?>
            <label class="input input-bordered <?php if (session()->get('errors') && isset(session()->get('errors')['judul'])): ?> input-error <?php endif ?> flex items-center gap-2 max-w-xs">
                <span>Judul</span>
                <input type="text" name="judul" id="judul" class="grow" value="<?= old('judul'); ?>" />
            </label>
            <div class="label"></div>
            <?php if (session()->get('errors') && isset(session()->get('errors')['gambar'])): ?>
                <small class="text-red-600 text-right">
                    <?= session()->get('errors')['gambar'] ?>
                </small>
            <?php endif; ?>
            <input type="file" name="gambar" id="gambar" oninput="handleGambar(event)" class="file-input file-input-bordered <?php if (session()->get('errors') && isset(session()->get('errors')['gambar'])): ?> file-input-error <?php endif ?> w-full max-w-xs" />
            <div class="label"></div>
            </label>
            <button type="submit" class="btn btn-neutral ml-28">Tambah</button>
        </form>
        <div>
            <div class="artboard artboard-horizontal phone-1 bg-slate-500">
                <img src="https://placehold.co/568x320?text=Preview" alt="Preview" id="inputGambar" class="w-[568px] h-[320px]">
            </div>
        </div>
    </div>
</div>
<hr>
<div class="overflow-x-auto">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul dan pengupload</th>
                <th>Tanggal</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($fotos)): ?>
                <?php foreach ($fotos as $index => $foto): ?>
                    <tr>
                        <th><?= $index + 1; ?></th>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <button class="w-16 h-10" onclick="my_modal_<?= $index ?>.showModal()">
                                        <img
                                            src="<?= base_url('img/foto/' . $foto['nama_file']); ?>"
                                            alt="Avatar Tailwind CSS Component" />
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <?= $foto['judul']; ?>
                            <br />
                            <?php foreach ($users as $user): ?>
                                <?php if ($user['user_id'] == $foto['user_id']): ?>
                                    <span class="badge badge-ghost badge-sm">
                                        <?= $user['username']; ?>
                                    </span>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </td>
                        <td><?= substr($foto['created_at'], 0, 10); ?></td>
                        <th>
                            <label for="modal_<?= $index ?>" class="btn btn-ghost btn-xs">details</label>
                        </th>
                    </tr>
                    <input type="checkbox" id="modal_<?= $index ?>" class="modal-toggle" />
                    <div class="modal" role="dialog">
                        <div class="modal-box">
                            <img src="<?= base_url('img/foto/' . $foto['nama_file']); ?>" alt="">
                            <h3 class="text-lg font-bold"><?= $foto['judul']; ?></h3>
                            <small class="badge badge-ghost"><?= substr($foto['created_at'], 0, 10); ?></small>
                            <div class="modal-action">
                                <label for="modal_<?= $index ?>" class="btn">Close</label>
                                <form action="/foto/<?= $foto['foto_id']; ?>" method="get">
                                    <?= csrf_field(); ?>
                                    <button class="btn btn-error">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <dialog id="my_modal_<?= $index ?>" class="modal">
                        <div class="modal-box w-1/2  max-w-5xl">
                            <img src="<?= base_url('img/foto/' . $foto['nama_file']); ?>" class="w-full" alt="">
                            <div class="modal-action">
                                <form method="dialog">
                                    <button class="btn">Close</button>
                                </form>
                            </div>
                        </div>
                    </dialog>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>


<script>
    function handleGambar(e) {
        const file = e.target.files[0];
        const reader = new FileReader();
        reader.onload = function(event) {
            const imgElement = document.getElementById('inputGambar');
            imgElement.src = event.target.result;
        }


        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>

<?= $this->endSection(); ?>