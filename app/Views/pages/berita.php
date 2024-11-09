<?= $this->extend('layouts/layoutUser'); ?>
<?= $this->section('content'); ?>

<div class="translate-y-20 px-56">
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
        </ul>
    </div>
    <?php if ($berita): ?>
        <?php foreach ($berita as $index => $news): ?>
            <div class="border-b-2 h-20 flex flex-col justify-center">
                <a href="/news/<?= $news['news_id']; ?>" class="text-blue-500 hover:text-warning transition-colors duration-200">
                    <h1 class="font-bold text-2xl"><?= $news['judul']; ?></h1>
                </a>
                <?php if (strlen($news['deskripsi']) > 100): ?>
                    <p>
                        <?= substr($news['deskripsi'], 0, 180); ?>
                        ...
                    </p>
                <?php else: ?>
                    <p>
                        <?= $news['judul']; ?>
                    </p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?= $this->endSection(); ?>