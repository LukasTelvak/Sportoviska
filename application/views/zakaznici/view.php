<?php if (!defined( 'BASEPATH')) exit('No direct script acces allowed'); ?>
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1><?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <?php foreach ($zakaznik as $key => $value):?>
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
            <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Späť</button>
        </div>
    </div>
    <div class="row">

    </div>
</div>
