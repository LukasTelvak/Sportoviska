<h1>Zoznam športovísk</h1>
<br>
<a class="btn btn-success" href="<?php echo base_url() ?>sportovisko/create">Pridať športovisko</a>
<br><br>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Číslo</th>
        <th>Názov</th>
        <th>Počet</th>
        <th>Vybavenie</th>
        <th>Hodinová sadzba</th>
        <th>Detail záznamu</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($sportovisko as $sportovisko_data): ?>
        <tr>
            <td><?php echo $sportovisko_data['idSportovisko']; ?></td>
            <td><?php echo $sportovisko_data['Nazov_sportoviska']; ?></td>
            <td><?php echo $sportovisko_data['Pocet']; ?></td>
            <td><?php echo $sportovisko_data['Nazov']; ?></td>
            <td><?php echo $sportovisko_data['Hodinova_sadzba']; ?></td>
            <td>
                <a class="btn btn-info btn-xs" href="<?php echo site_url('/sportovisko/'.$sportovisko_data['idSportovisko']);?>"> Zobraziť detail</a>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
