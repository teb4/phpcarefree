<?php
    namespace phpcarefree;
    
    class Strings{
        public static function addcslashes( $str , $charlist ){
            return addcslashes( $str, $charlist );
        }
        public static function addslashes( $str ){
            return addslashes( $str );
        }
        public static function bin_to_hex( $str ){
            return bin_to_hex( $str );
        }
        public static function chr( $ascii ){
            return chr( $ascii );
        }
        public static function chunk_split( $body, $chunklen = 76, $end = '\r\n' ){
            return chunk_split( $body, $chunklen, $end );
        }
        public static function convert_cyr_string ( $str, $from, $to ){
            return convert_cyr_string( $str, $from, $to );
        }
        public static function convert_uudecode( $data ){
            return convert_uudecode( $data );
        }
        public static function convert_uuencode( $data ){
            return convert_uuencode( $data );
        }
        public static function count_chars( $string, $mode = 0 ){
            return count_chars( $string, $mode );
        }
        public static function crc32( $str ){
            return crc32( $str );
        }
        public static function crypt( $str, $salt = 0 ){
            return crypt( $str, $salt );
        }
        public static function explode( $delimiter, $string, $limit = NULL ){
            return explode( $delimiter, $string, $limit );
        }
        public static function get_html_translation_table( $table = HTML_SPECIALCHARS, $flags = ENT_COMPAT | ENT_HTML401, $encoding = 'UTF-8' ){
            return get_html_translation_table( $table, $flags, $encoding );
        }
        public static function hebrev( $hebrew_text, $max_chars_per_line = 0 ){
            return hebrev( $hebrew_text, $max_chars_per_line );
        }
        public static function hebrevc( $hebrew_text, $max_chars_per_line = 0 ){
            return hebrevc( $hebrew_text, $max_chars_per_line );
        }
        public static function hex_to_bin( $data ){
            return hex_to_bin( $data );
        }      
        public static function html_entity_decode( $string, $flags = ENT_COMPAT | ENT_HTML401, $encoding = '' ){
            if( '' === $encoding ){
                $encoding = ini_get( 'default_charset' );
            }
            return html_entity_decode( $string, $flags, $encoding );
        }
        public static function html_entities( $string, $flags = ENT_COMPAT | ENT_HTML401, $encoding = '', $double_encode = true ){
            if( '' === $encoding ){
                $encoding = ini_get( 'default_charset' );
            }
            return html_entities( $string, $flags, $encoding, $double_encode );
        }
        public static function html_specialchars_decode( $string, $flags = ENT_COMPAT | ENT_HTML401 ){
            return html_specialchars_decode( $string, $flags );
        }
        public static function html_specialchars( $string, $flags = ENT_COMPAT | ENT_HTML401, $encoding = '', $double_encode = true ){
            if( '' === $encoding ){
                $encoding = ini_get( 'default_charset' );
            }
            return html_specialchars( $string, $flags, $encoding, $double_encode );
        }        
    }
/* eof */    