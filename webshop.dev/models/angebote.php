<meta charset="utf-8">
<?php
class AngeboteModel extends Model{
	public function Index(){
		if (isset($_POST['delete'])) {
			$this->query('DELETE FROM angebote WHERE angebot_id='.$_POST['angebot_id'].'');
			$this->resultSet();
			$rows = $this->query('SELECT * FROM nachfragen ORDER BY create_date DESC');
			$rows = $this->resultSet();
		} else {
			$this->query('SELECT * FROM angebote WHERE nachfrager_user_id=' .$_SESSION['user_data']['id'].' ORDER BY nachfrage_id DESC');
			$rows = $this->resultSet();
			
			if (isset($_POST['submit'])) {
				$this->query('UPDATE angebote SET bestellt = 1 WHERE angebot_id=' .$_POST['angebot_id']);
				$this->execute();

				$this->query('SELECT * FROM angebote WHERE angebot_id=' .$_POST['angebot_id'].'');
				$this->execute();
				$result = $this->resultSet();

				$anbieterName = $this->query('SELECT name FROM users WHERE id=' .$_POST['user_id']);
				$anbieterName = $this->single();

				$xml = new DomDocument("1.0", "UTF-8");

				$bestellung = $xml->createElement("bestellnummer", $result[0]['angebot_id']);
				$nachfrager = $xml->createElement("nachfrager", $_SESSION['user_data']['name']);
				$anbieter = $xml->createElement("anbieter", $anbieterName['name']);
				$bezeichnung = $xml->createElement("bezeichnung", $result[0]['bezeichnung']);
				$menge = $xml->createElement("menge", $result[0]['menge'].' Stück');
				$preis = $xml->createElement("preis", $result[0]['preis']. '.-');
				$qualitaet = $xml->createElement("qualität", $result[0]['qualitaet']);
				$lieferzeitpunkt = $xml->createElement("lieferzeitpunkt", $result[0]['lieferzeitpunkt']);

				$xml->appendChild($bestellung);
				$xml->appendChild($nachfrager);
				$xml->appendChild($anbieter);
				$xml->appendChild($bezeichnung);
				$xml->appendChild($menge);
				$xml->appendChild($qualitaet);
				$xml->appendChild($preis);
				$xml->appendChild($lieferzeitpunkt);
				
				$xml->FormatOutput = true;
				$string_value = $xml->saveXML();
				$xml->save("bestellungen/Bestellung_".$result[0]['angebot_id'].".xml");

				$this->query('SELECT * FROM angebote WHERE nachfrager_user_id=' .$_SESSION['user_data']['id'].' ORDER BY nachfrage_id DESC');
				$rows = $this->resultSet();
			}
		}
		return $rows;
	}
}


