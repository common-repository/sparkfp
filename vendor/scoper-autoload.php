<?php

// scoper-autoload.php @generated by PhpScoper

$loader = (static function () {
    // Backup the autoloaded Composer files
    $existingComposerAutoloadFiles = $GLOBALS['__composer_autoload_files'] ?? [];

    $loader = require_once __DIR__.'/autoload.php';
    // Ensure InstalledVersions is available
    $installedVersionsPath = __DIR__.'/composer/InstalledVersions.php';
    if (file_exists($installedVersionsPath)) require_once $installedVersionsPath;

    // Restore the backup and ensure the excluded files are properly marked as loaded
    $GLOBALS['__composer_autoload_files'] = \array_merge(
        $existingComposerAutoloadFiles,
        \array_fill_keys([], true)
    );

    return $loader;
})();

// Class aliases. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#class-aliases
if (!function_exists('humbug_phpscoper_expose_class')) {
    function humbug_phpscoper_expose_class($exposed, $prefixed) {
        if (!class_exists($exposed, false) && !interface_exists($exposed, false) && !trait_exists($exposed, false)) {
            spl_autoload_call($prefixed);
        }
    }
}
humbug_phpscoper_expose_class('ValueError', 'Sparkfp\ValueError');
humbug_phpscoper_expose_class('UnhandledMatchError', 'Sparkfp\UnhandledMatchError');
humbug_phpscoper_expose_class('PhpToken', 'Sparkfp\PhpToken');
humbug_phpscoper_expose_class('Stringable', 'Sparkfp\Stringable');
humbug_phpscoper_expose_class('Attribute', 'Sparkfp\Attribute');
humbug_phpscoper_expose_class('CURLStringFile', 'Sparkfp\CURLStringFile');
humbug_phpscoper_expose_class('ReturnTypeWillChange', 'Sparkfp\ReturnTypeWillChange');
humbug_phpscoper_expose_class('Normalizer', 'Sparkfp\Normalizer');
humbug_phpscoper_expose_class('ComposerAutoloaderInitbbc5325beaeb837ea214548b2c0a9aae581367e3', 'Sparkfp\ComposerAutoloaderInitbbc5325beaeb837ea214548b2c0a9aae581367e3');

// Function aliases. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#function-aliases
if (!function_exists('Sparkfp_activateSparkPlugin')) { function Sparkfp_activateSparkPlugin() { return \Sparkfp\Sparkfp_activateSparkPlugin(...func_get_args()); } }
if (!function_exists('Sparkfp_deactivateSparkPlugin')) { function Sparkfp_deactivateSparkPlugin() { return \Sparkfp\Sparkfp_deactivateSparkPlugin(...func_get_args()); } }
if (!function_exists('Sparkfp_getSparkPluginsContainer')) { function Sparkfp_getSparkPluginsContainer() { return \Sparkfp\Sparkfp_getSparkPluginsContainer(...func_get_args()); } }
if (!function_exists('Sparkfp_runSparkPlugin')) { function Sparkfp_runSparkPlugin() { return \Sparkfp\Sparkfp_runSparkPlugin(...func_get_args()); } }
if (!function_exists('array_is_list')) { function array_is_list() { return \Sparkfp\array_is_list(...func_get_args()); } }
if (!function_exists('body_class')) { function body_class() { return \Sparkfp\body_class(...func_get_args()); } }
if (!function_exists('ctype_alnum')) { function ctype_alnum() { return \Sparkfp\ctype_alnum(...func_get_args()); } }
if (!function_exists('ctype_alpha')) { function ctype_alpha() { return \Sparkfp\ctype_alpha(...func_get_args()); } }
if (!function_exists('ctype_cntrl')) { function ctype_cntrl() { return \Sparkfp\ctype_cntrl(...func_get_args()); } }
if (!function_exists('ctype_digit')) { function ctype_digit() { return \Sparkfp\ctype_digit(...func_get_args()); } }
if (!function_exists('ctype_graph')) { function ctype_graph() { return \Sparkfp\ctype_graph(...func_get_args()); } }
if (!function_exists('ctype_lower')) { function ctype_lower() { return \Sparkfp\ctype_lower(...func_get_args()); } }
if (!function_exists('ctype_print')) { function ctype_print() { return \Sparkfp\ctype_print(...func_get_args()); } }
if (!function_exists('ctype_punct')) { function ctype_punct() { return \Sparkfp\ctype_punct(...func_get_args()); } }
if (!function_exists('ctype_space')) { function ctype_space() { return \Sparkfp\ctype_space(...func_get_args()); } }
if (!function_exists('ctype_upper')) { function ctype_upper() { return \Sparkfp\ctype_upper(...func_get_args()); } }
if (!function_exists('ctype_xdigit')) { function ctype_xdigit() { return \Sparkfp\ctype_xdigit(...func_get_args()); } }
if (!function_exists('current_user_can')) { function current_user_can() { return \Sparkfp\current_user_can(...func_get_args()); } }
if (!function_exists('enum_exists')) { function enum_exists() { return \Sparkfp\enum_exists(...func_get_args()); } }
if (!function_exists('fdiv')) { function fdiv() { return \Sparkfp\fdiv(...func_get_args()); } }
if (!function_exists('get_debug_type')) { function get_debug_type() { return \Sparkfp\get_debug_type(...func_get_args()); } }
if (!function_exists('get_resource_id')) { function get_resource_id() { return \Sparkfp\get_resource_id(...func_get_args()); } }
if (!function_exists('grapheme_extract')) { function grapheme_extract() { return \Sparkfp\grapheme_extract(...func_get_args()); } }
if (!function_exists('grapheme_stripos')) { function grapheme_stripos() { return \Sparkfp\grapheme_stripos(...func_get_args()); } }
if (!function_exists('grapheme_stristr')) { function grapheme_stristr() { return \Sparkfp\grapheme_stristr(...func_get_args()); } }
if (!function_exists('grapheme_strlen')) { function grapheme_strlen() { return \Sparkfp\grapheme_strlen(...func_get_args()); } }
if (!function_exists('grapheme_strpos')) { function grapheme_strpos() { return \Sparkfp\grapheme_strpos(...func_get_args()); } }
if (!function_exists('grapheme_strripos')) { function grapheme_strripos() { return \Sparkfp\grapheme_strripos(...func_get_args()); } }
if (!function_exists('grapheme_strrpos')) { function grapheme_strrpos() { return \Sparkfp\grapheme_strrpos(...func_get_args()); } }
if (!function_exists('grapheme_strstr')) { function grapheme_strstr() { return \Sparkfp\grapheme_strstr(...func_get_args()); } }
if (!function_exists('grapheme_substr')) { function grapheme_substr() { return \Sparkfp\grapheme_substr(...func_get_args()); } }
if (!function_exists('home_url')) { function home_url() { return \Sparkfp\home_url(...func_get_args()); } }
if (!function_exists('mb_check_encoding')) { function mb_check_encoding() { return \Sparkfp\mb_check_encoding(...func_get_args()); } }
if (!function_exists('mb_chr')) { function mb_chr() { return \Sparkfp\mb_chr(...func_get_args()); } }
if (!function_exists('mb_convert_case')) { function mb_convert_case() { return \Sparkfp\mb_convert_case(...func_get_args()); } }
if (!function_exists('mb_convert_encoding')) { function mb_convert_encoding() { return \Sparkfp\mb_convert_encoding(...func_get_args()); } }
if (!function_exists('mb_convert_variables')) { function mb_convert_variables() { return \Sparkfp\mb_convert_variables(...func_get_args()); } }
if (!function_exists('mb_decode_mimeheader')) { function mb_decode_mimeheader() { return \Sparkfp\mb_decode_mimeheader(...func_get_args()); } }
if (!function_exists('mb_decode_numericentity')) { function mb_decode_numericentity() { return \Sparkfp\mb_decode_numericentity(...func_get_args()); } }
if (!function_exists('mb_detect_encoding')) { function mb_detect_encoding() { return \Sparkfp\mb_detect_encoding(...func_get_args()); } }
if (!function_exists('mb_detect_order')) { function mb_detect_order() { return \Sparkfp\mb_detect_order(...func_get_args()); } }
if (!function_exists('mb_encode_mimeheader')) { function mb_encode_mimeheader() { return \Sparkfp\mb_encode_mimeheader(...func_get_args()); } }
if (!function_exists('mb_encode_numericentity')) { function mb_encode_numericentity() { return \Sparkfp\mb_encode_numericentity(...func_get_args()); } }
if (!function_exists('mb_encoding_aliases')) { function mb_encoding_aliases() { return \Sparkfp\mb_encoding_aliases(...func_get_args()); } }
if (!function_exists('mb_get_info')) { function mb_get_info() { return \Sparkfp\mb_get_info(...func_get_args()); } }
if (!function_exists('mb_http_input')) { function mb_http_input() { return \Sparkfp\mb_http_input(...func_get_args()); } }
if (!function_exists('mb_http_output')) { function mb_http_output() { return \Sparkfp\mb_http_output(...func_get_args()); } }
if (!function_exists('mb_internal_encoding')) { function mb_internal_encoding() { return \Sparkfp\mb_internal_encoding(...func_get_args()); } }
if (!function_exists('mb_language')) { function mb_language() { return \Sparkfp\mb_language(...func_get_args()); } }
if (!function_exists('mb_list_encodings')) { function mb_list_encodings() { return \Sparkfp\mb_list_encodings(...func_get_args()); } }
if (!function_exists('mb_ord')) { function mb_ord() { return \Sparkfp\mb_ord(...func_get_args()); } }
if (!function_exists('mb_output_handler')) { function mb_output_handler() { return \Sparkfp\mb_output_handler(...func_get_args()); } }
if (!function_exists('mb_parse_str')) { function mb_parse_str() { return \Sparkfp\mb_parse_str(...func_get_args()); } }
if (!function_exists('mb_scrub')) { function mb_scrub() { return \Sparkfp\mb_scrub(...func_get_args()); } }
if (!function_exists('mb_str_pad')) { function mb_str_pad() { return \Sparkfp\mb_str_pad(...func_get_args()); } }
if (!function_exists('mb_str_split')) { function mb_str_split() { return \Sparkfp\mb_str_split(...func_get_args()); } }
if (!function_exists('mb_stripos')) { function mb_stripos() { return \Sparkfp\mb_stripos(...func_get_args()); } }
if (!function_exists('mb_stristr')) { function mb_stristr() { return \Sparkfp\mb_stristr(...func_get_args()); } }
if (!function_exists('mb_strlen')) { function mb_strlen() { return \Sparkfp\mb_strlen(...func_get_args()); } }
if (!function_exists('mb_strpos')) { function mb_strpos() { return \Sparkfp\mb_strpos(...func_get_args()); } }
if (!function_exists('mb_strrchr')) { function mb_strrchr() { return \Sparkfp\mb_strrchr(...func_get_args()); } }
if (!function_exists('mb_strrichr')) { function mb_strrichr() { return \Sparkfp\mb_strrichr(...func_get_args()); } }
if (!function_exists('mb_strripos')) { function mb_strripos() { return \Sparkfp\mb_strripos(...func_get_args()); } }
if (!function_exists('mb_strrpos')) { function mb_strrpos() { return \Sparkfp\mb_strrpos(...func_get_args()); } }
if (!function_exists('mb_strstr')) { function mb_strstr() { return \Sparkfp\mb_strstr(...func_get_args()); } }
if (!function_exists('mb_strtolower')) { function mb_strtolower() { return \Sparkfp\mb_strtolower(...func_get_args()); } }
if (!function_exists('mb_strtoupper')) { function mb_strtoupper() { return \Sparkfp\mb_strtoupper(...func_get_args()); } }
if (!function_exists('mb_strwidth')) { function mb_strwidth() { return \Sparkfp\mb_strwidth(...func_get_args()); } }
if (!function_exists('mb_substitute_character')) { function mb_substitute_character() { return \Sparkfp\mb_substitute_character(...func_get_args()); } }
if (!function_exists('mb_substr')) { function mb_substr() { return \Sparkfp\mb_substr(...func_get_args()); } }
if (!function_exists('mb_substr_count')) { function mb_substr_count() { return \Sparkfp\mb_substr_count(...func_get_args()); } }
if (!function_exists('normalizer_is_normalized')) { function normalizer_is_normalized() { return \Sparkfp\normalizer_is_normalized(...func_get_args()); } }
if (!function_exists('normalizer_normalize')) { function normalizer_normalize() { return \Sparkfp\normalizer_normalize(...func_get_args()); } }
if (!function_exists('plugin_basename')) { function plugin_basename() { return \Sparkfp\plugin_basename(...func_get_args()); } }
if (!function_exists('plugin_dir_path')) { function plugin_dir_path() { return \Sparkfp\plugin_dir_path(...func_get_args()); } }
if (!function_exists('plugin_dir_url')) { function plugin_dir_url() { return \Sparkfp\plugin_dir_url(...func_get_args()); } }
if (!function_exists('preg_last_error_msg')) { function preg_last_error_msg() { return \Sparkfp\preg_last_error_msg(...func_get_args()); } }
if (!function_exists('register_activation_hook')) { function register_activation_hook() { return \Sparkfp\register_activation_hook(...func_get_args()); } }
if (!function_exists('register_deactivation_hook')) { function register_deactivation_hook() { return \Sparkfp\register_deactivation_hook(...func_get_args()); } }
if (!function_exists('sanitize_text_field')) { function sanitize_text_field() { return \Sparkfp\sanitize_text_field(...func_get_args()); } }
if (!function_exists('str_contains')) { function str_contains() { return \Sparkfp\str_contains(...func_get_args()); } }
if (!function_exists('str_ends_with')) { function str_ends_with() { return \Sparkfp\str_ends_with(...func_get_args()); } }
if (!function_exists('str_starts_with')) { function str_starts_with() { return \Sparkfp\str_starts_with(...func_get_args()); } }
if (!function_exists('trigger_deprecation')) { function trigger_deprecation() { return \Sparkfp\trigger_deprecation(...func_get_args()); } }
if (!function_exists('woodmart_loop_prop')) { function woodmart_loop_prop() { return \Sparkfp\woodmart_loop_prop(...func_get_args()); } }
if (!function_exists('woodmart_set_loop_prop')) { function woodmart_set_loop_prop() { return \Sparkfp\woodmart_set_loop_prop(...func_get_args()); } }

return $loader;
