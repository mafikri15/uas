<!DOCTYPE html>
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>fligt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("css/styles.css"); ?>">
</head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">flight</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#"></a></li>
                        <li class="nav-item"><a class="nav-link" href="Pemesanan">Pemesanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="Account_Bank">Akun Bank</a></li>
                        <li class="nav-item"><a class="nav-link" href="Maskapai">Maskapai</a></li>
                        <li class="nav-item"><a class="nav-link" href="Pembayaran">Pembayaran</a></li>
                        <li class="nav-item"><a class="nav-link" href="Penerbangan">Penerbangan</a></li>
                        <li class="nav-item"><a class="nav-link" href="Login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Flight</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            </div>
        </header>

<body>


    
    <?= $this->renderSection('content'); ?>

    <footer class="footer py-4">
            <div class="container">
                    <div class="center-text">Copyright &copy; Your Website 2023</div>
            </div>
        </footer>

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<!-- -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>