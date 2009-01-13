<?php

class Default_SideBarSuccessView extends ProjectBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		$this->loadLayout('slot');
	}
}

?>
