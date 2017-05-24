<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<?php echo form_open('rezervacia/update'); ?>
<input type="hidden" name="idRezervacia" value="<?php echo $rezervacia_data['idRezervacia']; ?>">
<div class="form-group">
    <label for="email">Názov:</label>
    <input type="nazov" class="form-control" name="nazov" value="<?php echo $rezervacia_data['Nazov']; ?>">
</div>
<div class="form-group">
    <label for="email">Počet kusov:</label>
    <input type="pocet_ks" class="form-control" name="pocet_ks" value="<?php echo $rezervacia_data['Pocet_ks']; ?>">
</div>
<button type="submit" class="btn btn-success">Upraviť</button> <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Späť</button>
</form>