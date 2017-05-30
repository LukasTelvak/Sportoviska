<h1><?= $title; ?> </h1>

<?php echo validation_errors(); ?>

<?php echo form_open('http://ltelvak17.student.ki.fpv.ukf.sk/sportovisko/update'); ?>
<input type="hidden" name="idSportovisko" value="<?php echo $sportovisko_data['idSportovisko']; ?>">
<div class="form-group">
    <label>Názov:</label>
    <input type="nazov" class="form-control" name="nazov" value="<?php echo $sportovisko_data['Nazov_sportoviska']; ?>">
</div>
<div class="form-group">
    <label>Počet:</label>
    <input type="pocet" class="form-control" name="pocet" value="<?php echo $sportovisko_data['Pocet']; ?>">
</div>
<div class="form-group">
    <label>Vybavenie:</label>
    <select name="Vybavenie_idVybavenie" class="form-control">
        <?php foreach($vybavenie as $vybavenia): ?>
            <option value="<?php echo $vybavenia['idVybavenie']; ?>"><?php echo $vybavenia['Nazov']; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="form-group">
    <label>Hodinova sadzba:</label>
    <select name="Cennik_idCennik" class="form-control">
        <?php foreach($cennik as $cenniky): ?>
            <option value="<?php echo $cenniky['idCennik']; ?>"><?php echo $cenniky['Hodinova_sadzba']; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<button type="submit" class="btn btn-success">Upraviť</button> <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Späť</button>
</form>