<?php
    require_once $_SERVER[ 'DOCUMENT_ROOT' ] . '/simpletest/autorun.php';
    require_once $_SERVER[ 'DOCUMENT_ROOT' ] . '/simpletest/web_tester.php';
    require_once $_SERVER[ 'DOCUMENT_ROOT' ] . '/phpcarefree.lib.php';
    
    use function phpcarefree\get_all_headers;
    use function phpcarefree\get_cwd;
    use function phpcarefree\get_date;
    use function phpcarefree\get_env;
    use function phpcarefree\get_host_by_addr;    
    use function phpcarefree\get_host_by_name; 
    use function phpcarefree\get_host_by_name_l;
    use function phpcarefree\get_host_name;
    use function phpcarefree\get_last_mod;
    
    class test_functions extends WebTestCase{
        function testSelf(){
	    $this->assertTrue( true );
        }
        function test_get_all_headers(){
            $result = get_all_headers();
            $this->assertTrue( $result === getallheaders() );
        }
        function test_get_cwd(){
            $result = get_cwd();
            $this->assertTrue( $result === getcwd() );
        }        
        function test_get_date(){
            $result = get_date();
            $this->assertTrue( $result === getdate() );
        }        
        function test_get_env(){
            $val = 'AAA';
            $result = get_env( $val );
            $this->assertTrue( $result === getenv( $val ) );
        }                
        function test_get_host_by_addr(){
            $ip_addr = '127.0.0.1';
            $result = get_host_by_addr( $ip_addr );
            $this->assertTrue( $result === gethostbyaddr( $ip_addr ) );
        }        
        function test_get_host_by_name(){
            $hostname = 'localhost';
            $result = get_host_by_name( $hostname );
            $this->assertTrue( $result === gethostbyname( $hostname ) );
        }        
        function test_get_host_by_name_l(){
            $hostname = 'localhost';
            $result = get_host_by_name_l( $hostname );
            $this->assertTrue( $result === gethostbynamel( $hostname ) );
        }        
        function test_get_host_name(){
            $result = get_host_name();
            $this->assertTrue( $result === gethostname() );
        }        
        function test_get_last_mod(){
            $result = get_last_mod();
            $this->assertTrue( $result === getlastmod() );
        }        
    }
/* eof */