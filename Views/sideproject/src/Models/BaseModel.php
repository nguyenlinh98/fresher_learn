<?php
namespace App\Models;

use Framework\Database\Connection;

class BaseModel extends Connection
{
    protected $conn;
    protected $table = '';
    protected $query;
    protected $fillable = [];
    protected $data = [];

    /**
     * BaseModel constructor.
     * Comunication database
     */
    public function __construct()
    {

    }

    /**
     * @return array
     * Method get all record and return array record
     * phuong thuc lay ra tat ca cac dong cua bang
     **/
    public function all()
    {
        $this->query = "SELECT * FROM $this->table ";
        $tableList = array();
        $this->data = $this->query($this->query);
        while($row = $this->data->fetch_assoc())
        {
            array_push($tableList,$row);
        }
        return $tableList;
    }

    /**
     * Method to search data by id
     *
     * @param $condition
     *
     * @return $this
     */
    public function find($id)
    {
        $this->query = "SELECT * FROM ".$this->table." where id=".$id;
        $this->data = $this->query($this->query);
        return $this;
    }

    /**
     * Method count number record by id
     * @param $id
     * @return $this
     */

    public function count($id)
    {
        $this->query = "SELECT COUNT('id') FROM".$this->table;
        return $this;
    }

    /**
     * Method get all record by Condition
     * @param array $condition
     * @return $this
     */
    public function where(array $condition)
    {
        $where = '';
        $this->query = 'SELECT * FROM '.$this->table.' WHERE ';
        foreach ($condition as $key =>$value) {
            $where .=$key." ='".$value."' AND ";
        }
        $where = rtrim($where,'AND ');
        $this->query =$this->query.$where;

        $this->data = $this->query($this->query);
        return $this;
    }

    /**
     * Method create a record with arr[$data]
     * @param array $data
     */

    public function create(array $data)
    {

        $firstQuery ='INSERT INTO '.$this->table.' ('.implode(',',$this->fillable).')';

        $data = $this->sortDataWithColumns($data);

        $insertQuery  = $firstQuery.' VALUES ('.implode(',',$data).')';

        $this->data = $this->query($insertQuery);

        /*If create was successly then get the new record is inserted*/
        $this->where(['id' => $this->data]);

        $this->query = $insertQuery;

        return $this;

    }

    public function update(array $data, $id){
        // add update_at
        $data["updated_at"] = date('Y-m-d H:i:s');
        $set ="";
        foreach ($data as $key => $value){
            $set .= "$key='$value',";
        }

        $set = substr($set,0,-1);
        $query = "UPDATE $this->table SET $set WHERE id = $id";
        $this->query($query);
        return $this;
    }

    public function getConditionSearch($key){
        $search = "";
        foreach ($this->fillable as $value){
            $search .= "$value LIKE '%$key%' OR ";
        }
        $search = substr($search,0,-4);
        return $search;
    }

    public function search($key, $start,$numberRecord, $orderBy = 'id desc'){
        $search = $this->getConditionSearch($key);
        $sql = "SELECT * FROM $this->table WHERE $search ORDER BY $orderBy LIMIT $start,$numberRecord";
        $result = mysqli_query($this->conn,$sql);
        $arr = array();
        while($rows = mysqli_fetch_object($result))
            $arr[] = $rows;
        return $arr;
    }

    public function delete($id){
        $this->query ='DELETE FROM'.$this->table.'WHERE id ='.$id;
        $this->query($this->query);
        return $this;
    }
    public function deletebyCondition($condition){
         $query = $this->query('DELETE FROM'.$this->table .'WHERE' .$condition);
         var_dump($query);

    }


    /**
	* Method to get data from object
	* Return array data in object
	*
	**/
    public function get()
    {
        return $this->data->fetch_assoc();
    }

    /**
     * @param $start
     * @param $numberRecord
     * @return array
     */
    public  function getDataWithLimit($start,$numberRecord){
        $this->query = "SELECT * FROM $this->table LIMIT $start,$numberRecord";
        $this->data = $this->query($this->query);
        $tableList =[];
        while ($row =$this->data->fetch_assoc()){
            array_push($tableList,$row);
        }
        return $tableList;
    }

    /**
     * Method sort all record
     *  And get limit with start id with $start and $numberRecord is number record
     * @param $start
     * @param $numberRecord
     * @param string $orderBy
     * @return $this
     */
    public function getAllOrderByLimit($start,$numberRecord,$orderBy = "id desc"){
            $query = "SELECT * FROM `$this->table`ORDER BY $orderBy LIMIT $start,$numberRecord";
            $this->data =$this->query($this->query);
            return $this;
    }

    public function getAllOrderBy($orderBy = "id desc")
    {
        $query = "SELECT * FROM `$this->table`ORDER BY $orderBy ";
        $this->data =$this->query($this->query);
        return $this;
    }
    /**
     *
    **/
    public function sortDataWithColumns(array $data)
    {
        $newArray = [];
        foreach ($this->fillable as $key => $value)
        {
            if (empty($data[$value]))
            {
                $newArray[$value] = 'null';
            } else {
                $newArray[$value] = "'".$data[$value]."'";
            }
        }
        return $newArray;
    }

}