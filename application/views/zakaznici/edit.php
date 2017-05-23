<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<?php echo form_open('zakaznici/update'); ?>
    <input type="hidden" name="id" value="<?php echo $zakaznik['idZakaznika']; ?>">
<div class="form-group">
    <label>Meno zákazníka:</label>
    <input type="meno" class="form-control" name="meno" value="<?php echo $zakaznik['meno']; ?>">
</div>
<div class="form-group">
    <label>Priezvisko zákazníka:</label>
    <input type="priezvisko" class="form-control" name="priezvisko" value="<?php echo $zakaznik['priezvisko']; ?>">
</div>
<div class="form-group">
    <label>Telefónne číslo:</label>
    <input type="telefon" class="form-control" name="telefon" value="<?php echo $zakaznik['telefon']; ?>">
</div>
<div class="form-group">
    <label>Adresa:</label>
    <input type="adresa" class="form-control" name="adresa" value="<?php echo $zakaznik['adresa']; ?>">
</div>
<div class="form-group">
    <label>Mesto:</label>
    <input type="mesto" class="form-control" name="mesto" value="<?php echo $zakaznik['mesto']; ?>">
</div>
<button type="submit" class="btn btn-success">Upraviť</button>
</form>
