<?php

class HtmlPages_DeleteHtmlPageSuccessView extends ProjectBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{		
		$url = $this->context->getRouting()->gen('HtmlPages');
		$this->getResponse()->setRedirect($url);
	}
}

?>
