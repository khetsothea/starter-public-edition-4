<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2015
 * @license The MIT License, http://opensource.org/licenses/MIT
 *
 * @see https://github.com/pyrocms/lex
 */

// The character(s) used by Lex to trigger a scope change. A scope change is,
// for instance accessing a nested variable inside and array/object,
$config['scope_glue'] = ':';

// Sets the noparse style; FALSE - immediate, TRUE - cumulative.
$config['cumulative_noparse'] = false;


// Lex Parser Extensions

// A whitelist of constants that Lex parser can access.
$config['allowed_globals'] = array(
    'BASE_URL',
    'BASE_URI',
    'SERVER_URL',
    'SITE_URL',
    'SITE_URI',
    'CURRENT_SITE_URL',
    'CURRENT_SITE_URI',
    'CURRENT_URL',
    'CURRENT_URI',
    'DEFAULT_BASE_URL',
    'DEFAULT_BASE_URI',
    'ASSET_URL',
    'ASSET_URI',
    'THEME_ASSET_URL',
    'THEME_ASSET_URI',
    'ASSET_IMG_URL',
    'ASSET_IMG_URI',
    'ASSET_JS_URL',
    'ASSET_JS_URI',
    'ASSET_CSS_URL',
    'ASSET_CSS_URI',
);

// A whitelist of functions that Lex parser can execute.
$config['allowed_functions'] = array(
    'character_limiter',
    'count',
    'date',
    'empty',
    'explode',
    'gettype',
    'gmap_url',
    'highlight_phrase',
    'html_entity_decode',
    'html_escape',
    'htmlentities',
    'htmlspecialchars',
    'htmlspecialchars_decode',
    'humanize',
    'implode',
    'is_array',
    'is_bool',
    'is_boolean',
    'is_https',
    'is_int',
    'is_integer',
    'is_null',
    'is_numeric',
    'is_object',
    'is_scalar',
    'is_string',
    'isset',
    'json_decode',
    'json_encode',
    'ltrim',
    'md5',
    'money_format',
    'nl2br',
    'number_format',
    'preg_match',
    'preg_match_all',
    'preg_replace',
    'print_d',
    'print_r',
    'rand_string',
    'rtrim',
    'safe_mailto',
    'slugify',
    'sha1',
    'sprintf',
    'str_replace',
    'strip_tags',
    'stripos',
    'strlen',
    'strpos',
    'strtolower',
    'strtoupper',
    'substr',
    'timespan',
    'trim',
    'ucfirst',
    'ucwords',
    'url_title',
    'var_dump',
    'var_export',
    'word_limiter',
    'word_wrap', // CodeIgniter
    'wordwrap',  // PHP
);
