<?php

/**
 * Created by PhpStorm.
 * User: paulnegrerie
 * Date: 01/02/2017
 * Time: 16:12
 */
namespace tests\Lib;

use Lib\stringFormatter;


class stringFormatterTest extends \PHPUnit_Framework_TestCase

{

    public function testPrefix(){

        //créer un obj
        $string = new StringFormatter();

        //appel de la fonction prefix
        $result = $string->prefix("negrerie", "paul");

        //test le resultat
        $this-> assertEquals($result, "negreriepaul");

        //appel de la fonction prefix
        $result1 = $string->prefix("negrerie", "paul", true);

        //test le resultat
        $this-> assertEquals($result1, "negreriePaul");
    }

    public function testSuffix()
    {
        //créer un obj
        $string = new StringFormatter();

        //appel de la fonction suffix
        $result = $string->suffix("negrerie", "paul");

        //test le resultat
        $this->assertEquals($result, "paulnegrerie");
        $result1 = $string->suffix("negrerie", "Paul", true);
        $this->assertEquals($result1, "paulNegrerie");
    }

    public function testToCamelCase()
    {
        //créer un obj
        $string = new StringFormatter();
        //appel de la fonction toCamelCase
        $result = $string->toCamelCase("paul", "negrerie");
        //test le resultat
        $this-> assertEquals($result, "paulNegrerie");
    }

    public function testConcatString()
    {
        //créer un obj
        $string = new StringFormatter();
        //appel de la fonction ConcatString
        $result = $string->concatString("pa", "ul");
        //test le resultat
        $this-> assertEquals($result, "paul");
    }







}