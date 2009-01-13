<?php if (! empty($template['sections'])) $secCount = count($template['sections']); $count = 0; ?>
<?php if (! empty($template['sections'])) foreach($template['sections'] as $section): ?>
	<?php $parameter = str_replace(" ", "_", $section['name']); ?>
	<?php if (strcmp(strtolower($section['name']), "home") != 0 ): ?>
		<a id="links" href="<?php print $ro->getBaseHref()."index.php/Section/".$parameter; ?>"><?php print $section['name']; ?></a>
	<?php else: ?>
		<a id="links" href="<?php print $ro->getBaseHref()."index.php"; ?>"><?php print $section['name']; ?></a>
	<?php endif; ?>	
	<?php $count++; ?>
	<?php if ($count < $secCount) : ?><hr id="botton"/><?php endif; ?>
<?php endforeach; ?>

