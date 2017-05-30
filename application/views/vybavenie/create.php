<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<?php echo form_open('http://ltelvak17.student.ki.fpv.ukf.sk/vybavenie/create'); ?>
<div class="form-group">
    <label for="email">Názov:</label>
    <input type="nazov" class="form-control" name="nazov">
</div>
<div class="form-group">
    <label for="email">Počet kusov:</label>
    <input type="pocet_ks" class="form-control" name="pocet_ks">
</div>
<button type="submit" class="btn btn-success">Pridať</button> <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Späť</button>
</form>