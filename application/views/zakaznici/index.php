 <h1>Zoznam zákazníkov</h1>
    <br>
    <a class="btn btn-success" href="<?php echo base_url() ?>zakaznici/create">Pridať zákazníka</a>
    <br><br>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Číslo</th>
            <th>Meno a priezvisko</th>
            <th>Telefón</th>
            <th>Adresa</th>
            <th>Mesto</th>
            <th>Detail záznamu</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($zakaznici as $zakaznici_data): ?>
        <tr>
            <td><?php echo $zakaznici_data['idZakaznika']; ?></td>
            <td><?php echo $zakaznici_data['Meno']; ?></td>
            <td><?php echo $zakaznici_data['Telefon']; ?></td>
            <td><?php echo $zakaznici_data['Adresa']; ?></td>
            <td><?php echo $zakaznici_data['Mesto']; ?></td>
            <td>
            <a class="btn btn-info btn-xs" href="<?php echo site_url('/zakaznici/'.$zakaznici_data['idZakaznika']);?>"> Zobraziť detail</a>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
