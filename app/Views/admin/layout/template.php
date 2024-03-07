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
        <?= $this->renderSection('content'); ?>
    </main>
    <!-- End Content -->

    <!-- ======= Footer ======= -->
    <?= $this->include('admin/layout/_footer'); ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <?= $this->include('admin/layout/_script'); ?>
</body>

</html>