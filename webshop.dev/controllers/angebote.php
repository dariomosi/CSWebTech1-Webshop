<meta charset="utf-8">
<?php
class Angebote extends Controller{
	protected function Index(){
		$viewmodel = new AngeboteModel();
		$this->returnView($viewmodel->Index(), true);
	}
}		