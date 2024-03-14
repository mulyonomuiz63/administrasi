<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('admin/layout/_css'); ?>
</head>

<body>


    <!-- ======= Header ======= -->
    <?= $this->include('admin/layout/_header'); ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?= $this->include('admin/layout/_sidebar'); ?>
    <!-- End Sidebar -->

    <!-- ======= content ======= -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1><?= $menu; ?></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(strtolower($menu)); ?>"><?= $menu; ?></a></li>
                    <?php if ($aksi != '') { ?>
                        <li class="breadcrumb-item active"><?= $aksi; ?></li>
                    <?php } ?>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <?= $this->renderSection('content'); ?>
    </main>
    <!-- End Content -->

    <!-- ======= Footer ======= -->
    <?= $this->include('admin/layout/_footer'); ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <?= $this->include('admin/layout/_script'); ?>
    <script type="text/javascript">
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true

        }
    </script>
    <?= $this->renderSection('script'); ?>
</body>

</html>