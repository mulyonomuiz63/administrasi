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