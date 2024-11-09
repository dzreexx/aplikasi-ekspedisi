<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('src/output.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        #foto .marquee {
            display: inline-flex;
            animation: marquee 20s linear infinite;
        }

        .marquee-content {
            display: flex;
            gap: 10px;
        }

        .carousel {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-inner {
            display: flex;
            transition: transform 1s ease-in-out;
        }

        .carousel-item {
            min-width: 100%;
            flex-shrink: 0;
        }

        .carousel-controls {
            position: absolute;
            top: 50%;
            left: 5px;
            right: 5px;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            z-index: 10;
        }

        .carousel-controls a {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>
    <title><?= $title ?></title>
</head>

<body>

    <?= $this->renderSection('content'); ?>

</body>

</html>