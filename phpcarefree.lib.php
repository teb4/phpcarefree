<?php
    //    
    //    На сайте http://phpsadness.com/ перечисляются недостатки PHP, некоторые из них ( самые простые ) можно
    //    исправить добавлением оберток над стандартными функциями.
    //    
    //    Так же несколько облагородит код, если стандартные функции убрать в классы в виде статических методов.
    //    Например, в класс Strings перенести все функции, обрабатывающие строки.
    //    
    //    Следующим шагом, естественно, будет класс String, куда в методы перейдут функции, обрабатывающие строки,
    //    а еще он станет реализовывать интерфейсы Iterator и ArrayAccess, чтобы к экземпляру String можно было обращаться,
    //    как к массиву и пробегать все символы строки в foreach.
    //
    //    И так далее, и тому подобное...
    //    
    //    Плюс ко всему этому прибавим тесты ( тесты написаны для simpletest ).
    //    
    //    Для того, кто предпочитает OOP, все это действительно слегка код улучшит.
    //
    namespace phpcarefree;
    
    require_once $_SERVER[ 'DOCUMENT_ROOT' ] . '/class/String.class.php';

    //
    //  #4 Function naming (underscores)
    //

    // get_   
    function get_all_headers(){
        return getallheaders();
    }
    function get_cwd(){
        return getcwd();
    }
    function get_date( $timestamp = NULL ){
        if( NULL == $timestamp ){
            $timestamp = time();
        }
        return getdate( $timestamp );
    }
    function get_env( $varname ){
        return getenv( $varname );
    }
    function get_host_by_addr( $ip_address ){
        return gethostbyaddr( $ip_address );
    }
    function get_host_by_name( $hostname ){
        return gethostbyname( $hostname );
    }
    function get_host_by_name_l( $hostname ){
        return gethostbynamel( $hostname );
    }
    function get_host_name(){
        return gethostname();
    }
    function get_image_size( $filename, array &$imageinfo = NULL ){
        return getimagesize( $filename, $imageinfo );
    }
    function get_image_size_from_string( $imagedata, array &$imageinfo = NULL ){
        return getimagesizefromstring( $imagedata, $imageinfo );
    }
    function get_last_mod(){
        return getlastmod();
    }
    function get_mx_rr( $hostname, array &$mxhosts, array &$weight = NULL ){
        return getmxrr( $hostname, $mxhosts, $weight );
    }
    function get_my_gid(){
        return getmygid();
    }
    function get_my_inode(){
        return getmyinode();
    }
    function get_my_pid(){
        return getmypid();
    }
    function get_my_uid(){
        return getmyuid();
    }    
    function get_opt( $options, array $longopts = NULL ){
        return getopt( $options, $longopts );
    }
    function get_proto_by_name( $name ){
        return getprotobyname( $name );
    }
    function get_proto_by_number( $number ){
        return getprotobynumber( $number );
    }
    function get_rand_max(){
        return getrandmax();
    }
    function get_r_usage( $who = 0 ){
        return getrusage( $who );
    }
    function get_serv_by_name( $service, $protocol ){
        return getservbyname( $service, $protocol );
    }
    function get_serv_by_port( $port, $protocol ){
        return getservbyport( $port, $protocol );
    }
    function get_text( $message ){
        return gettext( $message );
    }
    function get_time_of_day( $return_float = FALSE ){
        return gettimeofday( $return_float );
    }
    function get_type( $var ){
        return gettype( $var );
    }
    
    // set_
    function set_cookie( $name, $value = NULL, $expire = 0, $path = NULL, $domain = NULL, $secure = FALSE, $httponly = FALSE ){
        return setcookie( $name, $value, $expire, $path, $domain, $secure, $httponly );
    }
    //function set_locale( $category, $locale ){
    //    setlocale( func_get_args() );
    //}
    function set_proc_title( $title ){
        setproctitle( $title );
    }
    function set_raw_cookie( $name, $value = NULL, $expire = 0, $path = NULL, $domain = NULL, $secure = FALSE, $httponly = FALSE ){
        return setrawcookie( $name, $value, $expire, $path, $domain, $secure, $httponly );
    }
    function set_thread_title( $title ){
        return setthreadtitle( $title );
    }
    function set_type( &$var, $type ){
        return settype( $var, $type );
    }
    
    // str_
    function str_case_cmp( $str1, $str2 ){
        return strcasecmp( $str1, $str2 );
    }
    function str_chr( $haystack, $needle, $part ){
        return strchr( $haystack, $needle, $part );
    }
    function str_cmp( $str1, $str2 ){
        return strcmp( $str1, $str2 );
    }
    function str_coll( $str1, $str2 ){
        return strcoll( $str1, $str2 );
    }
    function str_cspn( $str1, $str2, $start = null, $length = null ){
        return strcspn( $str1, $str2, $start, $length );
    }
    function str_ftime( $format, $timestamp = NULL ){
        if( NULL === $timestamp ){
            $timestamp = time();
        }
        return strftime( $format, $timestamp );
    }
    function str_ipos( $haystack, $needle, $offset = 0 ){
        return stripos( $haystack, $needle, $offset );
    }
    function str_istr( $haystack, $needle, $before_needle = FALSE ){
        return stristr( $haystack, $needle, $before_needle );
    }
    
    function str_len( $string ){
        return strlen( $string );
    }
    
    function str_nat_case_cmp( $str1, $str2 ){
        return strnatcasecmp( $str1, $str2 );
    }
    
    function str_nat_cmp( $str1, $str2 ){
        return strnatcmp( $str1, $str2 );
    }
    
    function str_n_case_cmp( $str1, $str2, $len ){
        return strncasecmp( $str1, $str2, $len );
    }
    
    function str_n_cmp( $str1, $str2, $len ){
        return strncmp( $str1, $str2, $len );
    }
    
    function str_pbrk( $haystack, $char_list ){
        return strpbrk( $haystack, $char_list );
    }
    
    function str_pos( $haystack, $needle, $offset = 0 ){
        return strpos( $haystack, $needle, $offset );
    }    
    
    function str_ptime( $date, $format ){
        return strptime( $date, $format );
    }
    
    function str_rchr( $haystack, $needle ){
        return strrchr( $haystack, $needle );
    }
    
    function str_rev( $string ){
        return strrev( $string );
    }
    
    function str_ripos( $haystack, $needle, $offset = 0 ){
        return strripos( $haystack, $needle, $offset );
    }
    
    function str_rpos( $haystack, $needle, $offset = 0 ){
        return strrpos( $haystack, $needle, $offset );
    }
    
    function str_spn( $subject, $mask, $start = NULL, $length = NULL ){
        return strspn( $subject, $mask, $start, $length );
    }
    
    function str_str( $haystack, $needle, $before_needle = FALSE ){
        return strstr( $haystack, $needle, $before_needle );
    }
    
    //function str_tok( $str, $token ){
    //    return strtok( $str, $token );
    //}
    
    function str_to_lower( $str ){
        return strtolower( $str );
    }
    
    function str_to_time( $time, $now = NULL ){
        if( NULL == $now ){
            $now = time();
        }
        return strtotime( $time, $now );
    }
    
    function str_to_upper( $string ){
        return strtoupper( $string );
    }
    
    //function str_tr(){
    //    return strtr( $str, $from, $to );
    //}
    
    function str_val( $var ){
        return strval( $var );
    }
    
    // strip_

    // encode
    function raw_url_encode( $str ){
        return rawurldecode( $str );
    }

    function url_encode( $str ){
        return urlencode( $str );
    }

    function gz_encode( $data, $level = -1, $encoding_mode = FORCE_GZIP ){
        return gzencode( $data, $level, $encoding_mode );
    }

    // php
    function php_info( $what = INFO_ALL ){
        return phpinfo( $what );
    }

    function php_credits( $flag = CREDITS_ALL){
        return phpcredits( $flag );
    }

    function php_version(){
        return phpversion( $extension = NULL );
    }

    // htmlentites
    function html_entities( $string, $flags = ENT_COMPAT | ENT_HTML401, $encoding = NULL, $double_encode = TRUE ){
        if( NULL == $encoding ){
            $encoding = ini_get( 'default_charset' );
        }
        return htmlentities( $string, $flags, $encoding, $double_encode );
    }

    //
    // #15 Function naming (prefixes)
    //
    function microsleep( $micro_seconds ){
        usleep( $micro_seconds );
    }

    //
    // #48 Function naming (to/2)
    //
    function bin_to_hex( $str ){
        return bin2hex( $str );
    }

    function deg_to_rad( $number ){
        return deg2rad( $number );
    }

    function hex_to_bin( $data ){
        return hex2bin( $data );
    }

    function ip_to_long( $ip_address ){
        return ip2long( $ip_address );
    }

    function long_to_ip( $proper_address ){
        return long2ip( $proper_address );
    }

    function nl_to_br( $string, $is_xhtml = TRUE ){
        return nl2br( $string, $is_xhtml );
    }

    function rad_to_deg( $number ){
        return rad2deg( $number );
    }
/* eof */