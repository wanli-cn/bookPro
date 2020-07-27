<?php

  //创建数组
  $arr = array();
  //索引数组
  $arr = array('西','门','大','官','人');
  var_dump($arr);
  echo '<hr/>';
  //关联数组
  $arr = array(
      'a' => '王',
      'b' => '牌',
      'c' => '飞',
      'd' => '行',
      'e' => '员'
  );
  var_dump($arr);
  echo '<hr/>';
  //二维数组 ，多维数组
  $arrm = array(
      'one' => array(
          'name' => '二',
          'age' => '维',
          'sex' => '数',
      ),
      'two' => array(
          'name' => '欧',
          'age' => '皇',
          'sex' => '叼',
      ),

  );
  //print_r 可以让打印的东西更整洁
  print_r($arrm);
  echo '<hr/>';

  //输出, 查询数组的值
  foreach ( $arrm as $var){
      print_r( $var['name']);
      echo '<hr/>';
  }
  //查询数组的某个键key
  foreach ( $arrm as $key => $var){
      print_r( $key );
      echo '<hr/>';
  }
  //创建方法  ，方法里面不能调用外面的函数
  //所以在name，()里面可以定义,传值入方法
  function name(){
      $arr = array(
          array(
          'name' => '二',
          'age' => '维',
          'sex' => '数',
          ),
          array(
              'name' => '欧',
              'age' => '皇',
              'sex' => '叼',
          ),
      );
      var_dump($arr);
      echo '<hr/>';
  }
  name();//调用方法

  //方法的传值
  function name1($name1 , $name2 , $name3 = '三傻'){
   print_r($name1);
   echo '<hr/>';
   print_r($name2);
   echo '<hr/>';
   print_r($name3);
   echo '<hr/>';
  }
  //传值进入方法
  name1('74大傻','二傻');

  //方法
  function name2( $int){
      $int = $int * 10;
      return $int;
  }
  echo name2(10);
  //方法复制
  $var5 = name2(10);
  var_dump($var5);
  echo '<hr/>';



  //字符串转数组  explode
  $str = '字符串-转-数组';
  $arrStr = explode('-',$str);

  var_dump($arrStr);
  echo '<hr/>';

  //数组转字符串
  $arrStr = array('字符串','转','数组');//'字符串-转-数组';
  $Str = implode('',$arrStr);

  var_dump($Str);
  echo '<hr/>';

   //检测变量是否被设置过,不为null
   $var1 = null;
   var_dump(isset($var1));
    echo '<hr/>';
   //检测变量是否为空 empty  0和null不相等
   $var2 = 100;
   var_dump(empty($var2));
   echo '<hr/>';

   //isset  null为假  ，有值为真
   //empty  0和null为真  ，有值为假

   //释放变量
   unset($key , $var);
   echo '<hr/>';

   //向上取整
   $var3 = 100.01;
   var_dump(ceil($var3)); //输出101
   echo '<hr/>';

   $var4 = -100.01;
   var_dump(ceil($var4)); //输出-100
   echo '<hr/>';

   //时间戳
   $time = time();
   var_dump($time);
   echo '<hr/>';
   //时间戳转换日期
   $time += 8*60*60;//北京时间8小时，
   var_dump( date('y-m-d H:i:s',$time));
   echo '<hr/>';

   //session数据 ，保存在域名里的  , 用于存储用户信息

   session_start(); //打开
   var_dump($_SESSION);
   echo '<hr/>';

   $_SESSION = $arrm;
   var_dump($_SESSION);
   echo '<hr/>';


   //系统变量  GET用url传值
   var_dump($_GET);
   echo '<hr/>';

   //全局变量global
   global  $glovar


?>