<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-4">
    <h1><?= $data['title']; ?></h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Nettowaarde (in miljoen $)</th>
                <th>Land</th>
                <th>Mobiel</th>
                <th>Leeftijd</th>
                <th>Status</th>
                <th>Opmerking</th>
                <th>Aangemaakt</th>
                <th>Gewijzigd</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['zangeressen'] as $zangeres) : ?>
                <tr>
                    <td><?= htmlspecialchars($zangeres->Naam); ?></td>
                    <td><?= htmlspecialchars($zangeres->Nettowaarde); ?></td>
                    <td><?= htmlspecialchars($zangeres->Land); ?></td>
                    <td><?= htmlspecialchars($zangeres->Mobiel); ?></td>
                    <td><?= htmlspecialchars($zangeres->Leeftijd); ?></td>
                    <td><?= $zangeres->IsActief ? 'Actief' : 'Inactief'; ?></td>
                    <td><?= htmlspecialchars($zangeres->Opmerking ?? ''); ?></td>
                    <td><?= htmlspecialchars($zangeres->DatumAangemaakt); ?></td>
                    <td><?= htmlspecialchars($zangeres->DatumGewijzigd); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>