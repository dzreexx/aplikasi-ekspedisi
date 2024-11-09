<?= $this->extend('layouts/navbar'); ?>

<?= $this->section('content'); ?>


<!-- Carousel -->
<div class="carousel w-full min-h-screen max-h-screen">
    <div class="carousel-inner">
        <?php if ($carousels): ?>
            <?php foreach ($carousels as $index => $carousel): ?>
                <div class="carousel-item">
                    <img src="<?= base_url('img/carousels/' . $carousel['nama_file']); ?>" class="h-full w-[99vw]" />
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- Carousel Controls -->
    <div class="carousel-controls">
        <a id="prevSlide" class="btn btn-circle">❮</a>
        <a id="nextSlide" class="btn btn-circle">❯</a>
    </div>
</div>




<!-- <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
  <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
  <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div> -->
<div class="mx-auto px-6 lg:px-8 mt-40 flex justify-around items-center gap-5" id="profile">
    <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-5xl font-semibold tracking-tight sm:text-7xl">Profile</h2>
        <p class="mt-8 text-pretty text-lg font-medium sm:text-xl/8">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat.</p>
        <a href="/profile" class="btn btn-warning mt-10">Selengkapnya</a>
    </div>
    <div class="mx-auto mt-10 max-w-3xl lg:mx-0 lg:max-w-none">
        <div>
            <img src="img/profile.jpg" alt="" class="rounded-md ">
        </div>
    </div>
</div>





<!-- Konten berita -->

<div class="block min-h-screen py-52" id="berita">

    <h1 class="text-center font-bold text-3xl">Berita</h1>

    <div class="flex justify-center items-center gap-10 mt-20">

        <?php if ($news): ?>
            <?php foreach ($news as $index => $new): ?>
                <div class="card bg-base-100 max-h-[450px] h-[450px] hover:h-[460px] hover:max-h-[460px] w-[300px] hover:w-[310px] max-w-[300px] hover:max-w-[310px] transition-all duration-200 shadow-xl">
                    <figure class="h-[25vh]">
                        <img
                            src="<?= base_url('img/news/' . $new['gambar']); ?>"
                            alt="Shoes"
                            class="w-[60vh] h-[30vh] max-w-[40vh] max-h-[40vh]" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title text-left text-md">
                            <?php if (strlen($new['judul']) > 30): ?>
                                <?= substr($new['judul'], 0, 30); ?>
                                ...
                            <?php else: ?>
                                <?= $new['judul']; ?>
                                <!-- <div class="badge badge-secondary">NEW</div> -->
                            <?php endif; ?>
                        </h2>
                        <small class="badge badge-ghost"><?= substr($new['created_at'], 0, 10); ?></small>
                        <!-- <p>If a dog chews shoes whose shoes does he choose?</p> -->
                        <div class="card-actions justify-end">
                            <a href="" class="btn btn-warning">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

</div>


<div class="block">
    <h1 class="text-center text-4xl font-bold mt-32">Foto</h1>
    <div class="overflow-hidden whitespace-nowrap mt-10" id="foto">
        <div class="marquee">
            <div class="marquee-content h-[40vh]">
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
    const carouselInner = document.querySelector('.carousel-inner');
    const slides = document.querySelectorAll('.carousel-item');
    let currentSlide = 0;
    const totalSlides = slides.length;

    const changeSlide = (direction) => {
        currentSlide += direction;
        if (currentSlide >= totalSlides) currentSlide = 0;
        if (currentSlide < 0) currentSlide = totalSlides - 1;
        updateCarousel();
    };

    const updateCarousel = () => {
        const offset = -currentSlide * 100;
        carouselInner.style.transform = `translateX(${offset}%)`;
    };

    document.getElementById('prevSlide').addEventListener('click', () => changeSlide(-1));
    document.getElementById('nextSlide').addEventListener('click', () => changeSlide(1));

    setInterval(() => changeSlide(1), 5000); // Change slide every 5 seconds
</script>

<?= $this->endSection(); ?>