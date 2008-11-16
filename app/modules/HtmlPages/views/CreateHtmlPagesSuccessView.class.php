<?php

class HtmlPages_CreateHtmlPagesSuccessView extends ProjectBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->getContext()->getUser()->setAttribute('successfull', 1, 'org.agavi.html');

		if ($this->getContext()->getUser()->hasAttribute('redirect', 'org.agavi.user.User')) {
			$this->getResponse()->setRedirect($this->getContext()->getUser()->removeAttribute('redirect', 'org.agavi.user.User'));
			return;
		}
	}
}

?>
