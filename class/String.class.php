<?php
    namespace phpcarefree;
    
    require_once $_SERVER[ 'DOCUMENT_ROOT' ] . '/class/Strings.class.php';
    
    class String{
        protected $value;
        public function __construct( $value = '' ){
            $this->value = (string)$value;
        }
        public function addcslashes ( $charlist ){
            return Strings::addcslashes( $this->value, $charlist );
        }
        public function addslashes( $str ){
            return  Strings::addslashes( $str );
        }
        public function bin_to_hex(){
            return Strings::bin_to_hex( $this->value );
        }
        public function chr( $index ){
            return Strings::chr( $this->value[ $index ] );
        }
        public function chunk_split( $chunklen = 76, $end = '\r\n' ){
            return Strings::chunk_split( $this->value, $chunklen, $end );
        }
        public function convert_cyr_string ( string $from , string $to ){
            return Strings::convert_cyr_string( $this->value, $from, $to );
        }
        public function convert_uudecode(){
            return Strings::convert_uudecode( $this->value );
        }
        public function convert_uuencode(){
            return Strings::convert_uuencode( $this->value );
        }
        public function count_chars( $mode = 0 ){
            return Strings::count_chars( $this->value, $mode );
        }
        public function crc32(){
            return Strings::crc32( $this->value );
        }
        public function crypt( $salt = 0 ){
            return Strings::crypt( $this->value, $salt );
        }
        public function explode( $delimiter, $limit = NULL ){
            return Strings::explode( $delimiter, $this->value, $limit );
        }        
        public function hebrev( $max_chars_per_line = 0 ){
            return Strings::hebrev( $this->value, $max_chars_per_line );
        }
        public function hebrevc( $max_chars_per_line = 0 ){
            return Strings::hebrevc( $this->value, $max_chars_per_line );
        }
        public function hex_to_bin(){
            return Strings::hex_to_bin( $this->value );
        }        
        public function html_entity_decode( $flags = ENT_COMPAT | ENT_HTML401, $encoding = '' ){        
            if( '' === $encoding ){
                $encoding = ini_get( 'default_charset' );
            }
            return Strings::html_entity_decode( $this->value, $flags, $encoding );
        }
        public function html_entities( $flags = ENT_COMPAT | ENT_HTML401, $encoding = '', $double_encode = true ){
            if( '' === $encoding ){
                $encoding = ini_get( 'default_charset' );
            }
            return Strings::html_entities( $this->value, $flags, $encoding, $double_encode );
        }
        public function html_specialchars_decode( $flags = ENT_COMPAT | ENT_HTML401 ){        
            return Strings::htmlspecialchars_decode( $this->value, $flags );
        }
        public function html_specialchars( $flags = ENT_COMPAT | ENT_HTML401, $encoding = '', $double_encode = true ){
            if( '' === $encoding ){
                $encoding = ini_get( 'default_charset' );
            }
            return Strings::html_specialchars( $this->value, $flags, $encoding, $double_encode );
        }                
    }
/* eof */