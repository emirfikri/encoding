<?php

/**
 * Class CompositeEncodingAlgorithm
 */
class CompositeEncodingAlgorithm implements EncodingAlgorithm
{
    /**
     * @var EncodingAlgorithm[]
     */
    private $algorithms;

    /**
     * CompositeEncodingAlgorithm constructor
     */
    public function __construct()
    {
        $this->algorithms = array();
    }

    /**
     * @param EncodingAlgorithm $algorithm
     */
    public function add(EncodingAlgorithm $algorithm)
    {
        $this->algorithms[] = $algorithm;
    }

    public function encode($text)
{
/**
* @todo: Implement it
*/
//$text = 'Hello my name is Alice';
$string = '';
$pieces = explode(" ", $text);
$arrlength = count($pieces);
$i = 0;
while( $i <$arrlength) {
$arr1 = str_split($pieces[$i]);
  
  //echo '$pieces ' . $pieces[$i] . '<br>' .'<br>';
  
  
   
    
$arrlength1 = count($arr1);
for($j = $arrlength1-1; $j > -1; $j--) {
  
  //echo '$arr1[$j]' . $arr1[$j] . '<br>';
   
    $string .= "$arr1[$j]";
    
    
}
$string .= ' ';
    $i++;}
echo 'String is '.$string;
return $string;
}
   

     
}