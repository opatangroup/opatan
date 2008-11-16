<?php if ($template['successfull'] == 1) print "A section is created successfully !"; ?>

<h4>Create an Html Page</h4>
<form action="<?php print $ro->gen(null); ?>" method="post">
	<table border="0">
		<tr align="left">
			<td>Title :</td>
			<td><input type="text" name="title" /></td>
		</tr>
		<tr align="left">
			<td>Text :</td>
			<td><textarea name="text"></textarea></td>
		</tr>
		<tr align="left">
			<td>&nbsp;</td>
			<td><input type="submit" value="Create Html Page" /></td>
		</tr>
	</table>
</form>
