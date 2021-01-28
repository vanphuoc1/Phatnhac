<?php
    include_once("ketnoi.php");
    class Mbaihat{
        /* Lay tat ca bai nhac muc "Yeu Thich" */
        public function Mnhacyeuthich(){
            $a = new ketnoi;
            $b = $a->ketnoisql($con);
            if($b)
            {
                $sql = "SELECT * FROM baihat";
                $result = $con->query($sql);
                $a->dongketnoi($con);
                return $result;
            }
            else{
                return false;
            }
        }
        /* End */
    }
    // $a = new Mbaihat;
    // $r = $a->Mnhacyeuthich();
    // print_r($r); 
?>