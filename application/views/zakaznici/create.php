<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<?php echo form_open('zakaznici/create'); ?>
    <div class="form-group">
        <label for="email">Meno zákazníka:</label>
        <input type="meno" class="form-control" name="meno">
    </div>
    <div class="form-group">
        <label for="pwd">Telefónne číslo:</label>
        <input type="telefon" class="form-control" name="telefon">
    </div>
    <div class="form-group">
        <label for="pwd">Adresa:</label>
        <input type="adresa" class="form-control" name="adresa">
    </div>
    <div class="form-group">
        <label for="pwd">Mesto:</label>
        <input type="mesto" class="form-control" name="mesto">
    </div>
    <button type="submit" class="btn btn-success">Pridať</button> <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Späť</button>
</form>
