<?php

class C_Scrape extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_Scrape');
    }

    function index(){

        $contents = file_get_contents('https://www.t-mobile.com/srvspub/tradeInData.json');
        $array_contents = json_decode(utf8_encode($contents), true );
        foreach( $array_contents['productOfferings'] as $content ){

            $product = $content['products'][0];
            $manufacturer = $product['manufacturer'];
            $model = $product['model'];
            $carrier = $product['serviceProvider'];
            $price = $content['prices'][0]['oneTimeCharges'][0]['amount'];
            
            $this->M_Scrape->store(['manufacturer' => $manufacturer, 'model' => $model, 'carrier' => $carrier, 'price' => $price]);
        }

    }

}