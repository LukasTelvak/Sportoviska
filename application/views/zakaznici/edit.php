<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<?php echo form_open('zakaznici/update'); ?>
<input type="hidden" name="idZakaznika" value="<?php echo $zakaznik['idZakaznika']; ?>">
<div class="form-group">
    <label>Meno zákazníka:</label>
    <input type="meno" class="form-control" name="meno" value="<?php echo $zakaznik['Meno']; ?>">
</div>
<div class="form-group">
    <label>Priezvisko zákazníka:</label>
    <input type="priezvisko" class="form-control" name="priezvisko" value="<?php echo $zakaznik['Priezvisko']; ?>">
</div>
<div class="form-group">
    <label>Telefónne číslo:</label>
    <input type="telefon" class="form-control" name="telefon" value="<?php echo $zakaznik['Telefon']; ?>">
</div>
<div class="form-group">
    <label>Adresa:</label>
    <input type="adresa" class="form-control" name="adresa" value="<?php echo $zakaznik['Adresa']; ?>">
</div>
<div class="form-group">
    <label>Mesto:</label>
    <input type="mesto" class="form-control" name="mesto" value="<?php echo $zakaznik['Mesto']; ?>">
</div>
<button type="submit" class="btn btn-success">Upraviť</button> <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Späť</button>
</form>
