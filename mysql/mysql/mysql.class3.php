<?php
/**
 * Mysql数据库操作类( 1127版，提供源码下载 )
 * 
 */
class Mysql
{
    private $db_host; //主机地址
    private $db_user; //用户名
    private $db_pass; //连接密码
    private $db_name; //名称
    private $db_charset; //编码
    private $conn;
    public $debug = false; //调试开关，默认关闭
    private $query_id; //用于判断sql语句是否执行成功
    private $result; //结果集
    private $num_rows; //结果集中行的数目，仅对select有效
    private $insert_id; //上一步 INSERT 操作产生的 ID
    // 构造/析构函数
    function __construct($db_host, $db_user, $db_pass, $db_name, $db_charset, $conn)
    {
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;
        $this->db_charset = $db_charset;
        $this->conn = $conn;
        $this->connect();
    }
    function __destruct()
    {
        @mysql_close($this->conn);
    }
    // 连接/选择数据库
    public function connect()
    {
        if ($this->conn == 'pconn')
        {
            @$this->conn = mysql_pconnect($this->db_host, $this->db_user, $this->db_pass);
        } else
        {
            @$this->conn = mysql_connect($this->db_host, $this->db_user, $this->db_pass);
        }
        if (!$this->conn)
        {
            $this->show_error('数据库-连接失败：用户名或密码错误！');
        }
        if (!@mysql_select_db($this->db_name, $this->conn))
        {
            $this->show_error("数据库-选择失败：数据库 $this->db_name 不可用");
        }
        mysql_query("SET NAMES $this->db_charset");
        return $this->conn;
    }
    // query方法
    public function query($sql)
    {
        if ($this->query_id)
            $this->free_result();
        $this->query_id = @mysql_query($sql, $this->conn);
        if (!$this->query_id)
            $this->show_error("SQL语句 <b>\"$sql\"</b> 执行时遇到错误");
        return $this->query_id;
    }
    // 显示详细错误信息
    public function show_error($msg)
    {
        if ($this->debug)
        {
            $errinfo = mysql_error();
            echo "错误：$msg <br/> 返回：$errinfo<p>";
        } else
        {
            echo '<p>出现错误！<p>';
        }
    }
    // 获得query执行成功与否的信息
    public function get_query_info($info)
    {
        if ($this->query_id)
        {
            echo $info;
        }
    }
    // 查询所有
    public function findall($table_name)
    {
        $this->query("select * from $table_name");
    }
    // mysql_fetch_array
    public function fetch_array()
    {
        if ($this->query_id)
        {
            $this->result = mysql_fetch_array($this->query_id);
            return $this->result;
        }
    }
    // ......
    public function fetch_assoc()
    {
        if ($this->query_id)
        {
            $this->result = mysql_fetch_assoc($this->query_id);
            return $this->result;
        }
    }
    public function fetch_row()
    {
        if ($this->query_id)
        {
            $this->result = mysql_fetch_row($this->query_id);
            return $this->result;
        }
    }
    public function fetch_object()
    {
        if ($this->query_id)
        {
            $this->result = mysql_fetch_object($this->query_id);
            return $this->result;
        }
    }
    // 获取 num_rows
    public function num_rows()
    {
        if ($this->query_id)
        {
            $this->num_rows = mysql_num_rows($this->query_id);
            return $this->num_rows;
        }
    }
    // 获取 insert_id
    public function insert_id()
    {
        return $this->insert_id = mysql_insert_id();
    }
    // 显示共有多少张表
    public function show_tables()
    {
        $this->query("show tables");
        if ($this->query_id)
        {
            echo "数据库 $this->db_name 共有 " . $this->num_rows($this->query_id) . " 张表<br/>";
            $i = 1;
            while ($row = $this->fetch_array($this->query_id))
            {
                echo "$i -- $row[0]<br/>";
                $i++;
            }
        }
    }
    // 显示共有多少个数据库
    public function show_dbs()
    {
        $this->query("show databases");
        if ($this->query_id)
        {
            echo "共有数据库 " . $this->num_rows($this->query_id) . " 个<br/>";
            $i = 1;
            while ($this->row = $this->fetch_array($this->query_id))
            {
                echo "$i -- " . $this->row[Database] . "<br />";
                $i++;
            }
        }
    }
    // 删除数据库：返回删除结果
    public function drop_db($db_name = '')
    {
        if ($db_name == '')
        {
            $db_name = $this->db_name; //默认删除当前数据库
            $this->query("DROP DATABASE $db_name");
        } else
        {
            $this->query("DROP DATABASE $db_name");
        }
        if ($this->query_id)
        {
            return "数据库 $db_name 删除成功";
        } else
        {
            $this->show_error("数据库 $db_name 删除失败");
        }
    }
    // 删除数据表：返回删除结果
    public function drop_table($table_name)
    {
        $this->query("DROP TABLE $table_name");
        if ($this->query_id)
        {
            return "数据表 $table_name 删除成功";
        } else
        {
            $this->show_error("数据表 $table_name 删除失败");
        }
    }
    // 创建数据库
    public function create_db($db_name)
    {
        $this->query("CREATE DATABASE $db_name");
        if ($this->query_id)
        {
            return "数据库 $db_name 创建成功";
        } else
        {
            $this->show_error("数据库 $db_name 创建失败");
        }
    }
    // 获取数据库版本
    public function get_info()
    {
        echo mysql_get_server_info();
    }
    // 释放内存
    public function free_result()
    {
        if (@mysql_free_result($this->query_id))
            unset($this->result);
        $this->query_id = 0;
    }
} // End class


?> 
