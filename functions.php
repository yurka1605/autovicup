<?php
    function renderTemplate($__view, $__data) {
        extract($__data);

        ob_start();
        
        require $__view;

        $output = ob_get_clean();

        return $output;
    }

    function getPageData($url) {
        $pages = json_decode(file_get_contents("./json/pages.json"), true);

        foreach($pages as $key => $value) {
            $page_url = str_replace('|', "/", $value["URL"]);
            if ($url == $page_url) {
                return $value;
            }
        }

        return NULL;
    }

    function getCityName($ip) {
        // include_once __DIR__ . '/SxGeo/SxGeo.php';
        // $SxGeo = new SxGeo(__DIR__ . '/SxGeo/SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY); 			
        // $res = $SxGeo->getCityFull($_SERVER['REMOTE_ADDR']); 		
        // print_r($res['city']);

        $ip = $_SERVER['REMOTE_ADDR'];
        $res1 = json_decode(file_get_contents("http://api.sypexgeo.net/json/". $_SERVER['REMOTE_ADDR']), true);
        print_r($res1);
        return $res1;
    }
?>