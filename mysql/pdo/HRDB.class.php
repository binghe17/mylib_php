<?php

   
class HRDB{ 
    protected $pdo; 
    protected $res; 
    protected $config; 
      
    /*构造函数*/
    function __construct($config){ 
        $this->Config = $config; 
        $this->connect(); 
    } 
      
    /*数据库连接*/
    public function connect(){ 
        $this->pdo = new PDO($this->Config['dsn'], $this->Config['name'], $this->Config['password']); 
        $this->pdo->query('set names utf8;'); 
        //把结果序列化成stdClass 
        //$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
        //自己写代码捕获Exception 
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    } 
      
    /*数据库关闭*/
    public function close(){ 
        $this->pdo = null; 
    } 
      
    public function query($sql){ 
        $res = $this->pdo->query($sql); 
        if($res){ 
            $this->res = $res; 
        } 
    } 
    public function exec($sql){ 
        $res = $this->pdo->exec($sql); 
        if($res){ 
            $this->res = $res; 
        } 
    } 
    public function fetchAll(){ 
        return $this->res->fetchAll(); 
    } 
    public function fetch(){ 
        return $this->res->fetch(); 
    } 
    public function fetchColumn(){ 
        return $this->res->fetchColumn(); 
    } 
    public function lastInsertId(){ 
        return $this->res->lastInsertId(); 
    } 
      
    /** 
     * 参数说明 
     * int              $debug      是否开启调试，开启则输出sql语句 
     *                              0   不开启 
     *                              1   开启 
     *                              2   开启并终止程序 
     * int              $mode       返回类型 
     *                              0   返回多条记录 
     *                              1   返回单条记录 
     *                              2   返回行数 
     * string/array     $table      数据库表，两种传值模式 
     *                              普通模式： 
     *                              'tb_member, tb_money' 
     *                              数组模式： 
     *                              array('tb_member', 'tb_money') 
     * string/array     $fields     需要查询的数据库字段，允许为空，默认为查找全部，两种传值模式 
     *                              普通模式： 
     *                              'username, password' 
     *                              数组模式： 
     *                              array('username', 'password') 
     * string/array     $sqlwhere   查询条件，允许为空，两种传值模式 
     *                              普通模式： 
     *                              'and type = 1 and username like "%os%"' 
     *                              数组模式： 
     *                              array('type = 1', 'username like "%os%"') 
     * string           $orderby    排序，默认为id倒序 
     */
    public function select($debug, $mode, $table, $fields="*", $sqlwhere="", $orderby="tbid desc"){ 
        //参数处理 
        if(is_array($table)){ 
            $table = implode(', ', $table); 
        } 
        if(is_array($fields)){ 
            $fields = implode(', ', $fields); 
        } 
        if(is_array($sqlwhere)){ 
            $sqlwhere = ' and '.implode(' and ', $sqlwhere); 
        } 
        //数据库操作 
        if($debug === 0){ 
            if($mode === 2){ 
                $this->query("select count(tbid) from $table where 1=1 $sqlwhere"); 
                $return = $this->fetchColumn(); 
            }else if($mode === 1){ 
                $this->query("select $fields from $table where 1=1 $sqlwhere order by $orderby"); 
                $return = $this->fetch(); 
            }else{ 
                $this->query("select $fields from $table where 1=1 $sqlwhere order by $orderby"); 
                $return = $this->fetchAll(); 
            } 
            return $return; 
        }else{ 
            if($mode === 2){ 
                echo "select count(tbid) from $table where 1=1 $sqlwhere"; 
            }else if($mode === 1){ 
                echo "select $fields from $table where 1=1 $sqlwhere order by $orderby"; 
            } 
            else{ 
                echo "select $fields from $table where 1=1 $sqlwhere order by $orderby"; 
            } 
            if($debug === 2){ 
                exit; 
            } 
        } 
    } 
      
    /** 
     * 参数说明 
     * int              $debug      是否开启调试，开启则输出sql语句 
     *                              0   不开启 
     *                              1   开启 
     *                              2   开启并终止程序 
     * int              $mode       返回类型 
     *                              0   无返回信息 
     *                              1   返回执行条目数 
     *                              2   返回最后一次插入记录的id 
     * string/array     $table      数据库表，两种传值模式 
     *                              普通模式： 
     *                              'tb_member, tb_money' 
     *                              数组模式： 
     *                              array('tb_member', 'tb_money') 
     * string/array     $set        需要插入的字段及内容，两种传值模式 
     *                              普通模式： 
     *                              'username = "test", type = 1, dt = now()' 
     *                              数组模式： 
     *                              array('username = "test"', 'type = 1', 'dt = now()') 
     */
    public function insert($debug, $mode, $table, $set){ 
        //参数处理 
        if(is_array($table)){ 
            $table = implode(', ', $table); 
        } 
        if(is_array($set)){ 
            $set = implode(', ', $set); 
        } 
        //数据库操作 
        if($debug === 0){ 
            if($mode === 2){ 
                $this->query("insert into $table set $set"); 
                $return = $this->lastInsertId(); 
            }else if($mode === 1){ 
                $this->exec("insert into $table set $set"); 
                $return = $this->res; 
            }else{ 
                $this->query("insert into $table set $set"); 
                $return = NULL; 
            } 
            return $return; 
        }else{ 
            echo "insert into $table set $set"; 
            if($debug === 2){ 
                exit; 
            } 
        } 
    } 
      
    /** 
     * 参数说明 
     * int              $debug      是否开启调试，开启则输出sql语句 
     *                              0   不开启 
     *                              1   开启 
     *                              2   开启并终止程序 
     * int              $mode       返回类型 
     *                              0   无返回信息 
     *                              1   返回执行条目数 
     * string           $table      数据库表，两种传值模式 
     *                              普通模式： 
     *                              'tb_member, tb_money' 
     *                              数组模式： 
     *                              array('tb_member', 'tb_money') 
     * string/array     $set        需要更新的字段及内容，两种传值模式 
     *                              普通模式： 
     *                              'username = "test", type = 1, dt = now()' 
     *                              数组模式： 
     *                              array('username = "test"', 'type = 1', 'dt = now()') 
     * string/array     $sqlwhere   修改条件，允许为空，两种传值模式 
     *                              普通模式： 
     *                              'and type = 1 and username like "%os%"' 
     *                              数组模式： 
     *                              array('type = 1', 'username like "%os%"') 
     */
    public function update($debug, $mode, $table, $set, $sqlwhere=""){ 
        //参数处理 
        if(is_array($table)){ 
            $table = implode(', ', $table); 
        } 
        if(is_array($set)){ 
            $set = implode(', ', $set); 
        } 
        if(is_array($sqlwhere)){ 
            $sqlwhere = ' and '.implode(' and ', $sqlwhere); 
        } 
        //数据库操作 
        if($debug === 0){ 
            if($mode === 1){ 
                $this->exec("update $table set $set where 1=1 $sqlwhere"); 
                $return = $this->res; 
            }else{ 
                $this->query("update $table set $set where 1=1 $sqlwhere"); 
                $return = NULL; 
            } 
            return $return; 
        }else{ 
            echo "update $table set $set where 1=1 $sqlwhere"; 
            if($debug === 2){ 
                exit; 
            } 
        } 
    } 
      
    /** 
     * 参数说明 
     * int              $debug      是否开启调试，开启则输出sql语句 
     *                              0   不开启 
     *                              1   开启 
     *                              2   开启并终止程序 
     * int              $mode       返回类型 
     *                              0   无返回信息 
     *                              1   返回执行条目数 
     * string           $table      数据库表 
     * string/array     $sqlwhere   删除条件，允许为空，两种传值模式 
     *                              普通模式： 
     *                              'and type = 1 and username like "%os%"' 
     *                              数组模式： 
     *                              array('type = 1', 'username like "%os%"') 
     */
    public function delete($debug, $mode, $table, $sqlwhere=""){ 
        //参数处理 
        if(is_array($sqlwhere)){ 
            $sqlwhere = ' and '.implode(' and ', $sqlwhere); 
        } 
        //数据库操作 
        if($debug === 0){ 
            if($mode === 1){ 
                $this->exec("delete from $table where 1=1 $sqlwhere"); 
                $return = $this->res; 
            }else{ 
                $this->query("delete from $table where 1=1 $sqlwhere"); 
                $return = NULL; 
            } 
            return $return; 
        }else{ 
            echo "delete from $table where 1=1 $sqlwhere"; 
            if($debug === 2){ 
                exit; 
            } 
        } 
    } 
} 





  
// $db = new HRDB($db_hoorayos_config); 
  
// echo '<hr><b>select测试</b><hr>'; 
// echo '普通模式，直接字符串传入<br>'; 
// $rs = $db->select(1, 0, 'tb_member', 'username, password', 'and type = 1 and username like "%os%"'); 
// echo '<br>数组模式，可传入数组<br>'; 
// $fields = array('username', 'password'); 
// $where = array('type = 1', 'username like "%os%"'); 
// $rs = $db->select(1, 0, 'tb_member', $fields, $where); 
  
// echo '<hr><b>insert测试</b><hr>'; 
// echo '普通模式，直接字符串传入<br>'; 
// $db->insert(1, 0, 'tb_member', 'username = "test", type = 1, lastlogindt = now()'); 
// echo '<br>数组模式，可传入数组<br>'; 
// $set = array('username = "test"', 'type = 1', 'lastlogindt = now()'); 
// $db->insert(1, 0, 'tb_member', $set); 
  
// echo '<hr><b>update测试</b><hr>'; 
// echo '普通模式，直接字符串传入<br>'; 
// $db->update(1, 0, 'tb_member', 'username = "123", type = 1, lastlogindt = now()', 'and tbid = 7'); 
// echo '<br>数组模式，可传入数组<br>'; 
// $set = array('username = "123"', 'type = 1', 'lastlogindt = now()'); 
// $where = array('tbid = 1'); 
// $db->update(1, 0, 'tb_member', $set, $where); 
  
// echo '<hr><b>delete测试</b><hr>'; 
// echo '普通模式，直接字符串传入<br>'; 
// $db->delete(1, 0, 'tb_member', 'and tbid = 1 and username = "hooray"'); 
// echo '<br>数组模式，可传入数组<br>'; 
// $where = array( 
//     'tbid = 1', 
//     'username = "hooray"'
// ); 
// $db->delete(1, 0, 'tb_member', $where); 
  
// echo '<hr><b>自定义sql</b><hr>'; 
// $db->query('select username, password from tb_member'); 
// $rs = $db->fetchAll(); 
// var_dump($rs); 
  
// $db->close(); 