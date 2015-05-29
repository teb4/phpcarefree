<?php
    ini_set( 'display_startup_errors', 1 );
    ini_set( 'display_errors', 1 );
    error_reporting( -1 );
    error_reporting( E_ALL & ~E_STRICT );
    
    require_once $_SERVER[ 'DOCUMENT_ROOT' ] . '/phpcarefree.lib.php';
    
    use phpcarefree\String;
    use function phpcarefree\get_date;
    use phpcarefree\Strings;
    
    $s = new String( 'AAAAA' );
    //var_dump( $s ); print '<br />';
    
    //var_dump( $s->convert_uuencode() ); print '<br />';
    
    $crc = $s->crc32();
    //var_dump( $crc ); print '<br />';
    
    $s3 = get_date(); //var_dump( $s3 ); print '<br />';
    //var_dump( $s3[ 'weekday' ] ); print '<br />';
    
    $s4 = Strings::count_chars( $s3[ 'weekday' ], 3 ); //var_dump( $s4 ); print '<br />';
/* eof */