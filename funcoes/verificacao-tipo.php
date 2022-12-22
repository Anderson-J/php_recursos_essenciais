<?php

var_dump(is_int(123)); // true
var_dump(is_int("123")); // false

var_dump(is_float(123.00)); // true
var_dump(is_float("123.00")); // false

var_dump(is_numeric(123.00)); // true
var_dump(is_numeric("123.00")); // true
var_dump(is_numeric(123)); // true
var_dump(is_numeric("123")); // true

var_dump(is_string("asdasfsd")); // true

var_dump(is_bool(true)); // true

var_dump(is_scalar([11, 2, 3, 4])); // false

var_dump(gettype("string")); // string
var_dump(gettype(123)); // inteiro