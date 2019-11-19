<?

class Tools{

    public $chaine;
    
    public function bindParam($varchar,$param){

        $j=0;

        for ($i=0;i<$varchar->ob_get_length();$i++){
            if($varchar[i]=='?'){
                $chaine=$chaine+$param[j]
                $j++;
            }
            $chaine=$chaine+$varchar[i];
        }

        return $chaine;

    }
}

?>