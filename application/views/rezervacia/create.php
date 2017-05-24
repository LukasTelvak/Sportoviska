<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<?php echo form_open('rezervacia/create'); ?>
<div class="form-group">
    <label for="email">Dátum:</label>
    <input type="datum" class="form-control" name="datum">
</div>
<div class="form-group">
    <label for="email">Čas:</label>
    <input type="cas" class="form-control" name="cas">
</div>
<div class="form-group">
    <label for="email">Počet ľudí:</label>
    <input type="pocet_ludi" class="form-control" name="pocet_ludi">
</div>
<div class="form-group">
    <label>Zákazník:</label>
    <select name="Zakaznik_idZakaznik" class="form-control">
        <?php foreach($zakaznici as $zakaznik): ?>
            <option value="<?php echo $zakaznik['idZakaznika']; ?>"><?php echo $zakaznik['Meno']; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="form-group">
    <label>Športovisko:</label>
    <select name="Sportovisko_idSportovisko" class="form-control">
        <?php foreach($sportovisko as $sportoviska): ?>
            <option value="<?php echo $sportoviska['idSportovisko']; ?>"><?php echo $sportoviska['Nazov_sportoviska']; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<button type="submit" class="btn btn-success">Pridať</button> <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Späť</button>
</form>