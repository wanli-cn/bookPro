<?php
  //字符串连接 逗号 .
  //两个变量连接，可直接用逗号
  //一个变量和字符串连接， 可直接用逗号
  //一个变量 连接 整型 ， 必须在整型前增加一个空格
   $var1 = '张三';
   $var2 = '4';
   $var3 = 5 ;
   var_dump($var1.$var2.'我是字符串'.$var3 . 8);

   //在  连接  的时候  前后  都加 空格 ，问题可解决