<!-- app/Views/layout/default.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Aplikasi Rental Mobil'; ?></title>
</head>
<body>

    <!-- Sertakan Navbar -->
    <?= $this->include('includes/navbar'); ?>

    <!-- Konten Halaman -->
    <?= $this->renderSection('content'); ?>

</body>
</html>
