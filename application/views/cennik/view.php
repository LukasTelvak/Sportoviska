<?php if (!defined( 'BASEPATH')) exit('No direct script acces allowed'); ?>
<div class="row">
    <div class="page-header">
        <h1><?php echo $title; ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <?php foreach ($cennik_data as $key => $value):?>
                <div>
                    <dl class="dl-horizontal">
                        <dt><?php print_r ($key);?></dt>
                        <dd><?php print_r ($value);?></dd>
                    </dl>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-md-4">
        <button type="button" class="btn btn-default btn-xs" onclick="javascript:window.history.go(-1);">Späť</button>
        <br>
        <a class="btn btn-success btn-xs" href="<?php echo base_url(); ?>cennik/edit/<?php echo $cennik_data['idCennik']; ?>">Upraviť</a>
        <br>
        <?php echo form_open('cennik/delete/'.$cennik_data['idCennik']); ?><input type="submit" value="Vymazať" class="btn btn-danger btn-xs">
    </div>
</div>
<div class="row">

</div>
