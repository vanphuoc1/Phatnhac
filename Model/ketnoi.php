<?php
    class ketnoi{
        public function ketnoisql(& $con){
            $con = mysqli_connect("localhost","root","","music");
            if(!$con){
                return "Không truy cập được DB";
            }
            return $con;
        }
        public function dongketnoi($con){
            $con = mysqli_connect("localhost","root","","music");
            return $con->close();
        }
    }
?>