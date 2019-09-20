<?php
namespace Linio;

class Challenge
{
    
    public function test($start,$end){
        if($this->integer_validation($start) && $this->integer_validation($end))
        {
            for ($i=$start; $i <=$end ; $i++){
                switch ($i) {
                    case (($i % 3)==0 && ($i %5)==0):
                       $this->result[]="Linianos";
                    break;
                    case (($i % 3)==0):
                       $this->result[]= "Linio";
                    break;
                    case (($i % 5)==0):
                        $this->result[]= "IT";
                    break;
                    default:
                        $this->result[]= "$i";
                    break;
                }
            }
            return $this->result;
        }
    }
    private function integer_validation($number)
    {
        return filter_var($number, FILTER_VALIDATE_INT);
    }



}

?>