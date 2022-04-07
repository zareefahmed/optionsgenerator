<?php
 class OptionsGenerator
 {

    private $options;
    private $numIteration;

    public function  _construct()
    {

    }


    public function setOptions($options )
    {
        $this->options=$options;

    }

    public function setNumberOfIteration($numIteration)
    {
        if(is_int($numIteration)){
$this->numIteration=$numIteration;
    }else
    {
        die("Number of Iteration must be numerical");
    }


}

    public function generateRandomOptions()
    {

$Optionscount=count($this->options);
$ResultArray=$this->InitializeOptionsArray();
for($i=0;$i<=$this->numIteration;$i++)
{
//srand(time());
    $randomNumber=rand(0,$Optionscount-1);
   // var_dump($this->options);
  // print $this->options[$randomNumber];
$ResultArray[$this->options[$randomNumber]]+=1;
//sleep(1);
}

$this->resultArray=$ResultArray;
    }


    public function InitializeOptionsArray()
    {
 return array_fill_keys(array_values($this->options), 0);

    }

public function PresentResult()
{
    arsort($this->resultArray);
    $Result = array_splice( $this->resultArray, 0, 1 );
    print "Winnder is :" . key($Result);
}

 }


