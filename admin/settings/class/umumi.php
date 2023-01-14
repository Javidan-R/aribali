<?php

class Umumi
{

    public function Getir($table)
    {
        global $db;
        $data = $db->prepare("SELECT * from " . $table);
        $data->execute();
        $x = $data->fetch(PDO::FETCH_ASSOC);
        return $x;
    }

    public function CoxluGetir($table)
    {
        global $db;
        $data = $db->prepare("SELECT * from " . $table);
        $data->execute();
        $m = [];
        while ($x = $data->fetch(PDO::FETCH_ASSOC)) {
            array_push($m, $x);
        }
        return $m;
    }

    public function CoxluGetirFront($table)
    {
        global $db;
        $data = $db->prepare("SELECT * from " . $table . " where status=:st    ");
        $data->execute(['st'=>1]);
        $m = [];
        while ($x = $data->fetch(PDO::FETCH_ASSOC)) {
            array_push($m, $x);
        }
        return $m;
    }
    
    public function Popular($table,$hit)
    {
        global $db ;
        $data= $db->prepare("SELECT * from ". $table . " where status=:st and  order by ". $hit . " DESC  ");
        $data->execute(['st' => 1]);
        $m = [];
        while ($x = $data->fetch(PDO::FETCH_ASSOC)) {
            array_push($m, $x);
        }
        return $m;
    }


   public function Etrafli($id,$table)
    {
        global $db;
        $data = $db->prepare("SELECT * from ".$table." where id=:id");
        $data->execute([
            'id'=>$id
        ]);
        return $data->fetch(PDO::FETCH_ASSOC);
         
    }

    public function EtrafliFront($id,$table)
    {
        global $db;
        $data = $db->prepare("SELECT * from ".$table." where id=:id and status=:st");
        $data->execute([
            'id'=>$id,
            'st'=>1
        ]);
         return $data->fetch(PDO::FETCH_ASSOC);
         
    }
    public function Status($id, $table, $st)
    {
        global $db;
        $st = $st == "deaktiv" ? 0 : 1 ;
        $data = $db->prepare("UPDATE {$table} set status=:st where id=:id");
        $x = $data->execute([
            'st' => $st,
            'id' => $id
        ]);
        return $x ? 1 : 0;
    }

    public function Sil($id, $table, $file = null)
    {
        global $db;
        $data = $db->prepare("DELETE from {$table} where id=:id");
        $x = $data->execute([
            'id' => $id
        ]);

        if ($x) {
            $file !== null ? unlink($file) : "";
            return 1;
        } else {
            return 0;
        }

    }

public function SilMes($id, $table)
    {
        global $db;
        $data = $db->prepare("DELETE from {$table} where id=:id");
        $x = $data->execute([
            'id' => $id
        ]);

    }
    function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    function SqlInjection($post)
    {
        $arr = ["select","insert","update","delete","like","order","and","or","not","=",">","<","'","\"","xor","null","sum","count"];
        
        return str_replace($arr,"",mb_strtolower(strip_tags($post)));

    }










    protected function seo($str, $options = array())
    {
        $str = mb_convert_encoding((string) $str, 'UTF-8', mb_list_encodings());
        $defaults = array(
            'delimiter' => '-',
            'limit' => null,
            'lowercase' => true,
            'replacements' => array(),
            'transliterate' => true,
        );
        $options = array_merge($defaults, $options);
        $char_map = array(

            // Latin symbols
            '©' => '(c)', '+' => 'plus', '#' => 'sharp',

            // AZ
            'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G', 'Ə' => 'E',
            'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g', 'ə' => 'e',
        );
        $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
        if ($options['transliterate']) {
            $str = str_replace(array_keys($char_map), $char_map, $str);
        }
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
        $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
        $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
        $str = trim($str, $options['delimiter']);
        return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
    }

    public function Tarix($x)
    {
        $tarix = substr($x, 0, 10);
        $ay = explode("-", $tarix);
        $aylar = array("Yanvar", "Fevral", "Mart", "Aprel", "May", "İyun", "İyul", "Avqust", "Sentyabr", "Oktyabr", "Noyabr", "Dekabr");
        $y_ay = $ay[1];
        for ($i = 0; $i < 12; $i++) {
            if ($y_ay[0] == "0" && $y_ay[1] == ($i + 1)) {
                //$ytarix = $ay[0]." ".$aylar[$i]." ".$ay[2];
                $ytarix = $ay[2] . "-" . $aylar[$i] . "-" . $ay[0];
                return $ytarix;
            } else if ($y_ay[0] != "0" && $y_ay == ($i + 1)) {
                //$ytarix = $ay[0]." ".$aylar[$i]." ".$ay[2];
                $ytarix = $ay[2] . "-" . $aylar[$i] . "-" . $ay[0];
                return $ytarix;
            }
        }

    }

}

















