<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-4">
    <h1><?= $data['title']; ?></h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Nettowaarde (in miljoen - $)</th>
                <th>Land</th>
                <th>Mobiel</th>
                <th>Leeftijd</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            usort($data['zangeressen'], function($a, $b) {
                return $b->Nettowaarde - $a->Nettowaarde;
            });
            
            foreach ($data['zangeressen'] as $zangeres) : ?>
                <tr>
                    <td><?= htmlspecialchars($zangeres->Naam); ?></td>
                    <td class=""><?= htmlspecialchars($zangeres->Nettowaarde); ?></td>
                    <td><?= htmlspecialchars($zangeres->Land); ?></td>
                    <td><?= htmlspecialchars($zangeres->Mobiel); ?></td>
                    <td class="r"><?= htmlspecialchars($zangeres->Leeftijd); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>