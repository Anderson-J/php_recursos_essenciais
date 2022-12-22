<?php

var_dump("Anderson" == 0); // true por causa da conversão automática
var_dump("11t" == 11); // true por causa da conversão automática

var_dump("Anderson" === 0); // false por causa da comparação estrita
var_dump("11t" === 11); // false por causa da comparação estrita

var_dump(strcmp('aa', 'aaa'), 'aa' <=> 'aaa');
var_dump(strcasecmp('aaa', 'aAa'), 'aa' <=> 'aaa');

var_dump(strtoupper("Anderson"));
var_dump(strtolower("Anderson"));
var_dump(ucfirst("anderson"));
var_dump(ucwords("anderson oliveira"));
var_dump(ltrim('     Anderson     '));
var_dump(rtrim('     Anderson     '));
var_dump(trim('     Anderson     '));