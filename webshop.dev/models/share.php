<meta charset="utf-8">
<?php 
class ShareModel extends Model{
	public function Index(){
		if (isset($_POST['suche'])) {
			$this->query('SELECT * FROM nachfragen WHERE bezeichnung LIKE "%'.$_POST['searchValue'].'%" ORDER BY create_date DESC');
			$rows = $this->resultSet();
			return $rows;
		} else if (isset($_POST['delete'])) {
			$this->query('DELETE FROM nachfragen WHERE nachfrage_id='.$_POST['nachfrage_id'].'');
			$this->resultSet();
			$rows = $this->query('SELECT * FROM nachfragen ORDER BY create_date DESC');
			$rows = $this->resultSet();
			return $rows;
		} else {
			$this->query('SELECT * FROM nachfragen ORDER BY create_date DESC');
			$rows = $this->resultSet();
			return $rows;
		}
	}

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['bezeichnung'] == '' || $post['menge'] == '' || $post['qualitaet'] == '' || $post['lieferzeitpunkt'] == ''){
			Messages::setMsg('Bitte alle Felder ausfüllen!', 'error');
			return;
			}

			// Insert into MySQL
			$this->query('INSERT INTO nachfragen (bezeichnung, menge, qualitaet, lieferzeitpunkt, user_id) VALUES(:bezeichnung, :menge, :qualitaet, :lieferzeitpunkt, :user_id)');
			$this->bind(':bezeichnung', $post['bezeichnung']);
			$this->bind(':menge', $post['menge']);
			$this->bind(':qualitaet', $post['qualitaet']);
			$this->bind(':lieferzeitpunkt', $post['lieferzeitpunkt']);
			$this->bind(':user_id', $_SESSION['user_data'] ['id']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'shares');
			}
		}
		return;
	}

	public function angebot(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['bezeichnung'] == '' || $post['menge'] == '' || $post['qualitaet'] == '' || $post['lieferzeitpunkt'] == '' || $post['preis'] == ''){
			Messages::setMsg('Bitte alle Felder ausfüllen!', 'error');
			return;
			}

			// Insert into MySQL
			$this->query('INSERT INTO angebote (bezeichnung, menge, qualitaet, preis, lieferzeitpunkt, nachfrage_id, user_id, nachfrager_user_id) VALUES(:bezeichnung, :menge, :qualitaet, :preis, :lieferzeitpunkt, :nachfrage_id, :user_id, :nachfrager_user_id)');
			$this->bind(':bezeichnung', $post['bezeichnung']);
			$this->bind(':menge', $post['menge']);
			$this->bind(':qualitaet', $post['qualitaet']);
			$this->bind(':preis', $post['preis']);
			$this->bind(':lieferzeitpunkt', $post['lieferzeitpunkt']);
			$this->bind(':nachfrage_id', $post['nachfrage_id']);
			$this->bind(':user_id', $_SESSION['user_data'] ['id']);
			$this->bind(':nachfrager_user_id', $post['nachfrager_user_id']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'shares');
			}
		}
		return;
	}
}