<?php
   //声明变量
   #小驼峰命名法
   $my_name = '欧阳锋';
   #大驼峰命名法
   $myName  = '洪七公';
   echo $my_name;
   echo '<hr/>';
   echo $myName;
   echo '<hr/>';

   //标量： 布尔型
  $ture = ture; //真
  $flase= flase; //假

  var_dump($ture);
  echo '<hr/>';
  var_dump($flase);
  echo '<hr/>';

  //整型
   $int1 = 1;
   $int2 = 0;

   var_dump($int1);
   echo '<hr/>';
   var_dump($int2);
   echo '<hr/>';

   //浮点型
   $float = 10.01;

   var_dump($float);
   echo '<hr/>';

   //字符串   ''单引号不解析，“”双引号解析
   $str = "php世界最强";

   var_dump($ture);
   echo '<hr/>';

   //算数运算符 + - * / %
   $int3 = 100;
   $int4 = 30;
   var_dump($int3 + $int4);
   echo '<hr/>';
  //字符串运算符号 .

  $str1 = '欧阳';
  $str2 = '18岁';
  var_dump($str1.$str2);
  var_dump($str1 . 5);
  echo '<hr/>';
  //赋值运算符 = += -= *= /= %= .=
   $var1 = 100;
   $var2 = 100;
   $var3 = 10;
   //  效果相同
   $var1 += 30;
   $var2 = $var2 + 30;

   var_dump($var1);
   echo '<hr/>';
   var_dump($var2);
   echo '<hr/>';
   //连接等于 .=

   $var3 .= 20;
   var_dump($var3);
   echo '<hr/>';
   $var4 = $var1.$var2;
   var_dump($var4);
   echo '<hr/>';

   //递增运算符号 ++ --
   $i = 1;
   var_dump(++$i);
   echo '<hr/>';
   //逻辑运算符 && || xor ！
   /*
   &&  与（同时为真 返回真）
   ||  或（只要有一个为真 返回真）
   xor 亦或 （两个不一样 返回真：一个为假 返回真；两个为真 返回假；两个为假 返回假；）
   ！  非  （取反）
   */

   //比较运算符 < > <= >= == != === !==
 /*
  == 双等于 是 等于
  != 不等于
  === 恒等于  值和数据类型  都要等于
  !== 非恒等于  值和数据类型  有一个等于
  */

 //条件运算符 ？ ：
  $var5 = '可爱的';

  var_dump($var5 =='乖乖' ? '聊':'不聊');
  echo '<hr/>';

  //条件控制语句  if else   switch case  bleak

  // 循环控制语句  while   for

  //先判断，后执行
  $int5 = 1;
  while ( $int5 <= 5){
      var_dump($int5);
      echo '<hr/>';
      $int5 += 2 ;
  }
   //先执行，后判断
  $int6 = 1;
  do {
      var_dump($int6);
      echo '<hr/>';
      $int6 += 1 ;
  }while ($int6 <= 10);

  //循环判断，后执行
  for($int = 1 ; $int < 10 ; $int ++ ){
      if ($int == 5)
      {
          //结束当前循环
          continue;
          //结束整个循环
          break;
      }

  }

?>