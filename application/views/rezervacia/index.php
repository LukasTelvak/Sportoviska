<h1>Zoznam rezervácií</h1>
<br>
<a class="btn btn-success" href="<?php echo base_url() ?>rezervacia/create">Pridať rezerváciu</a>
<br><br>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Číslo</th>
        <th>Dátum</th>
        <th>Čas</th>
        <th>Počet ľudí</th>
        <th>Detail záznamu</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($rezervacia as $rezervacia_data): ?>
        <tr>
            <td><?php echo $rezervacia_data['idRezervacia']; ?></td>
            <td><?php echo $rezervacia_data['Datum']; ?></td>
            <td><?php echo $rezervacia_data['Cas']; ?></td>
            <td><?php echo $rezervacia_data['Pocet_ludi']; ?></td>
            <td>
                <a class="btn btn-info btn-xs" href="<?php echo site_url('/rezervacia/'.$rezervacia_data['idRezervacia']);?>"> Zobraziť detail</a>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>