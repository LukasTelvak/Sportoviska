<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<?php echo form_open('http://ltelvak17.student.ki.fpv.ukf.sk/cennik/update'); ?>
<input type="hidden" name="idCennik" value="<?php echo $cennik_data['idCennik']; ?>">
<div class="form-group">
    <label for="email">Hodinová sadzba:</label>
    <input type="hodinova_sadzba" class="form-control" name="hodinova_sadzba" value="<?php echo $cennik_data['Hodinova_sadzba']; ?>">
</div>
<button type="submit" class="btn btn-success">Upraviť</button> <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Späť</button>
</form>