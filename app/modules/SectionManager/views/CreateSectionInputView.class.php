<?php

class SectionManager_CreateSectionInputView extends ProjectBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);

		// set the title
		$this->setAttribute('_title', 'CreateSection Action');
	}
}

?>
