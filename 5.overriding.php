<?php 
class robot {
  	   // property
     public $nama;
    public $umur;
    public $mesin;


public function set_nama($nama) {
    $this->nama = $nama;
}

  public function set_mesin($mesin) {
      $this->mesin = $mesin;
  }

  public function set_umur($umur) {
      $this->umur = $umur;
  }

public function get_mesin() {
    return $this->mesin;
}

 	public function get_nama() {
    	  return $this->nama;
	}

	public function get_umur() {
		return $this->umur;
	}

}

class robot_burung extends robot{
       public function get_terbang() {
            echo "Robot ini bisa terbang";
       }

       public function get_umur() {
            return 23;
      }
}

// Overriding adalah teknik menimpah fungsi dari parent
$robot = new robot;

echo $robot->get_nama();
echo $robot->get_umur();

$robotInherit = new robot_burung;
echo $robotInherit->get_terbang();
$robotInherit->set_nama("Kutilang");
echo $robotInherit->get_nama();

// Teknik overriding
echo $robotInherit->get_umur();
