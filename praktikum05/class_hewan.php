<?php

class hewanMamalia
{
    public $warna;
    public $namahewan;
    public $habitat;


    function makan()
    {
        return"Mamalia makan";
    }

    function minum()
    {
        return"Mamalia minum";
    }

    function menyusui()
    {
        return"Mamalia menyusui";
    }
}

$mamalia = new hewanMamalia();
echo $mamalia->namahewan ="Lumba - lumba";
echo "<br>";
echo $mamalia->warna ="Abu - Abu";
echo "<br>";
echo $mamalia->habitat ="Laut";
echo "<br>";


echo $mamalia->makan();
echo "<br>";
echo $mamalia->minum();
echo "<br>";
echo $mamalia->menyusui();


