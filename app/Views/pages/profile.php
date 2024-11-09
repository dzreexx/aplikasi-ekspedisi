<?= $this->extend('layouts/layoutUser'); ?>
<?= $this->section('content'); ?>
<div class="breadcrumbs text-sm translate-y-20 px-56">
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
                Company Profile
            </span>
        </li>
    </ul>
</div>
<div class="translate-y-20 px-56 flex justify-center items-center gap-5 ">
    <div class="w-1/2">
        <h1 class="font-bold text-3xl mb-5">Tentang Kami</h1>
        <p class="text-justify">MZA adalah penyedia layanan pengiriman barang yang terpercaya dan profesional, berdiri sejak 2024.
            Kami berkomitmen untuk memberikan solusi pengiriman yang efisien, cepat, dan aman bagi pelanggan kami.
            Dengan pengalaman bertahun-tahun dalam industri logistik, kami memahami pentingnya pengiriman yang tepat waktu dan
            handal untuk mendukung kebutuhan bisnis dan pribadi Anda.</p>
    </div>
    <div class="w-1/2 h-[400px] overflow-hidden">
        <img src="img/pelayanan.jpg" alt="" class="w-full ">
    </div>
</div>

<div class="translate-y-32 px-56 py-36 bg-slate-100">
    <h1 class=" text-center font-bold text-3xl">Visi dan Misi</h1>
    <p class="text-center mt-5 mx-20">Visi kami adalah menjadi penyedia jasa pengiriman terkemuka yang dikenal karena keandalan dan kualitas
        layanan. Misi kami adalah memberikan solusi pengiriman yang efisien
        dan inovatif, memastikan setiap paket sampai ke tujuan dengan tepat waktu dan dalam kondisi baik.</p>
</div>

<div class="translate-y-56 px-56">
    <h1 class="text-center font-bold text-3xl">Layanan Kami</h1>
    <div class="mt-10 flex h-56 justify-between">
        <div class="border border-black hover:shadow-md hover:shadow-warning hover:border-warning transition-colors duration-200 w-[24%] h-[150%] p-10">
            <div class="flex justify-center items-center hover:-translate-y-3 hover:text-warning transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
                </svg>
            </div>
            <h1 class="text-center font-bold text-xl mt-5">Pengiriman Barang</h1>
            <p class="mt-2 text-center">Layanan pengiriman barang dengan berbagai pilihan waktu, mulai dari pengiriman reguler hingga ekspres.</p>
        </div>
        <div class="border border-black hover:shadow-md hover:shadow-warning hover:border-warning transition-colors duration-200 w-[24%] h-[150%] p-10">
            <div class="flex justify-center items-center hover:-translate-y-3 hover:text-warning transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                </svg>
            </div>
            <h1 class="text-center font-bold text-xl mt-5">Pengiriman Dokumen</h1>
            <p class="mt-2 text-center">Layanan khusus untuk pengiriman dokumen penting dengan jaminan keamanan dan kecepatan.</p>
        </div>
        <div class="border border-black hover:shadow-md hover:shadow-warning hover:border-warning transition-colors duration-200 w-[24%] h-[150%] p-10">
            <div class="flex justify-center items-center hover:-translate-y-3 hover:text-warning transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5" />
                </svg>
            </div>
            <h1 class="text-center font-bold text-xl mt-5">Layanan Antar Jemput</h1>
            <p class="mt-2 text-center">Menyediakan layanan antar jemput untuk memudahkan pelanggan dalam mengirim dan menerima barang.</p>
        </div>
        <div class="border border-black hover:shadow-md hover:shadow-warning hover:border-warning transition-colors duration-200 w-[24%] h-[150%] p-10">
            <div class="flex justify-center items-center hover:-translate-y-3 hover:text-warning transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
            </div>
            <h1 class="text-center font-bold text-xl mt-5">Pelacakan Pengiriman</h1>
            <p class="mt-2 text-center">Sistem pelacakan real-time yang memungkinkan pelanggan untuk memantau status pengiriman mereka secara langsung.</p>
        </div>
    </div>
</div>

<div class="translate-y-72 py-10 mt-40 px-56 h-[500px] bg-slate-100">
    <h1 class="text-center font-bold text-3xl">Keunggulan Kami</h1>
    <div class="flex justify-center h-[600px] mt-10 gap-3">
        <div class="h-[60%] bg-white w-1/4 overflow-hidden p-3">
            <div class="h-[70%] overflow-hidden">
                <img src="img/armada.jpg" alt="" class="min-w-[500px] hover:min-w-[550px] transition-all duration-200 -translate-x-10">
            </div>
            <h1 class="text-start font-bold text-md mt-3">Kami menggunakan armada kendaraan yang terawat dengan baik untuk
                memastikan pengiriman yang aman dan tepat waktu.</h1>
        </div>
        <div class="h-[60%] bg-white w-1/4 overflow-hidden p-3">
            <div class="h-[70%] overflow-hidden">
                <img src="img/teknologi.jpeg" alt="" class="min-w-[500px] hover:min-w-[550px] transition-all duration-200 -translate-x-10">
            </div>
            <h1 class="text-start font-bold text-md mt-3">Menggunakan sistem manajemen pengiriman dan pelacakan
                terkini untuk meningkatkan efisiensi dan transparansi.</h1>
        </div>
        <div class="h-[60%] bg-white w-1/4 overflow-hidden p-3">
            <div class="h-[70%] overflow-hidden">
                <img src="img/profesional.avif" alt="" class="min-w-[500px] hover:min-w-[550px] transition-all duration-200 -translate-x-20">
            </div>
            <h1 class="text-start font-bold text-md mt-3">Dikelola oleh tim yang berpengalaman dan terlatih dalam industri
                logistik, siap memberikan layanan terbaik kepada pelanggan.</h1>
        </div>
        <div class="h-[60%] bg-white w-1/4 overflow-hidden p-3">
            <div class="h-[70%] overflow-hidden">
                <img src="img/jaringan.jpg" alt="" class="min-w-[500px] hover:min-w-[550px] transition-all duration-200 -translate-x-10">
            </div>
            <h1 class="text-start font-bold text-md mt-3">Kami menggunakan armada kendaraan yang terawat dengan baik untuk
                memastikan pengiriman yang aman dan tepat waktu.</h1>
        </div>
    </div>
</div>
<div class="translate-y-96 px-56">
    <h1 class="font-bold text-3xl">Kontak Kami</h1>
    <div class="flex justify-between items-center mt-5">
        <p>Untuk informasi lebih lanjut mengenai layanan kami atau untuk melakukan pemesanan, silakan hubungi kami di:</p>
        <div class="flex justify-center items-center gap-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
            </svg>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>