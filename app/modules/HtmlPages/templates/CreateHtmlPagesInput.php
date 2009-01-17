<table border="0">
	<?php if (! empty($template['html_list'])) foreach($template['html_list'] as $htmlPage): ?>
		<tr>					
			<td><?php print $htmlPage['id']; ?></td>
			<td><?php print $htmlPage['title']; ?></td>
			<td><form action="<?php  print $ro->gen('ViewHtmlPage', array('id' => $htmlPage['id'])); ?>"><input type="submit" value="View" /></form></td>
			<td><form action="<?php  print $ro->gen('EditHtmlPage', array('id' => $htmlPage['id'])); ?>"><input type="submit" value="Edit" /></form></td>
			<td><form action="<?php  print $ro->gen('DeleteHtmlPage', array('id' => $htmlPage['id'])); ?>"><input type="submit" value="Delete" /></form></td>
		</tr>
	<?php endforeach; ?>
</table>

<?php if ($template['successfull'] == 1) print "An html page is created successfully !"; ?>

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
