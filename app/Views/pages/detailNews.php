<?= $this->extend('layouts/layoutUser'); ?>
<?= $this->section('content'); ?>
<div class="flex justify-between translate-y-20 px-56 gap-5">
    <div class="w-2/3">
        <div class="breadcrumbs text-sm">
            <ul>
                <li>
                    <a href="/">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="h-4 w-4 stroke-current">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="/news">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="h-4 w-4 stroke-current">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                        Berita
                    </a>
                </li>
                <li>
                    <span class="inline-flex items-center gap-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="h-4 w-4 stroke-current">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Detail Berita
                    </span>
                </li>
            </ul>
        </div>
        <div>
            <img src="<?php echo base_url('img/news/' . $berita['gambar']) ?>" alt="" class="w-full">
        </div>
        <div class="mt-5">
            <h1 class="text-3xl"><?= $berita['judul']; ?></h1>
            <p class="mt-5"><?= $berita['deskripsi']; ?></p>
        </div>
    </div>
    <div class="w-1/3 mt-8">
        <h1 class=" font-bold text-3xl">Berita Terbaru</h1>
        <hr class="h-2 bg-warning">
        <?php if ($news): ?>
            <?php foreach ($news as $index => $new): ?>
                <div class="border-b h-16 content-center">
                    <a href="/news/<?= $new['news_id']; ?>">
                        <h1 class="text-blue-500 font-normal text-lg hover:text-warning transition-colors duration-200">
                            <?= $new['judul']; ?>
                        </h1>
                        <small class="text-gray-400">
                            <?= substr($new['created_at'], 0, 10); ?>
                        </small>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection(); ?>