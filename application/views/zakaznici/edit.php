<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<?php echo form_open('http://ltelvak17.student.ki.fpv.ukf.sk/zakaznici/update'); ?>
<input type="hidden" name="idZakaznika" value="<?php echo $zakaznici_data['idZakaznika']; ?>">
<div class="form-group">
    <label>Meno zákazníka:</label>
    <input type="meno" class="form-control" name="meno" value="<?php echo $zakaznici_data['Meno']; ?>">
</div>
<div class="form-group">
    <label>Telefónne číslo:</label>
    <input type="telefon" class="form-control" name="telefon" value="<?php echo $zakaznici_data['Telefon']; ?>">
</div>
<div class="form-group">
    <label>Adresa:</label>
    <input type="adresa" class="form-control" name="adresa" value="<?php echo $zakaznici_data['Adresa']; ?>">
</div>
<div class="form-group">
    <label>Mesto:</label>
    <input type="mesto" class="form-control" name="mesto" value="<?php echo $zakaznici_data['Mesto']; ?>">
</div>
<button type="submit" class="btn btn-success">Upraviť</button> <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Späť</button>
</form>
