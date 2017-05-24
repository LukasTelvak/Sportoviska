<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<?php echo form_open('sportovisko/create'); ?>
<div class="form-group">
    <label>Názov:</label>
    <input type="nazov" class="form-control" name="nazov">
</div>
<div class="form-group">
    <label>Počet:</label>
    <input type="pocet" class="form-control" name="pocet">
</div>
<div class="form-group">
    <label>Vybavenie:</label>
    <select name="Vybavenie_idVybavenie" class="form-control">
        <?php foreach($vybavenie as $vybavenia): ?>
            <option value="<?php echo $vybavenia['idVybavenie']; ?>"><?php echo $vybavenia['Nazov']; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="form-group">
    <label>Hodinova sadzba:</label>
    <select name="Cennik_idCennik" class="form-control">
        <?php foreach($cennik as $cenniky): ?>
            <option value="<?php echo $cenniky['idCennik']; ?>"><?php echo $cenniky['Hodinova_sadzba']; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<button type="submit" class="btn btn-success">Pridať</button> <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Späť</button>
</form>