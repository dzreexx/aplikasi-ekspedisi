<?= $this->extend('layouts/layoutUser'); ?>
<?= $this->section('content'); ?>
<!-- carousels -->
<div class="w-full overflow-hidden translate-y-20">
    <div class="w-full flex transition-all duration-500" id="karosel">
        <?php if ($carousels): ?>
            <?php foreach ($carousels as $index => $carousel): ?>
                <div id="karosel-items" class="karosel-item min-w-full max-w-full">
                    <img src="<?= base_url('img/carousels/' . $carousel['nama_file']); ?>" alt="" class="min-w-full max-w-full h-[890px]">
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<!-- controller carousels -->
<!-- <div class="block top-0 z-30 fixed h-screen w-full"> -->
<div class="flex justify-between items-center h-screen px-5 absolute w-full top-0 z-10">
    <a id="kiri" class="btn btn-square">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </a>
    <a id="kanan" class="btn btn-square">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
        </svg>
    </a>
</div>
<!-- </div> -->

<div class="px-56 text-justify overflow-hidden translate-y-96">
    <div class="flex items-center gap-10 mt-20" id="scrollt">
        <div>
            <h1 class="font-bold text-5xl mb-5 text-warning">Company Profile</h1>
            <p>Lorem ipsum dolor it amet consectetur adipisicing elit. A provident quod minus ratione ipsa quas hic sunt, atque autem vero iste at accusamus vitae mollitia veritatis, quos ab quidem. Necessitatibus, culpa rem, vero, debitis magni enim fugiat eius exercitationem at minima voluptatum optio provident! Sed ut iste commodi eum qui? Eius placeat similique commodi cumque vel at odio repellendus sint consectetur veniam quo quia natus ducimus, dignissimos voluptatem aut earum accusantium, debitis mollitia minima neque. Ipsa maiores quos veritatis dolorum doloremque natus facere esse enim amet hic ab nisi assumenda ratione, aliquid tempora veniam illo eligendi! Corporis inventore eius debitis!</p>
            <a href="/profile" class="btn btn-warning mt-5">Selengkapnya</a>
        </div>
        <img src="img/profile.jpg" alt="" class="rounded-lg">
    </div>
</div>

<!-- BERITA -->
<div class="px-56 translate-y-96 mt-20">
    <h1 class="text-center font-bold text-5xl mb-10 text-warning">Berita</h1>
    <div class="flex justify-center items-center gap-5">
        <?php if ($news): ?>
            <?php foreach ($news as $index => $new): ?>
                <div class="card bg-base-100 w-1/5 shadow-xl max-h-[370px] h-[370px] min-h-[370px]">
                    <figure>
                        <img
                            src="<?= base_url('img/news/' . $new['gambar']); ?>"
                            alt="Shoes" class="min-w-[500px]" />
                    </figure>
                    <div class="card-body">
                        <?php if (strlen($new['judul']) > 30): ?>
                            <h2 class="card-title">
                                <?= substr($new['judul'], 0, 30); ?>
                                ...
                            </h2>
                        <?php else: ?>
                            <h2 class="card-title">
                                <?= $new['judul']; ?>
                            </h2>
                        <?php endif; ?>
                        <p class="badge badge-ghost"><?= substr($new['created_at'], 0, 10); ?></p>
                        <div class="card-actions justify-end">
                            <a href="/news/<?= $new['news_id']; ?>" class="btn btn-warning">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="flex justify-end items-center">
        <a href="/news" class="btn btn-link">Tampilkan lebih banyak</a>
    </div>
</div>


<div class="block translate-y-96 mt-20 overflow-hidden">
    <h1 class="text-center text-4xl font-bold mt-32 text-warning">Our Best Partners</h1>
    <div class="overflow-hidden whitespace-nowrap inline-flex animate-marquee mt-10" id="foto">
        <div class="">
            <div class="flex gap-5 h-[40vh]">
                <?php foreach ($fotos as $foto): ?>
                    <div class="avatar flex-shrink-0">
                        <div class="rounded grayscale hover:grayscale-0 transition-all duration-1000">
                            <img src="<?= base_url('img/foto/' . $foto['nama_file']); ?>" class="w-32 h-32 object-cover" />
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Gandakan elemen foto untuk membuat loop tanpa jeda -->
                <?php foreach ($fotos as $foto): ?>
                    <div class="avatar flex-shrink-0">
                        <div class="rounded grayscale hover:grayscale-0 transition-all duration-1000">
                            <img src="<?= base_url('img/foto/' . $foto['nama_file']); ?>" class="w-32 h-32 object-cover" />
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script>
    // window.addEventListener("scroll", function() {
    //     let header = document.getElementById("scrollt");
    //     let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    //     header.style.opacity = 1 - scrollTop / 500; // Mengubah opacity berdasarkan scroll
    // });
    window.addEventListener("scroll", function() {
        let konten = document.getElementById("scrollt");
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        let hitung = Math.min(100, 0 + scrollTop / 55);
        let i = 0;
        console.log(hitung);

        konten.style.transform = `translateY(-${hitung}%)`;
        konten.style.opacity = 0 + scrollTop / 1000;
    });

    const karosel = document.getElementById('karosel');
    const karoselitem = document.querySelectorAll('.karosel-item');
    let total = 0;
    const totalKarosel = karoselitem.length;
    const handleMath = (value) => {
        total += value;
        if (total >= totalKarosel) total = 0;
        if (total < 0) total = totalKarosel - 1;
        console.log(total);
        nextPrev();
    }

    const nextPrev = () => {
        karosel.style.transform = `translateX(-${total * 100}%)`;
    }
    document.getElementById('kanan').addEventListener('click', () => handleMath(1));
    document.getElementById('kiri').addEventListener('click', () => handleMath(-1));

    setInterval(() => handleMath(1), 5000)
</script>
<?= $this->endSection(); ?>