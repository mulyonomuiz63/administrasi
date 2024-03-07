<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('admin/layout/_css'); ?>
</head>

<body>


    <!-- ======= content ======= -->
    <main>
        <div class="container">
            <?= $this->renderSection('content'); ?>
        </div>
    </main>
    <!-- End Content -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <?= $this->include('admin/layout/_script'); ?>
</body>

</html>