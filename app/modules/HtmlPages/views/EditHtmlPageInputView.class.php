<?php

class HtmlPages_EditHtmlPageInputView extends ProjectBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		//$this->getContext()->getUser()->setAttribute('redirect', $this->getContext()->getRequest()->getUrl(), 'org.agavi.user.User');
	}
}

?>
