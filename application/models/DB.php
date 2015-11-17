<?php


class DB{
	private static $_instance = null;
	private $_pdo,
			$_query,
			$_error = false,
			$_results,
			$_count = 0;
			
	private function __construct(){
		try{
			$this->_pdo = new PDO('mysql:host=' . config::get('mysql/host').';dbname=' . config::get('mysql/db'),config::get('mysql/User_Name'),config::get('mysql/Password'));
			
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
	}
	public static function getInstance(){
		if(!isset(self::$_instance)){
			self::$_instance = new DB();
		}
		return self::$_instance;
	}
	
	public function query($sql, $params = array()){
		$this->_error = false;
		if($this->_query =$this ->_pdo->prepare($sql)){
			$x =1;
			if(count($params)){
				foreach($params as $param){
					$this->_query->bindValue($x,$param);
					$x++;
					}
				}
				
			if($this->_query->execute()){
					$this->_results= $this->_query->fetchAll(PDO::FETCH_OBJ);
					$this->_count = $this->_query->rowCount();
					}else{
						$this->_error =true;
						
						}
					
			}
			return $this;
			
		}
    public function action($action,$table,$where =array()){
			if(count($where) === 3){
				$operators = array('=','>','<','>=','<=');
				$field    =$where[0];
				$operator =$where[1];
				$value    =$where[2];
				if(in_array($operator,$operators)){
					$sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
					
					if(!$this->query($sql, array($value))->error()){
						return $this;
						}
					}
				}
				return false;
				
			}
			
			
    public function get($table,$where){
			return $this->action('SELECT *',$table,$where);
			}

    // new function for select all form data-base


    public function getAll($table){
        $stmt = $this->_pdo->query('SELECT * FROM '.$table);
        return $stmt;
    }


    /**
     * @param $lessonId
     * @return all slide start and end time
     */
    public function getAllBySortOrder($lessonId){
        $stmt = $this->_pdo->query('SELECT * FROM configdata WHERE lesson_id = '.$lessonId.' ORDER BY slide_id');
        return $stmt;

    }

	/**
	 * @param $lessonId
	 * @return all data relevet to lesson id
	 */
	public function getLessonbyid($lessonId){
		$stmt = $this->_pdo->query('SELECT * FROM lesson WHERE lesson_id ='.$lessonId);
		return $stmt;
	}


    //end of new function



		
		public function delete($table,$where){
			return $this->action('DELETE',$table,$where);
			
			
			}
		public function insert($table,$fields = array()){
			
				$keys = array_keys($fields);
				$values = null;
				$x = 1;
				foreach($fields as $field){
					$values .= "?";
					if($x < count($fields)){
						$values .= ', ';
						
						}
					$x++;
					}
					
				$sql = "INSERT INTO {$table} (`" .implode('`, `', $keys) . "`) VALUES ({$values})";
				
				if(!$this->query($sql, $fields)->error()){
					return true;
					}
				
				
				return false;
			}
		
		public function update($table,$id,$fields){
			$set = '';
			$x=1;
			foreach($fields as $name => $value){
				$set .="{$name}=?";
				if($x < count($fields)){
					$set .= ', ';
					}
					$x++;
				}
				
			
			$sql = "UPDATE {$table} SET {$set} WHERE User_ID = {$id}";
			if(!$this->query($sql,$fields)->error()){
				return true;
				}
				return false;
			}	

	       public function updateLessonTable($table,$id,$fields){
			$set = '';
			$x=1;
			foreach($fields as $name => $value){
				$set .="{$name}=?";
				if($x < count($fields)){
					$set .= ', ';
					}
					$x++;
				}
				
			$sql = "UPDATE {$table} SET {$set} WHERE lesson_id = {$id}";
			if(!$this->query($sql,$fields)->error()){
				
				return true;
			}
				return false;
			}		
			
		public function Search($keyWord){
			
				$search_sql=$this->_pdo->query("SELECT * FROM lesson WHERE description LIKE '%".$keyWord."%' OR category LIKE '%".$keyWord."%' "); 
				return $search_sql;
			
		}
		public function results(){
			return $this->_results;
			}
		
		public function first(){
			return $this->results()[0];
			}
			
		public function count(){
			return $this->_count;
			
			}
		public function error(){
			return $this->_error;
			 }
}


