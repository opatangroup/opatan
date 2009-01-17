<?php

class HtmlPages_EditHtmlPageSuccessView extends ProjectBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{		
		$url = $this->context->getRouting()->gen('HtmlPages');
		$this->getResponse()->setRedirect($url);
	}
}

?>
