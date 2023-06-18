<?php
class translator{
    private $morseCode;
    private $word;

public function __construct($morseCode, $word) {
    $this->morseCode = $morseCode;
    $this->word=strtoupper($word);
    
    
}
public function getMorseCode(){
    return $this->morseCode;
}
public function getWord(){
    return $this->word;
}
public function setMorseCode($morseCode){
    return $this->morseCode = $morseCode;
}
public function setWord($word){
    return $this->word = $word;
}
public function toMorse(){
    $result="";
    for ($i=0; $i<strlen($this->word) ;$i++) {
        $result.=$this->morseCode[$this->word[$i]]."#";

    }
    return $result;

}
public function toWord()
{
    $t= explode("#", $this->word);
    $result="";
    for($i=0;$i<count($t);$i++){
         foreach ($this->morseCode as $key => $value) {
            if($t[$i]==$value)  $result.=$key;
        }
    }
    return $result;
 }



}






?>