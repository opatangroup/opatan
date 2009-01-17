<?php

class HtmlPages_HtmlPagesModel extends ProjectBaseModel
{
	public function getHtmlPage($id) {
		$dbm  = $this->context->getDatabaseManager();
		$db   = $dbm->getDatabase('opatan');
		$conn = $db->getConnection();
		$sql  = 'SELECT * FROM opatan_html_pages WHERE id = ?';
		$statement = $conn->prepare($sql);
		$statement->execute(array($id));
		$htmlPage = $statement->fetch(PDO::FETCH_ASSOC);

		return $htmlPage;
	}

	public function getHtmlPages() {
		$dbm  = $this->context->getDatabaseManager();
		$db   = $dbm->getDatabase('opatan');
		$conn = $db->getConnection();
		$sql  = 'SELECT * FROM opatan_html_pages';
		$htmlPages = $conn->query($sql)->fetchAll();
		return $htmlPages;
	}
	
	public function addHtmlPage($title, $text) {
		$dbm  = $this->context->getDatabaseManager();
		$db   = $dbm->getDatabase('opatan');
		$conn = $db->getConnection();
		$sql = 'INSERT INTO opatan_html_pages (title, text) VALUES (?, ?)';
		$statement = $conn->prepare($sql);
		$statement->execute(array($title, $text));
	}

	public function updateHtmlPage($id, $title, $text) {
		$dbm  = $this->context->getDatabaseManager();
		$db   = $dbm->getDatabase('opatan');
		$conn = $db->getConnection();
		$sql = 'UPDATE opatan_html_pages SET title = ?, text = ? WHERE id = ?';
		$statement = $conn->prepare($sql);
		$statement->execute(array($title, $text, $id));
	}

	public function deleteHtmlPage($id) {
		$dbm  = $this->context->getDatabaseManager();
		$db   = $dbm->getDatabase('opatan');
		$conn = $db->getConnection();
		$sql = 'Delete FROM opatan_html_pages WHERE id = ?';
		$statement = $conn->prepare($sql);
		$statement->execute(array($id));

		$sql = 'UPDATE opatan_sections SET html_page_id = 0 WHERE html_page_id = ?';
		$statement = $conn->prepare($sql);
		$statement->execute(array($id));
	}
}

?>
