<?php

$fresherPhp = array([
    'first_name' => ' linh',
    'last_name' => 'nguyễn',
    'middle_name' => '', // ban nao ko co thi la trong.
    'birth_day' => '01-06-1991',
    'phone_number' => '01649593418'
], [
    'first_name' => 'Thieu1',
    'last_name' => 'Nguyen1',
    'middle_name' => 'Van1', // ban nao ko co thi la trong.
    'birth_day' => '01-06-1992',
    'phone_number' => '0909593418'
]);

class Util
{
    public $phone_number;
    public $fresher;

    function __construct(array $arr)
    {
        $this->fresher = $arr;
    }
     protected function age($fresher)
     {
         //get nowday
         $nowday = getdate();
         //get birthday
         $birthday = explode('-', $fresher['birth_day']);

         if ($birthday[2] > $nowday) {
             return false;
         }

         return $nowday['year'] - $birthday[2];
     }

     public function getMaxAge ()
     {
        $max = $this->age($this->fresher[0]);

        foreach($this->fresher as $key =>$value )
        {
            if ($this->age($value) > $max)
            {
                $max = $this->age($value);
            }
        }
         return $max;
     }

     public  function getMinAge()
     {
         $min = $this->age($this->fresher[0]);

         foreach($this->fresher as $key =>$value )
         {
             if ($this->age($value) <= $min)
             {
                 $min = $this->age($value);
             }
         }
         return $min;
     }

}

    $age = new Util($fresherPhp);
    print_r($age->getMaxAge());

    print_r($age->getMinAge());