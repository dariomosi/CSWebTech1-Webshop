<meta charset="utf-8">
<?php
class Home extends Controller{
	protected function Index(){
		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->Index(), true);
	}
} 