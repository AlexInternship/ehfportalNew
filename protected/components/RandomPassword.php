    <?php

class RandomPassword {
    
        static $inst = null;
     public static function Instance() {
        if ($this->inst === null) {
            $this->inst = new CallDB();
        }
        return $this->inst;
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
