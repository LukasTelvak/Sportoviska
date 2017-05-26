<h1>Zoznam vybavenia</h1>
<br>
<a class="btn btn-success" href="<?php echo base_url() ?>vybavenie/create">Pridať vybavenie</a>
<br><br>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Číslo</th>
        <th>Názov</th>
        <th>Počet kusov</th>
        <th>Detail záznamu</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($vybavenie as $vybavenie_data): ?>
        <tr>
            <td><?php echo $vybavenie_data['idVybavenie']; ?></td>
            <td><?php echo $vybavenie_data['Nazov']; ?></td>
            <td><?php echo $vybavenie_data['Pocet_ks']; ?></td>
            <td>
                <a class="btn btn-info btn-xs" href="<?php echo site_url('/vybavenie/'.$vybavenie_data['idVybavenie']);?>"> Zobraziť detail</a>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="pagination-links">
    <?php echo $this->pagination->create_links(); ?>
</div>