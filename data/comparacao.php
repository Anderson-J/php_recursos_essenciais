<?php

var_dump("30/01/2020" > "05/02/2020"); // true

var_dump("2020/01/30" > "2020/02/05"); // false

var_dump("0002" > "0001999"); // true

var_dump("000-2" > "000-1999"); // true

var_dump(
    strtotime("2020-01-30") > strtotime("5-2-2020")
);