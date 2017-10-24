<?php
 
 class odong{
    var $warna;
    var $krs;
    var $krs1;
    var $krs2;
    var $krs3;
    var $krs4;

    function __construct($wr,$kr,$kr1,$kr2,$kr3,$kr4){
       $this->warna = $wr;
       $this->krs = $kr;
       $this->krs1 = $kr1;
       $this->krs2 = $kr2;
       $this->krs3 = $kr3;
       $this->krs4 = $kr4;
    }
    function get_wr(){
        return $this->warna;
    }
    function get_krs(){
        return $this->krs;
    }
    function get_1(){
        return $this->krs1;
    }    
    function get_2(){
        return $this->krs2;
    }    
    function get_3(){
        return $this->krs3;
    }    
    function get_4(){
        return $this->krs4;
    }    
}
?>