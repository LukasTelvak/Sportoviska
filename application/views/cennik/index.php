<h1>Zoznam cenníkov</h1>
<br>
<a class="btn btn-success" href="<?php echo base_url() ?>cennik/create">Pridať cenník</a>
<br><br>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Číslo</th>
        <th>Hodinová sadzba</th>
        <th>Detail záznamu</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($cennik as $cennik_data): ?>
        <tr>
            <td><?php echo $cennik_data['idCennik']; ?></td>
            <td><?php echo $cennik_data['Hodinova_sadzba']; ?></td>
            <td>
                <a class="btn btn-info btn-xs" href="<?php echo site_url('/cennik/'.$cennik_data['idCennik']);?>"> Zobraziť detail</a>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
