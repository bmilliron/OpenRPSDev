<?php
// Reminder to self: set title dynamically


class Layout{
	//this array holds all the founded layouts
	private $layouts = [];
	private $layouts_path = "openrps_core/eng/partials/";

	public function __construct(){
		//scan the partials directory to scan for layouts
		$this->layouts = array_slice(scandir($this->layouts_path), 2);
		// I slice first two elements because they contain paths that bug out my get layout
	}

	public function getLayout($layout){
		$exists = false;

		$file_to_load = $layout + ".php";

		//check if layout page exists then load it. Else display layout not found
		foreach($this->layouts as $page){
			if($page == $file_to_load){
				$exists = true;
				break;
			}
		}

		if($exists){
			print(file_get_contents($this->layouts_path . $page));
		}else{
			return "Layout not found";
		}

	}

}

?>
