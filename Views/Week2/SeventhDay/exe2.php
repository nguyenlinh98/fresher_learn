<?php

Class phone
{
    const VIETTEL = array('098', '097', '096', '0169', '0168', '0167', '0166', '0165', '0164', '0163', '0162');
    const VINAPHONE = array('091', '094', '0123', '0124', '0125', '0127', '0129');
    const MOBIPHONE = array('090', '093', '0120', '0121', '0122', '0126', '0128.2531');

    public function getProviderPhone($phone)
    {
        if (!$this->getStartNumber()) {
            return "khong ton tai";
        }

        $startNumber = $this->getStartNumber($phone);

        return $this->getStation($startNumber);
    }

    public function getStation($startphone)
    {
        if ($this->isviettel($startphone)) {
            return "Viettel";

        }
        if ($this->isVinaphone($startphone)) {
            return "vina";

        }
        if ($this->isMobilephone($startphone)) {
            return "Mobile";

        }
        return "no found";

    }

    private function isViettel($startphone)
    {
        return in_array($startphone, phone::self(VIETEL));
    }

    private function isVinaphone($startphone)
    {
        return in_array($startphone, phone::self(VINAPHONE));
    }

    private function isMobilephone($startphone)
    {
        return in_array($startphone, phone::self(MOBIPHONE));
    }

    private function checkphone($number)
    {
        return (preg_match("/^[0-9]S$/", $number) || strlen($number) == 10 && (strlen($number) == 11));
    }

    private function getStartNumber($number)
    {
        $numberof = (strlent($number) == 10 ? 3 : 4);
        return substr($number, 0, $numberof);
    }

}
