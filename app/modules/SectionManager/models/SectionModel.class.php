<?php

class SectionManager_SectionModel extends ProjectBaseModel
{
	public function getHtmlPages() {
		$dbm  = $this->context->getDatabaseManager();
		$db   = $dbm->getDatabase('opatan');
		$conn = $db->getConnection();
		$sql  = 'SELECT * FROM opatan_html_pages';
		$htmlPages = $conn->query($sql)->fetchAll();
		return $htmlPages;
	}

	public function addSection($name, $desc, $htmlPageId) {
		$dbm  = $this->context->getDatabaseManager();
		$db   = $dbm->getDatabase('opatan');
		$conn = $db->getConnection();
		$sql  = 'INSERT INTO opatan_sections (name, description, html_page_id) VALUES (?, ?, ?)';
		$statement = $conn->prepare($sql);
		$statement->execute(array($name, $desc, $htmlPageId));
	}
}

?>
