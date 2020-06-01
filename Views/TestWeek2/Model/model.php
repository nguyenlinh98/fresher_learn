<?php

include_once "../Database/Connect.php";

class Model
{
    public $query = '';

    /**
     * @param $query
     * @return array|null
     */
    public function getAll($query)
    {
        global $conn;
        $result = mysqli_query($conn,$query);
        $arr = array();
        if ($result > 0) {
            while ($row = mysqli_fetch_object($result)) {
                $arr[] = $row;
            }
          return $arr;
        } else {
            echo " Không có bản ghi nào";
        }

    }

    /**
     * @param $query
     */
    public function execute($query)
    {
        global $conn;
        mysqli_query($conn,$query);

    }

    /**
     * @param $conn
     * @param $query
     * @return array|null
     */
    public function getRecord($conn,$query)
    {
        global $conn;
        $result = mysqli_query($query);
        while ($row = mysqli_fetch_object($result)){
            return  $row;
        }

    }

    /**
     * @param $query
     */
    public function numRow($query)
    {
        global $conn;
        $result = mysqli_query($query);
        $row = mysqli_fetch_row($result);

    }

}