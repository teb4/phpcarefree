<?php    
    ini_set( 'display_startup_errors', 1 );
    ini_set( 'display_errors', 1 );
    error_reporting( -1 );
    error_reporting( E_ALL & ~E_STRICT );  
    
    require_once $_SERVER[ 'DOCUMENT_ROOT' ] . '/simpletest/autorun.php';      
    
    class AllTests extends TestSuite{
        function AllTests(){     
            $this->TestSuite( 'All tests' );
            $this->root = $_SERVER[ "DOCUMENT_ROOT" ] . '/test/';
//	    $this->current();
	    $this->full();
        }
        private function current(){     
	}
        private function full(){	        
            $this->addFile( $this->root . 'testString.php' );
            $this->addFile( $this->root . 'testStrings.php' );
            $this->addFile( $this->root . 'test_functions.php' );
	    $this->addFile( $this->root . 'testDefault.php' );
	}
    }
/* eof */