<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
</head>

<?php if (session()->get('error')): ?>
    <div class="flex justify-center items-center -translate-y-24 transition-all duration-200" id="notip">
        <div role="alert" class="alert alert-error w-1/4 mx-36 ">
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
            <span>
                <h1><?= session()->get('error'); ?></h1>
            </span>
        </div>
    </div>
<?php endif; ?>

<?php if (session()->get('success')): ?>
    <div class="flex justify-center items-center -translate-y-24 transition-all duration-200" id="notip">
        <div role="alert" class="alert alert-info w-1/4 mx-36 ">
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
            <span>
                <h1><?= session()->get('success'); ?></h1>
            </span>
        </div>
    </div>
<?php endif; ?>

<body>
    <form action="/login" method="post" class="w-full flex-col flex justify-center items-center min-h-screen ">
        <?= csrf_field() ?>
        <a href="/">
            <img src="img/logo.png" alt="" class="w-32 h-32">
        </a>
        <h1 class="text-2xl font-bold mt-5">Selamat Datang</h1>
        <label class="input input-bordered flex items-center gap-2 mt-5">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 16 16"
                fill="currentColor"
                class="h-4 w-4 opacity-70">
                <path
                    d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                <path
                    d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
            </svg>
            <input type="email" name="email" id="email" class="grow" placeholder="contoh@example.com" value="<?= old('email'); ?>" />
        </label>
        <?php if (session()->get('errors') && isset(session()->get('errors')['email'])): ?>
            <small class="text-red-600 text-right">
                <?= session()->get('errors')['email'] ?>
            </small>
        <?php endif; ?>
        <label class="input input-bordered flex items-center gap-2 mt-2">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 16 16"
                fill="currentColor"
                class="h-4 w-4 opacity-70">
                <path
                    fill-rule="evenodd"
                    d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                    clip-rule="evenodd" />
            </svg>
            <input type="password" name="password" id="password" class="grow" placeholder="Password" />
        </label>
        <?php if (session()->get('errors') && isset(session()->get('errors')['password'])): ?>
            <small class="text-red-600 text-right">
                <?= session()->get('errors')['password'] ?>
            </small>
        <?php endif; ?>
        <button class="btn btn-primary mt-5" type="submit">Login</button>
        <small class="mt-5">Tidak punya akun? <a href="/register" class="text-blue-500 underline">daftar</a></small>
    </form>

    <script>
        setTimeout(() => {
            document.getElementById('notip').style.transform = 'translateY(100px)';
        }, 10);
    </script>
</body>

</html>