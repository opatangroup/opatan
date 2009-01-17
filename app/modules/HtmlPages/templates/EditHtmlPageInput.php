<?php $htmlPage = $template['html_page']; ?>
<h4>Edit an Html Page</h4>
<form action="<?php print $ro->gen('EditHtmlPage'); ?>" method="post">
	<table border="0">
		<tr align="left">
			<td>Title :</td>
			<td><input type="text" name="title" value="<?php print $htmlPage['title']; ?>" /></td>
		</tr>
		<tr align="left">
			<td>Text :</td>
			<td><textarea name="text"><?php print $htmlPage['text']; ?></textarea></td>
		</tr>
		<tr align="left">
			<td><input type="hidden" name="id" value="<?php print $htmlPage['id']; ?>" /></td>
			<td><input type="submit" value="Edit Html Page" /></td>
		</tr>
	</table>
</form>
