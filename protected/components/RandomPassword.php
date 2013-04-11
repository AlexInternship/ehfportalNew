    <?php

class RandomPassword {
    
     public static function Instance() {
        static $inst = null;
        if ($inst === null) {
            $inst = new RandomPassword();
        }
        return $inst;
    }
    
    public function generatePassword() {
        $size = 8;
        $string = '';
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        for ($i = 0; $i < $size; $i++)
            $string .= $characters[mt_rand(0, (strlen($characters) - 1))];
        return $string;
    }
}
?>
