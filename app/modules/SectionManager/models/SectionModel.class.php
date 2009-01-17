<?php

class SectionManager_SectionModel extends ProjectBaseModel
{
	public function getSection($name) {
		$dbm  = $this->context->getDatabaseManager();
		$db   = $dbm->getDatabase('opatan');
		$conn = $db->getConnection();
		$sql  = 'SELECT * FROM opatan_sections  WHERE name = ?';
		$statement = $conn->prepare($sql);
		$statement->execute(array($name));
		$section = $statement->fetch(PDO::FETCH_ASSOC);

		return $section;
	}

	public function addSection($name, $desc, $htmlPageId) {
		$dbm  = $this->context->getDatabaseManager();
		$db   = $dbm->getDatabase('opatan');
		$conn = $db->getConnection();
		$sql  = 'INSERT INTO opatan_sections (name, description, html_page_id) VALUES (?, ?, ?)';
		$statement = $conn->prepare($sql);
		$statement->execute(array($name, $desc, $htmlPageId));
	}

	public function getSections() {
		$dbm  = $this->context->getDatabaseManager();
		$db   = $dbm->getDatabase('opatan');
		$conn = $db->getConnection();
		$sql  = 'SELECT * FROM opatan_sections ORDER BY id';
		$sections = $conn->query($sql)->fetchAll();
		
		return $sections;
	}

}

?>
