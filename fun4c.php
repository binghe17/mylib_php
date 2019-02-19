<?php 

//在前一篇文章 深入 Drupal 引导流程 (3) - session_set_save_handler 中，提及到一种 callback 类型，在 PHP 原生类型里面并没有一种类型叫做 callback，按照官方文档的说法，callback 仅仅是在文档里面提及到的虚构类型 (伪类型)。callback 就是回调的意思，顾名思义它常被以参数的方式传递给其他函数，让别人来调用自己。PHP 的 callback 可以包括全局函数和类方法。
//callback 的有效表示方法有以下几种

//全局函数
function bar($string)
{
  echo $string;
}
call_user_func('bar', 'Hello world.');
// 输出 Hello world.

//对象方法
class foo
{
  function bar($string)
  {
    echo $string;
  }
}
$obj = new foo;
call_user_func(array($obj, 'bar'), 'Hello world.');
// 输出 Hello world.
// PHP4 下 $obj 需要写成 &$obj，解析在文章最后


//静态类方法
class foo
{
  static function bar($string)
  {
    echo $string;
  }
}
call_user_func(array('foo', 'bar'), 'Hello world.');
// 输出 Hello world.
call_user_func('foo::bar', 'Hello world.');
// 同样也是输出 Hello world. 这种语法只适用于 PHP 5.2.3 以上


//类内部调用
class foo
{
  function bar($string)
  {
    echo $string;
  }
  function callback()
  {
    call_user_func(array('self', 'bar'), 'Hello world.');
    // 输出 Hello world.
  }
}
foo::callback();

//以上是静态调用，如果是对象的内部调用，只需要改成
call_user_func(array($this, 'bar'), 'Hello world.');

//注意 : 如果是 PHP 4，那么 $this 需要写成 &$this 来显式的传递引用，否则 PHP 会传递一个对象的拷贝过去的，而 PHP 5 后对象的传递默认就已经是引用了