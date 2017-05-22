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
            <th>Možnosti</th>
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
            <td>
            <a class="btn btn-info btn-xs" href="<?php echo site_url('/zakaznici/'.$zakaznik['idZakaznika']);?>"><span class="glyphicon glyphicon-search"></span> Zobraziť</a>
            <a class="btn btn-success btn-xs" href="<?php echo site_url('/zakaznici/'.$zakaznik['idZakaznika']);?>"><span class="glyphicon glyphicon-ok"></span> Upraviť</a>
            <a class="btn btn-danger btn-xs" href="<?php echo site_url('/zakaznici/'.$zakaznik['idZakaznika']);?>"
               onClick="return confirm('Ste si istý, že chcete daný záznam vymazať?')"><span class="glyphicon glyphicon-remove"></span> Vymazať</a>
        </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>