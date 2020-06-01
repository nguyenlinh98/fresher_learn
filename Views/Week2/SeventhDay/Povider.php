<?php
class Phone
{
    const VIETEL = array('098', '097', '096', '0169', '0168', '0167', '0166', '0165', '0164', '0163', '0162');
    const VINAPHONE = array('091', '094', '0123', '0124', '0125', '0127', '0129');
    const BEELINE = array('099');


    public function getServiceName($phone)
    {
        if (!$this->isPhoneNumber($phone))
            return "Invalid data";

        $startNumber = $this->getStartNumber($phone);

        return $this->getServiceProvider($startNumber);
    }

    private function getServiceProvider($startNumber)
    {
        if ($this->isVietel($startNumber)) {
            return "Vietel";
        }
        if ($this->isVinaphone($startNumber)) {
            return "Vinaphone";
        }

        if ($this->isMobiphone($startNumber)) {
            return "Mobiphone";
        }

        if ($this->isBeeline($startNumber)) {
            return "Beeline";
        }

        return "We don't know";
    }

    private function isVietel($startNumber)
    {
        return in_array($startNumber, self::VIETEL);
    }

    private function isVinaphone($startNumber)
    {
        return in_array($startNumber, self::VINAPHONE);
    }

    private function isMobiphone($startNumber)
    {
        return in_array($startNumber, self::MOBIPHONE);
    }

    private function isBeeline($startNumber)
    {
        return in_array($startNumber, self::BEELINE);
    }

    private function isPhoneNumber($number)
    {
        return ((preg_match('/^[0-9]\S$/', $number)) && (strlen($number) == 10 || strlen($number) == 11));
    }

    private function getStartNumber($number)
    {
        ($numberOfProvider = strlen($number) == 10 )?3:4;

        return substr($number, 0, $numberOfProvider);
    }
//        if (preg_match('/\S/', $this->phone) && preg_match('/^[0-9]$/', $this->phone) && (strlen($this->phone) == 10 || strlen($this->phone) == 11))
}

$phone = new Phone();
echo $phone->getServiceName('0986523798');