<?php
    require_once $_SERVER[ 'DOCUMENT_ROOT' ] . '/simpletest/autorun.php';
    require_once $_SERVER[ 'DOCUMENT_ROOT' ] . '/simpletest/web_tester.php';
    require_once $_SERVER[ 'DOCUMENT_ROOT' ] . '/phpcarefree.lib.php';
    
    use phpcarefree\Strings;

    class testStrings extends WebTestCase{
        function testSelf(){
	    $this->assertTrue( true );
        }
        function test_addcslashes(){
            $str = 'STAMP';
            $charlist = 'A';
            $result = Strings::addcslashes( $str, $charlist );
            $this->assertTrue( $result, addcslashes( $str, $charlist ) );
        }
    }
/* eof */