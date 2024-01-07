<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
</head>
<body>
    <?= $this->extend('layout/default'); ?>

    <?= $this->section('content'); ?>
        <h1>Daftar Mobil</h1>

        <table>
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Tahun</th>
                    <th>Tarif Sewa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cars as $car): ?>
                    <tr>
                        <td><?= $car['brand']; ?></td>
                        <td><?= $car['model']; ?></td>
                        <td><?= $car['year']; ?></td>
                        <td><?= $car['rental_rate']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?= $this->endSection(); ?>
</body>
</html>
