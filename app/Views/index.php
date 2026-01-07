<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Iron Software – .NET Document & Utility Libraries for C#, OCR, PDF, Excel, Word & More</title>

    <meta name="description"
        content="Iron Software provides a powerful suite of .NET libraries for C#, including PDF creation & editing, OCR, Excel and Word APIs, QR & barcode support, and utilities to streamline document and data workflows. Trusted by developers worldwide with millions of NuGet downloads.">

    <meta name="keywords"
        content="Iron Software, .NET libraries, C# PDF library, OCR library, Excel API, Word API, barcode, QR code, NuGet, .NET Core tools">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Iron Software – .NET Document & Developer Libraries">
    <meta property="og:description"
        content="Powerful .NET libraries for PDF, OCR, Excel, Word, QR & barcode support in C#. Trusted by developers worldwide with extensive documentation and NuGet downloads.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ironsoftware.com/">
    <meta property="og:image" content="<?= base_url('assets/img/hero/hero-graphic.png') ?>">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/favicon_io/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/favicon_io/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/favicon_io/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/img/favicon_io/site.webmanifest') ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css') ?>" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>" />
</head>

<body>

    <!-- ================= Hero Stack ================= -->
    <div class="hero-stack">

        <!-- ================= Header ================= -->
        <header class="site-header">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid px-4">

                    <!-- Logo -->
                    <a class="navbar-brand" href="#">
                        <img src="<?= base_url('assets/img/logo/nav-logo.png') ?>" alt="Iron Software Logo"
                            class="nav-logo" />
                    </a>

                    <!-- Mobile Toggle -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                        aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="mainNav">
                        <ul class="navbar-nav align-items-lg-center nav-left-group">

                            <!-- Products Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Products
                                </a>

                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="productsDropdown">
                                    <li><a class="dropdown-item" href="#">IronPDF</a></li>
                                    <li><a class="dropdown-item" href="#">IronWord</a></li>
                                    <li><a class="dropdown-item" href="#">IronZip</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Career</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </nav>
        </header>

        <!-- ================= Hero Section ================= -->
        <section class="hero-section">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row align-items-center">

                            <div class="col-lg-8" style="margin-top: -30px;">
                                <div class="product-brand mb-4">
                                    <img src="<?= base_url('assets/img/logo/ironpdf-logo-only.svg') ?>" alt="IronPDF"
                                        class="product-logo d-inline-block align-middle me-2" style="height: 20px;"
                                        width="20" height="20">
                                    <span
                                        class="product-name align-middle"><?= $content['hero']['product_name_prefix'] ?><span
                                            class="text-pink"><?= $content['hero']['product_name_highlight'] ?></span>
                                        <small><?= $content['hero']['product_name_suffix'] ?></small></span>
                                </div>

                                <p class="hero-eyebrow">
                                    <?= $content['hero']['eyebrow'] ?>
                                </p>

                                <h1 class="hero-title">
                                    <span class="title-main"><?= $content['hero']['title_main'] ?></span><br />
                                    <span class="title-sub"><?= $content['hero']['title_sub'] ?></span>
                                </h1>

                                <p class="coming-soon-text"><?= $content['hero']['coming_soon'] ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- ================= Signup CTA (Hero) ================= -->
        <section class="signup-section signup-section--hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="signup-box">

                            <h2><?= $content['signup_hero']['title'] ?></h2>
                            <p class="fw-bold"><?= $content['signup_hero']['subtitle'] ?></p>

                            <form class="signup-form" action="#" method="post">
                                <div class="signup-input-wrapper">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Enter email address" aria-label="Email address" required />
                                    <button type="submit" class="btn btn-primary">
                                        <?= $content['signup_hero']['button_text'] ?> <i
                                            class="fas fa-chevron-right ms-2" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </form>

                            <p class="signup-note">
                                <span class="badge badge-coming-soon"># Coming Soon</span>
                                <?= $content['hero']['coming_soon_others_intro'] ?>
                                <?php foreach ($content['hero']['coming_soon_others'] as $other): ?>
                                    <strong><?= $other ?></strong> |
                                <?php endforeach; ?>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Decorative Hero Image -->
        <img src="<?= base_url('assets/img/hero/hero-graphic.png') ?>" alt="" class="hero-image" />

    </div>

    <!-- ================= Main Content ================= -->
    <main>

        <!-- Product Overview -->
        <section class="product-overview">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">

                        <div class="product-overview-title-wrap">
                            <h2 class="section-title"><?= $content['product_overview']['title'] ?></h2>
                            <img src="<?= base_url('assets/img/badges/coming-soon.svg') ?>" alt="Coming Soon"
                                class="coming-soon-sticker" />
                        </div>

                        <div class="feature-horizontal-list">
                            <?php foreach ($content['product_overview']['features'] as $index => $feature): ?>
                                <span class="feature-item"><span class="feature-hash">#</span> <?= $feature ?></span>
                                <?php if ($index < count($content['product_overview']['features']) - 1): ?>
                                    <span class="feature-separator">|</span>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>

            </div> <!-- End Container -->

            <div class="overview-description-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="overview-description">
                                <p>
                                    <?php printf(
                                        $content['product_overview']['description_p1'],
                                        '<strong>' . $content['product_overview']['description_p1_strong'] . '</strong>'
                                    ); ?>
                                </p>
                                <p>
                                    <?php printf(
                                        $content['product_overview']['description_p2'],
                                        '<strong>' . $content['product_overview']['description_p2_strong'] . '</strong>'
                                    ); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why C++ PDF Library -->
        <section class="why-cpp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row align-items-center">

                            <div class="col-lg-5 text-start mb-5 mb-lg-0">
                                <div class="conversion-graphic">
                                    <div class="icon-html-wrap">
                                        <img src="<?= base_url('assets/img/icons/html.svg') ?>" alt="HTML"
                                            class="icon-html" width="140" height="140" />
                                    </div>
                                    <img src="<?= base_url('assets/img/icons/cpp.svg') ?>" alt="Arrow with C++"
                                        class="conversion-arrow-svg" />
                                    <div class="icon-pdf-wrap">
                                        <img src="<?= base_url('assets/img/icons/pdf.svg') ?>" alt="PDF"
                                            class="icon-pdf" width="140" height="140" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <h2 class="section-title mb-4">
                                    <strong><?= $content['why_cpp']['title_prefix'] ?></strong> <span
                                        class="text-highlight"><?= $content['why_cpp']['title_highlight'] ?></span>
                                </h2>
                                <div class="section-content">
                                    <p>
                                        <?= $content['why_cpp']['p1'] ?>
                                    </p>
                                    <p>
                                        <?php printf(
                                            $content['why_cpp']['p2'],
                                            '<strong>' . $content['why_cpp']['p2_strong'] . '</strong>'
                                        ); ?>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Early Access -->
        <section class="early-access">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">

                        <h2 class="section-title mb-4"><?= $content['early_access']['title_prefix'] ?> <span
                                class="text-highlight"><?= $content['early_access']['title_highlight'] ?></span></h2>
                        <p class="early-access-intro mb-5">
                            <?= $content['early_access']['intro'] ?>
                        </p>

                        <div class="access-cards-row">
                            <?php foreach ($content['early_access']['cards'] as $card): ?>
                                <div class="access-card">
                                    <span class="card-badge <?= $card['badge_class'] ?>"><?= $card['badge'] ?></span>
                                    <div class="card-product-info">
                                        <span
                                            class="card-brand"><strong><?= $card['prod_prefix'] ?></strong><?= $card['prod_main'] ?></span>
                                        <span class="card-for"><?= $card['for'] ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- Final Signup -->
        <section class="signup-section signup-section--bottom">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">

                        <h2 class="section-title mb-5"><?= $content['signup_bottom']['title_prefix'] ?> <span
                                class="text-highlight"><?= $content['signup_bottom']['title_highlight'] ?></span>
                        </h2>

                        <form class="signup-form" action="#" method="post">
                            <div class="signup-input-wrapper mx-auto">
                                <input type="email" name="email" class="form-control" placeholder="Enter email address"
                                    aria-label="Email address" required />
                                <button type="submit" class="btn btn-primary">
                                    <?= $content['signup_bottom']['button_text'] ?> <i class="fas fa-chevron-right ms-2"
                                        aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- ================= Footer ================= -->
    <footer class="site-footer">
        <div class="container text-center">
            <small>© Iron Software. All rights reserved.</small>
        </div>
    </footer>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4 border-0 shadow-lg"
                style="border-radius: 20px; background-color: #573757; color: white;">
                <div class="modal-body">
                    <div class="mb-4 text-white" style="font-size: 4rem;">
                        <i class="fas fa-paper-plane animate-paper-plane"></i>
                    </div>
                    <h3 class="mb-3 fw-bold">Subscribed!</h3>
                    <p class="mb-4" style="color: rgba(255,255,255,0.8);">Thank you for signing up. We'll keep you
                        updated!</p>
                    <button type="button" class="btn btn-primary px-5 py-2 rounded-pill"
                        data-bs-dismiss="modal" style="background-color: #f03b6e; border-color: #f03b6e;">OK</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>