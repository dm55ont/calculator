<?php  include('digitron.php'); ?>
<h1>Dodan h1 tag</h1>
<div id="glavni">
	<form action="<?php echo htmlentities($_SERVER["REQUEST_URI"]); ?>" method="post">
<!-- Dodan komentar 2 -->
		<fieldset>
			<legend>Promenjen naslov</legend>

			<label for="br1">Prvi broj</label>
			<input type="text" id="br1" name="br1" size="3" maxlength="10" value="" />

			<label for="op">Operacija</label>

			<select name="op" id="op">
			<option value="+" selected="selected" title="Sabiranje">&nbsp;+</option>
			<option value="-" title="Oduzimanje">&nbsp;-</option>
			<option value="*" title="Mnozenje">&nbsp;x</option>
			<option value="/" title="Deljenje">&nbsp;/</option>
			</select>

			<label for="br2">Drugi broj</label>
			<input type="text" id="br2" name="br2" size="8" maxlength="10" value="" />

			<input type="submit" class="button" name="glavni" value="Rezultat" />

			<?php echo $izlaz; ?>

		</fieldset>

	</form>
</div>
