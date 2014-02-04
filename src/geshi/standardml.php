<?php
/*************************************************************************************
 * standardml.php
 * ----------
 * Author: eldesh (nephits@gmail.com)
 * Copyright: (c) 2014 eldesh (http://d.hatena.ne.jp/eldesh/)
 * Release Version: 1.0.8.11
 * Date Started: 2014/02/04
 *
 * SML (StandardML'97) language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2014/02/04 (1.0.8.11)
 *   -  First Release
 *
 * TODO (updated 2014/02/04)
 * -------------------------
 * - character literal
 * - word literal (hex | dec)
 * - integer literal (hex | dec)
 *
 *************************************************************************************
 *
 *   This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'StandardML',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array('(*' => '*)'),
    'COMMENT_REGEXP' => array(1 => '/\(\*(?:(?R)|.)+?\*\)/s'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_INT_CSTYLE | GESHI_NUMBER_BIN_PREFIX_0B |
        GESHI_NUMBER_HEX_PREFIX | GESHI_NUMBER_FLT_NONSCI,
    'KEYWORDS' => array(
        /* main SML keywords */
        1 => array(
            'and', 'andalso', 'as', 'begin', 'case', 'datatype', 'else',
            'end', 'exception', 'fn', 'fun', 'functor',
            'if', 'in', 'infix', 'infixr', 'include', 'let', 'local', 'nonfix',
            'of', 'op', 'open', 'orelse',
            'rec', 'raise', 'sharing', 'sig', 'signature', 'struct', 'structure', 'then',
            'type', 'val', 'while', 'where', 'with', 'withtype'
            ),
        /* Top-level type and value identifiers */
        2 => array(
            /* types */
            'unit', 'int', 'word', 'real', 'char', 'string', 'substring', 'exn',
            'array', 'vector', 'ref', 'bool', 'true', 'false', 'option', 'NONE', 'SOME', 'LESS', 'EQUAL', 'GREATER',
            'list', 'nil',
            'General', 'Int', 'Word', 'Real', 'Char', 'String', 'Substring', 'Array', 'Vector', 'Option'
            ),
        /* standard structures/signatures/functors provided by Basis library */
        3 => array(
            'ARRAY', 'Array2', 'ARRAY2', 'ArraySlice', 'ARRAY_SLICE', 'BinIO', 'BIT_FLAGS', 'Bool', 'BOOL', 'Byte', 'CHAR',
            'CommandLine', 'Date', 'GenericSock', 'IEEEReal', 'IMPERATIVE_IO',
            'ImperativeIO', 'INetSock', 'INTEGER', 'IntInf', 'IO', 'List', 'ListPair',
            'MATH', 'MONO_ARRAY', 'MONO_ARRAY2', 'MONO_ARRAY_SLICE', 'MONO_VECTOR',
            'MONO_VECTOR_SLICE', 'NetHostDB', 'NetProtDB', 'NetServDB',
            'OS', 'OS.FileSys', 'OS.IO', 'OS.Path', 'OS.Process', 'PACK_REAL', 'PACK_WORD',
            'Posix', 'Posix.Error', 'Posix.FileSys', 'Posix.IO', 'Posix.ProcEnv', 'Posix.Process',
            'Posix.Signal', 'Posix.SysDB', 'Posix.TTY', 'PRIM_IO', 'PrimIO', 'REAL', 'Socket',
            'STREAM_IO', 'StreamIO', 'STRING', 'StringCvt', 'SUBSTRING', 'TEXT', 'TEXT_IO',
            'TEXT_STREAM_IO', 'Time', 'Timer', 'Unix', 'UnixSock', 'VECTOR', 'VECTOR_SLICE',
            'Windows', 'WORD'
            ),
        /* Top-level value identifiers */
        4 => array(
            'app', 'before', 'ceil', 'chr', 'concat', 'exnMessage', 'exnName', 'explode',
            'floor', 'foldl', 'foldr', 'getOpt', 'hd', 'ignore', 'implode', 'isSome', 'length', 'map', 'not',
            'null', 'o', 'ord', 'print', 'rev', 'round', 'size', 'str', 'tl', 'trunc',
            'use', 'valOf',
            /* overloaded identifiers */
            'div', 'mod', 'abs'
            ),
        /* standard exceptions */
        5 => array (
            'Bind', 'Chr', 'Div', 'Domain', 'Empty', 'Fail', 'Match', 'Overflow', 'Size', 'Span', 'Subscript'
            )
        ),
    /* highlighting symbols is really important in OCaml */
    'SYMBOLS' => array(
        0 => array('=', ':', ':>', '=>', '(', ')', '|', '_', '==', '#', ';', '.'),
        1 => array('!', ':=', '@', '^'),
        2 => array('[', ']', '::', '{', '}'),
        /* overloaded identifiers */
        3 => array('+', '-', '*', '/', '~', '<', '>', '<=', '>=')
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true, /* keywords */
        2 => true, /* top level types */
        3 => true, /* structures */
        4 => true, /* top level identifiers */
        5 => true  /* top level exceptions */
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #06c; font-weight: bold;',
            2 => 'color: #06c; font-weight: bold;',
            3 => 'color: #06c; font-weight: bold;',
            4 => 'color: #06c; font-weight: bold;',
            5 => 'color: #06c; font-weight: bold;'
            ),
        'COMMENTS' => array(
            'MULTI' => 'color: #5d478b; font-style: italic;', /* light purple */
            1 => 'color: #5d478b; font-style: italic;' /* light purple */
            ),
        'ESCAPE_CHAR' => array(
            ),
        'BRACKETS' => array(
            0 => 'color: #a52a2a;'
            ),
        'STRINGS' => array(
            0 => 'color: #3cb371;' /* nice green */
            ),
        'NUMBERS' => array(
            0 => 'color: #c6c;' /* pink */
            ),
        'METHODS' => array(
            1 => 'color: #060;' /* dark green */
            ),
        'REGEXPS' => array(
            1 => 'font-weight:bold; color:#339933;',
            2 => 'font-weight:bold; color:#993399;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #a52a2a;' /* maroon */
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => 'http://www.standardml.org/Basis/top-level-chapter.html',
        3 => 'http://www.standardml.org/Basis/{FNAME}.html',
        4 => 'http://www.standardml.org/Basis/{FNAME}.html',
        5 => 'http://www.standardml.org/Basis/top-level-chapter.html#section:2'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.'
        ),
    'REGEXPS' => array(
        1 => '~\w+',
        2 => '`(?=(?-i:[a-z]))\w*',
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);
