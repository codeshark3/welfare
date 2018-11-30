<?php
class Timedate  extends CI_Controller{
    function __construct(){
        parent::__construct();
        }

    function get_date($timestamp, $format){
       
        if($format === "datepicker"){

            $the_date = date('d\-m\-Y', $timestamp);
        }

        return $the_date;

    }




    }