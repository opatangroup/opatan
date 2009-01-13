<?php

class Default_IndexSuccessView extends ProjectBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		$layer = $this->getLayer('decorator');
		$layer->setSlot('sidebar', $this->createSlotContainer('Default', 'SideBar'));
	}
}

?>
