<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
</head>
<body>
    <!-- app/Views/registration/index.php -->

    <?= $this->extend('layout/default'); ?>

    <?= $this->section('content'); ?>

        <h1>Formulir Pendaftaran Pelanggan</h1>

        <?php if (session()->has('errors')): ?>
            <div style="color: red;">
                <?= implode('<br>', session('errors')); ?>
            </div>
        <?php endif; ?>

        <?php if (session()->has('success')): ?>
            <div style="color: green;">
                <?= session('success'); ?>
            </div>
        <?php endif; ?>

        <?= form_open('/registration/register'); ?>
            <label for="name">Nama:</label>
            <input type="text" name="name" value="<?= old('name'); ?>" required>
            <br>

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?= old('email'); ?>" required>
            <br>

            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <br>

            <button type="submit">Daftar</button>
        <?= form_close(); ?>

    <?= $this->endSection(); ?>

</body>
</html>
