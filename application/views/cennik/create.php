<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<?php echo form_open('http://ltelvak17.student.ki.fpv.ukf.sk/cennik/create'); ?>
<div class="form-group">
    <label for="email">Hodinová sadzba:</label>
    <input type="hodinova_sadzba" class="form-control" name="hodinova_sadzba">
</div>
<button type="submit" class="btn btn-success">Pridať</button> <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Späť</button>
</form>