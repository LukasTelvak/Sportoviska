<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<?php echo form_open('sportovisko/update'); ?>
<input type="hidden" name="idSportovisko" value="<?php echo $sportovisko_data['idSportovisko']; ?>">
<div class="form-group">
    <label for="email">Názov:</label>
    <input type="nazov" class="form-control" name="nazov" value="<?php echo $sportovisko_data['Nazov']; ?>">
</div>
<div class="form-group">
    <label for="email">Počet:</label>
    <input type="pocet" class="form-control" name="pocet" value="<?php echo $sportovisko_data['Pocet']; ?>">
</div>
<button type="submit" class="btn btn-success">Upraviť</button> <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Späť</button>
</form>