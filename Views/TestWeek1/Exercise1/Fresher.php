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

class Fresher
{
    public $first_name;
    public $last_name;
    public $middle_name;
    public $birth_day;
    public $phone_number;

    function __construct(array $arr)
    {
        $this->first_name = trim($arr['first_name']);
        $this->last_name = trim($arr['last_name']);
        $this->middle_name = trim($arr['middle_name']);
        $this->birth_day = trim($arr['birth_day']);
        $this->phone_number = trim($arr['phone_number']);
    }

    /**
     * @return string
     *  get fullname fresher &  first character conversion must be capitalized
     */
    private function fullName()
    {
        return ucfirst($this->last_name) . ' ' . ucfirst($this->middle_name) . ' ' . ucfirst($this->first_name);
    }

    public function getFullName()
    {
        return $this->fullName();
    }

    public function age()
    {
        //get nowday
        $nowday = getdate();
        //get birthday
        $birthday = explode('-', $this->birth_day);

        if ($birthday[2] > $nowday) {
            return false;
        }
        return $nowday['year'] - $birthday[2];
    }

    /**
     * @return int|string
     * get informartion mobile network operator
     */
    public function getStationPhone()
    {
        $head = '';

        $station = [
            'Viettel' => ['098', '097', '096', '0169', '0168', '0167', '0166', '0165', '0164', '0163', '0162'],
            'Vinaphone' => ['091', '094', '0123', '0124', '0125', '0127', '0129'],
            'Mobiphone' => ['090', '093', '0120', '0121', '0122', '0126', '0128']
        ];
        if (strlen($this->phone_number) == 10) {
            $head = substr($this->phone_number, 0, 3);
        }
        if (strlen($this->phone_number) == 11) {
            $head = substr($this->phone_number, 0, 4);
        }


        foreach ($station as $key => $value) {
            if (in_array($head, $value)) {
                return $key;
            }
        }
    }
}

// create object fresher09
$fresher09 = new Fresher($fresherPhp[0]);
print_r($fresher09->getStationPhone());