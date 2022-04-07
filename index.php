<?php
require_once("Class.OptionsGenerator.php");

$OptionGenerator= new OptionsGenerator();
$OptionGenerator->setOptions(array("One","Two"));
$OptionGenerator->setNumberOfIteration(2000);
$OptionGenerator->generateRandomOptions();
$OptionGenerator->PresentResult();