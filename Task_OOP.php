<?php

    class Lingkaran {
        
        public $jari_jari;
        public $scale;
        public $name = "Lingkaran";

        public function __construct($jari_jari, $scale){
            $this->jari_jari = $jari_jari;
            $this->scale = $scale;
        }

        public function area() {
            $pi = 3.14;
            $luas = $pi*($this->jari_jari)**2;
            return $luas. "<br>";
        }

        public function circumference() {
            $pi = 3.14;
            $keliling = 2*$pi*($this->jari_jari);
            return $keliling. "<br>";
        }

        public function enlarge() {
            $ratio = $this->jari_jari * $this->scale;
            echo $ratio. "<br>";
        }

        public function shrink() {
            $ratio = $this->jari_jari / $this->scale;
            echo $ratio. "<br>";
        }
    }

    // $lingkaran = new Lingkaran(3,4);
    // echo $lingkaran->name. "<br>";
    // $lingkaran->area();
    // $lingkaran->circumference();
    // $lingkaran->enlarge();
    // $lingkaran->shrink();

    class Persegi {

        public $sisi;
        public $scale;
        public $name = "Persegi";

        public function __construct($sisi, $scale){
            $this->sisi = $sisi;
            $this->scale = $scale;
        }

        public function area() {
            $luas = $this->sisi**2;
            return $luas. "<br>";
        }

        public function circumference() {
            $keliling = $this->sisi*4;
            return $keliling. "<br>";
        }

        public function enlarge() {
            $ratio = $this->sisi * $this->scale;
            echo $ratio. "<br>";
        }

        public function shrink() {
            $ratio = $this->sisi / $this->scale;
            echo $ratio. "<br>";
        }

    }

    // $persegi = new Persegi(3,4);
    // $persegi->area();
    // $persegi->circumference();
    // $persegi->enlarge();
    // $persegi->shrink();


    class PersegiPanjang {

        public $panjang;
        public $lebar;
        public $scale;
        public $name = "Persegi Panjang";

        public function __construct($panjang, $lebar, $scale){
            $this->panjang = $panjang;
            $this->lebar = $lebar;
            $this->scale = $scale;
        }

        public function area() {
            $luas = $this->panjang * $this->lebar;
            return $luas. "<br>";
        }

        public function circumference() {
            $keliling = (2*$this->panjang) + (2*$this->lebar);
            return $keliling. "<br>";
        }

        public function enlarge() {
            $ratioPanjang = $this->panjang * $this->scale;
            $ratioLebar = $this->lebar * $this->scale;
            echo $ratioPanjang. "<br>". $ratioLebar ."<br>";
        }

        public function shrink() {
            $ratioPanjang = $this->panjang / $this->scale;
            $ratioLebar = $this->lebar / $this->scale;
            echo $ratioPanjang. "<br>". $ratioLebar;
        }
    }

    // $persegiPanjang = new PersegiPanjang(3,4,2);
    // $persegiPanjang->area();
    // $persegiPanjang->circumference();
    // $persegiPanjang->enlarge();
    // $persegiPanjang->shrink();

    class Descriptor {

        public static $name;
        public static $scale;
        public static $luas;
        public static $keliling;

        public static function namaObjek(){
            echo "Bangun datar ini adalah " .self::$name.  " dengan parameter ". self::$scale. 
            " yang memiliki luas ". self::$luas. " dan keliling ". self::$keliling;
        }
    }

    $lingkaran = new Lingkaran(4,4);
    Descriptor::$name = $lingkaran->name;
    Descriptor::$scale = $lingkaran->scale;
    Descriptor::$luas = $lingkaran->area();
    Descriptor::$keliling = $lingkaran->circumference();
    echo Descriptor::namaObjek(). "<br>";
    
    $persegi = new Persegi(3,4);
    Descriptor::$name = $persegi->name;
    Descriptor::$scale = $persegi->scale;
    Descriptor::$luas = $persegi->area();
    Descriptor::$keliling = $persegi->circumference();
    echo Descriptor::namaObjek(). "<br>";

    $persegiPanjang = new PersegiPanjang(4,5,2);
    Descriptor::$name = $persegiPanjang->name;
    Descriptor::$scale = $persegiPanjang->scale;
    Descriptor::$luas = $persegiPanjang->area();
    Descriptor::$keliling = $persegiPanjang->circumference();
    echo Descriptor::namaObjek(). "<br>";

?>