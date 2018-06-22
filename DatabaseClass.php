<?php
class Database extends mysqli
{
	protected $con;
	protected $exception;
	public function __construct()
	{
		$this->con = $GLOBALS['database'];

        if (!isset($this->con['port'])) {
            $this->con['port'] = 3306;
        }

		@parent::__construct($this->con['host'], $this->con['user'], $this->con['userpw'], $this->con['databasename'], $this->con['port']);

		if(mysqli_connect_error())
		{
			throw new Exception("Нет коннекта: ".mysqli_connect_error());
		}		
		parent::set_charset("utf8");
		parent::query("SET SESSION sql_mode = 'STRICT_ALL_TABLES';");
	}

	public function query($resource)
	{
		if($result = parent::query($resource))
		{
			$this->queryCount++;
			return $result;
		}
		else
		{
			throw new Exception("Ошибка: ".$this->error."<br><br>В очереди: ".$resource);
		}
        return false;
	}

	public function getFirstRow($resource)
	{		
		return $this->uniquequery($resource);
	}

	public function uniquequery($resource)
	{		
		$result = $this->query($resource);
		$Return = $result->fetch_array(MYSQLI_ASSOC);
		$result->close();
		return $Return;
		
	}

	public function getFirstCell($resource)
	{		
		return $this->countquery($resource);
	}
	public function countquery($resource)
	{		
		$result = $this->query($resource);
		list($Return) = $result->fetch_array(MYSQLI_NUM);
		$result->close();
		return $Return;
	}	

	public function fetchquery($resource, $encode = array())
	{		
		$result = $this->query($resource);
		$Return	= array();
		$Col	= 0;
		while($Data	= $result->fetch_array(MYSQLI_ASSOC)) {
			foreach($Data as $Key => $Store) {
				if(in_array($Key, $encode))
					$Data[$Key]	= base64_encode($Store);
			}
			$Return[]	= $Data;
		}
		$result->close();
		return $Return;
	}
	
	public function fetchArray($result)
	{
		return $result->fetch_array(MYSQLI_ASSOC);
	}
	
	public function fetch_array($result)
	{
		return $result->fetch_array(MYSQLI_ASSOC);
	}

	public function fetch_num($result)
	{
		return $result->fetch_array(MYSQLI_NUM);
	}

	public function numRows($query)
	{
		return $query->num_rows;
	}
	
	public function affectedRows()
	{
		return $this->affected_rows;
	}

	public function GetInsertID()
	{
		return $this->insert_id;
	}

    public function escape($string, $flag = false)
    {
		return $this->sql_escape($string, $flag);
    }
	
    public function sql_escape($string, $flag = false)
    {
		return ($flag === false) ? parent::escape_string($string): addcslashes(parent::escape_string($string), '%_');
    }
	
	public function str_correction($str)
	{
		return stripcslashes($str);
	}

	public function getVersion()
	{
		return parent::get_client_info();
	}
	
	public function getServerVersion()
	{
		return $this->server_info;
	}

	public function free_result($resource)
	{
		return $resource->close();
	}
	
	public function multi_query($resource)
	{	
		$Timer	= microtime(true);
		if(parent::multi_query($resource))
		{
			do {
			    if ($result = parent::store_result())
					$result->free();
				
				$this->queryCount++;
					
				if(!parent::more_results()){break;}
					
			} while (parent::next_result());		
		}
		
		$this->SQL[]	= $resource;
	
		if ($this->errno)
		{
			throw new Exception("Ошибка: ".$this->error."<br><br>Код очереди: ".$resource);
		}
	}
	
	public function get_sql()
	{
		return $this->queryCount;
	}
}
