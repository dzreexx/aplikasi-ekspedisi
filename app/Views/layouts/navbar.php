<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<div class="navbar bg-base-100 block z-20 fixed w-full px-10 shadow-md">
    <div class="flex justify-between items-center">
        <div>
            <a href="/">
                <img src="img/logo.png" alt="" class="h-14 w-14">
            </a>
        </div>
        <ul class="flex justify-between items-center gap-10 font-bold">
            <li class="hover:text-yellow-500"><a href="#">Home</a></li>
            <li class="hover:text-yellow-500"><a href="#profile">Profile</a></li>
            <li class="hover:text-yellow-500"><a href="#berita">Berita</a></li>
            <li class="hover:text-yellow-500"><a href="#foto">Foto</a></li>
            <?php if (session()->get('isLoggedIn') == true): ?>
                <li class="hover:text-yellow-500"><a href="/dashboard">Dashboard</a></li>
                <li class="btn btn-warning"><a href="/logout">Logout</a></li>
            <?php else: ?>
                <li class="btn btn-warning"><a href="/login">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>

<div>
    <?= $this->renderSection('content'); ?>
</div>

<footer class="footer footer-center bg-black text-slate-200 p-10">
    <aside>
        <div class="flex justify-center items-center">
            <img src="img/logo.png" alt="" class="w-1/3 h-1/3">
        </div>
        <p class="font-bold">
            Project Qu.
            <br />
            Muhamad Zulfikar Ali 2024
        </p>
        <p>Copyright © 27 September 2024 - All right reserved</p>
    </aside>
    <nav>
        <div class="grid grid-flow-col gap-4">
            <a>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="fill-current">
                    <path
                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                </svg>
            </a>
            <a>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="fill-current">
                    <path
                        d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                </svg>
            </a>
            <a>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    class="fill-current">
                    <path
                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                </svg>
            </a>
        </div>
    </nav>
</footer>

<?= $this->endSection(); ?>