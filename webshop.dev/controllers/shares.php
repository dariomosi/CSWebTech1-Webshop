<meta charset="utf-8">
<?php
class Shares extends Controller{
	protected function Index(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add(){
		if(!isset($_SESSION['nachfrager_logged_in'])){
			header('Location: '.ROOT_URL.'shares');
		}
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->add(), true);
	}

	protected function angebot(){
		if(isset($_SESSION['nachfrager_logged_in'])){
			header('Location: '.ROOT_URL.'shares');
		}
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->angebot(), true);
	}
}		