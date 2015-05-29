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
    use function phpcarefree\get_mx_rr;
    use function phpcarefree\get_my_gid;
    use function phpcarefree\get_my_inode;
    use function phpcarefree\get_my_pid;
    use function phpcarefree\get_my_uid;
    use function phpcarefree\get_opt;
    use function phpcarefree\get_proto_by_name;
    use function phpcarefree\get_proto_by_number;
    use function phpcarefree\get_rand_max;
    use function phpcarefree\get_r_usage;
    use function phpcarefree\get_serv_by_name;
    use function phpcarefree\get_serv_by_port;
    use function phpcarefree\get_text;
    use function phpcarefree\get_time_of_day;
    use function phpcarefree\get_type;
    
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
        function test_get_mx_rr(){
            $hostname = 'localhost';
            $mxhosts = array();
            $weight = array();
            $result = get_mx_rr( $hostname, $mxhosts, $weight );
            $this->assertTrue( $result === getmxrr( $hostname, $mxhosts, $weight ) );
        }
        function test_get_my_gid(){
            $result = get_my_gid();
            $this->assertTrue( $result === getmygid() );
        }
        function test_get_my_inode(){
            $result = get_my_inode();
            $this->assertTrue( $result === getmyinode() );
        }
        function test_get_my_pid(){
            $result = get_my_pid();
            $this->assertTrue( $result === getmypid() );
        }
        function test_get_my_uid(){
            $result = get_my_uid();
            $this->assertTrue( $result === getmyuid() );
        }
        function test_get_opt(){
            $options = 1;
            $longopts = array();
            $result = get_opt( $options, $longopts );
            $this->assertTrue( $result === getopt( $options, $longopts ) );
        }
        function test_get_proto_by_name(){
            $name = 23;
            $result = get_proto_by_name( $name );
            $this->assertTrue( $result === getprotobyname( $name ) );
        }
        function test_get_proto_by_number(){
            $number = 56;
            $result = get_proto_by_number( $number );
            $this->assertTrue( $result === getprotobynumber( $number ) );
        }
        function test_get_rand_max(){
            $result = get_rand_max();
            $this->assertTrue( $result === getrandmax() );
        }
        function test_get_r_usage(){
            $who = 34;
            $result = get_r_usage( $who );
            $this->assertTrue( $result === getrusage( $who ) );
        }
        function test_get_serv_by_name(){
            $service = 2; 
            $protocol = 3;
            $result = get_serv_by_name( $service, $protocol );
            $this->assertTrue( $result === getservbyname( $service, $protocol ) );
        }
        function test_get_serv_by_port(){
            $port = 2; 
            $protocol = 3;
            $result = get_serv_by_port( $port, $protocol );
            $this->assertTrue( $result === getservbyport( $port, $protocol ) );
        }
        function test_get_text(){
            $message = 'asdf';
            $result = get_text( $message );
            $this->assertTrue( $result === gettext( $message ) );
        }
        function _test_get_time_of_day(){
            $return_float = FALSE;
            $result = get_time_of_day( $return_float );
            $this->assertTrue( $result === gettimeofday( $return_float ) );
        }
        function test_get_type(){
            $var = 456.67;
            $result = get_type( $var );
            $this->assertTrue( $result === gettype( $var ) );
        }
    }
/* eof */