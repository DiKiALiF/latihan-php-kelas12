<?php 

// class utama
class manusia {
    public $teman = "Bambang"; 
	public function berinama(){
		echo "Nama saya Ujang <br>";
	}
	
}

// class turunan
class teman extends manusia {
	
    function berinamateman(){
        echo $this->berinama();
		echo "Nama teman saya " . $this->teman;
	}
}

// instansiasi class teman
$malasngoding = new teman;

$malasngoding->berinamateman();

?>