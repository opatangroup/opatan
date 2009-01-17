<table border="0">
	<tr>
		<td>Do you really want to delete this html page ?</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>
			<form action="<?php print $ro->gen('DeleteHtmlPage'); ?>" method="post">
				<input type="hidden" name="id" value="<?php print $template['id']; ?>" />
				<input type="submit" value="Yes" />
			</form>
		</td>
		<td>
			<form action="<?php print $ro->gen('HtmlPages'); ?>">
				<input type="submit" value="No" />
			</form>		
		</td>
	</tr>
</table>
