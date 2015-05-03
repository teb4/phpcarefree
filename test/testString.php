<?php
    require_once $_SERVER[ 'DOCUMENT_ROOT' ] . '/simpletest/autorun.php';
    require_once $_SERVER[ 'DOCUMENT_ROOT' ] . '/simpletest/web_tester.php';
    require_once $_SERVER[ 'DOCUMENT_ROOT' ] . '/phpcarefree.lib.php';
    
    use phpcarefree\String;    

    class testString extends WebTestCase{
        function testSelf(){
	    $this->assertTrue( true );
        }
        function test_addcslashes(){
            $value = 'ASDF';
            $s = new String( $value );
            $charlist = 'D';
            $result = $s->addcslashes( $charlist );
            $this->assertTrue( $result, addcslashes( $value, $charlist ) );
        }
    }
/* eof */