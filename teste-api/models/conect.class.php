<?php
//CLASS CONNECT API
class Api{

    public function post(){
        $url = "https://jsonplaceholder.typicode.com/posts";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $result = json_decode(curl_exec($ch));

        return $result;
    }

    public function view($id){
        $url = "https://jsonplaceholder.typicode.com/posts/".$id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $result = json_decode(curl_exec($ch));

        return $result;
    }

    public function comments($id){
        $url = "https://jsonplaceholder.typicode.com/posts/".$id."/comments";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $result = json_decode(curl_exec($ch));

        return $result;
    }

}

?>