<?php

class PropertyAccessHooks1
{
    public string $phoneNumber {
        set {
            if (! ctype_digit($value)){
                throw new InvalidArgumentException('無効な電話番号です');
            }

            if (strlen($value) < 10){
                throw new InvalidArgumentException('電話番号は10桁以上で入力してください');
            }
            $this->phoneNumber = $value;
        }
        get => '電話番号は' . $this->phoneNumber . 'です';
    }
}

$hooks = new PropertyAccessHooks1();

$hooks->phoneNumber = '09012341234';
echo $hooks->phoneNumber; // 電話番号は09012341234です