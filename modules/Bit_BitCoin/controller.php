<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class Bit_BitCoinController extends SugarController
{
   public function action_Sync(){
       $data = $this->getSslPage('https://api.coindesk.com/v1/bpi/currentprice.json');
       $json = json_decode($data);
       foreach ($json->bpi as $row){

           $bitcoin = new Bit_BitCoin();
           $bitcoin->bitcoin_code = $row->code;
           $bitcoin->symbol = $row->symbol;
           $bitcoin->bitcoin_rate = $row->rate;
           $bitcoin->bitcoin_description = $row->description;
           $bitcoin->bitcoin_rate_float = $row->rate_float;
           $bitcoin->save();
           unset($bitcoin);
           //header('index.php?');
        }

       //dump($data,$json);
       exit;
   }
    private function getSslPage($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
