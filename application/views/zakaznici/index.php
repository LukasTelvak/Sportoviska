<div class="container">
    <h1>Zoznam zákazníkov</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Číslo</th>
            <th>Meno</th>
            <th>Priezvisko</th>
            <th>Telefón</th>
            <th>Adresa</th>
            <th>Mesto</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($zakaznici as $zakaznik): ?>
        <tr>
            <td><?php echo $zakaznik['idZakaznika']; ?></td>
            <td><?php echo $zakaznik['Meno']; ?></td>
            <td><?php echo $zakaznik['Priezvisko']; ?></td>
            <td><?php echo $zakaznik['Telefon']; ?></td>
            <td><?php echo $zakaznik['Adresa']; ?></td>
            <td><?php echo $zakaznik['Mesto']; ?></td>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>