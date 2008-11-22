<?php if ($template['successfull'] == 1) print "A section is created successfully !"; ?>

<h4>Create Section Form</h4>
<form action="<?php print $ro->gen(null); ?>" method="post">
	<table border="0">
		<tr align="left">
			<td>Name :</td>
			<td><input type="text" name="name" /></td>
		</tr>
		<tr align="left">
			<td>Description :</td>
			<td><textarea name="desc"></textarea></td>
		</tr>
		<tr align="left">
			<td>Select a Html Page for this Section : </td>
			<td>
				<select name="html_page_id">
					<?php if (! empty($template['html_pages'])) foreach($template['html_pages'] as $htmlPage): ?>
						<option value="<?php print $htmlPage['id']; ?>">
							<?php print $htmlPage['title']; ?>
						</option>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
		<tr align="left">
			<td>&nbsp;</td>			
			<?php if (empty($template['html_pages'])): ?>
				<td>No Html Page is available, Please create one first .</td>
				<tr><td>&nbsp;</td><td><input type="submit" value="Create Section" disabled="disabled" /></td>
			<?php else : ?>									
				<td><input type="submit" value="Create Section" /></td>
			<?php endif; ?>			
		</tr>
	</table>
</form>
