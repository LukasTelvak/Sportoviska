<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<?php echo form_open('vybavenie/update'); ?>
<input type="hidden" name="idVybavenie" value="<?php echo $vybavenie_data['idVybavenie']; ?>">
<div class="form-group">
    <label for="email">Názov:</label>
    <input type="nazov" class="form-control" name="nazov" value="<?php echo $vybavenie_data['Nazov']; ?>">
</div>
<div class="form-group">
    <label for="email">Počet kusov:</label>
    <input type="pocet_ks" class="form-control" name="pocet_ks" value="<?php echo $vybavenie_data['Pocet_ks']; ?>">
</div>
<button type="submit" class="btn btn-success">Upraviť</button> <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Späť</button>
</form>