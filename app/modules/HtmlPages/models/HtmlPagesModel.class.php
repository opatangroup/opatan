<?php

class HtmlPages_HtmlPagesModel extends ProjectBaseModel
{
	public function addHtmlPage($title, $text) {
		$dbm  = $this->context->getDatabaseManager();
		$db   = $dbm->getDatabase('opatan');
		$conn = $db->getConnection();
		$sql = 'INSERT INTO opatan_html_pages (title, text) VALUES (?, ?)';
		$statement = $conn->prepare($sql);
		$statement->execute(array($title, $text));
	}
}

?>
