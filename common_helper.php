<?php

if (!function_exists('preout')) {
    function preout($v)
    {
        echo "<pre>";
        var_dump($v);
        echo "</pre>";
    }
}

if (!function_exists('preson')) {
    function preson($v)
    {
        echo "<pre>";
        echo json_encode($v,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        echo "</pre>";
    }
}

if (!function_exists('presonRet')) {
    function presonRet($v)
    {
        return json_encode($v,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
}

if (!function_exists('lq')) {
    function lq($ctx, $p=false) {
        $q = $ctx->db->last_query();
        if($p){
            preout($q);
        }else{
            echo $q;
        }
    }
}

if (!function_exists('glq')) {
    function glq($ctx) {
        return $ctx->db->last_query();
    }
}

if (!function_exists('logs')) {
    // logs(glq($this))
	// independent logger
    function logs($v="", $t="general") {
        // glq($this)
		// preson(defined("CI_Controller"));
		$cic = defined("CI_Controller");
		try{
			if(!$cic){
				throw new \Exception("x");
			}

			$ctx = &get_instance();
			$ctx->load->model('LoggerModel', "mlogger");

			return $ctx->mlogger->logs($t, $v);
			// try{
		}catch(\Exception $e){
			// preson("err");
			include_once(__DIR__."/../libraries/Logger.php");

			$v = json_encode($v, JSON_PRETTY_PRINT);
			$logger = (new Logger)->setFilename("general.log");
			$logger->info($v);
		}
	}
}

if (!function_exists('dblogs')) {
    // logs(glq($this))
    function dblogs($v="", $t="general") {
        // glq($this)
        $ctx = &get_instance();
        $ctx->load->model('LoggerModel', "mlogger");
        
        return $ctx->mlogger->setDriver("db")->logs($t, $v);
    }
}

if (!function_exists('noHtml')) {
    function noHtml($data = ""){
        return preg_replace('/<(\w+)\b(?:\s+[\w\-.:]+(?:\s*=\s*(?:"[^"]*"|"[^"]*"|[\w\-.:]+))?)*\s*\/?>\s*<\/\1\s*>/', "", $data);
    }
}

if (!function_exists('jsonResponse')) {
    function jsonResponse($respCode,$msg,$data, $fmt=true)
    {
        if($fmt){
            $r = [
                'status' => $respCode ,
                'message' => $msg ,
                'data' => $data
            ];
        }else{
            $r = $data;
        }

        $CI = &get_instance();
        $CI->output
            ->set_status_header($respCode)
            ->set_content_type('application/json', 'utf-8')
            ->set_output(json_encode($r));
    }
}

if (!function_exists('toFile')) {
    function toFile($content = "cnt", $file = "file")
    {
        $f = fopen($file, "w");
        fwrite($f,$content);
        fclose($f);
        return true;
    }
}

if (!function_exists('arrayGet')) {
    function arrayGet($array, $key, $default = NULL)
    {
        return isset($array[$key]) ? $array[$key] : $default;
    }
}

if (!function_exists('sbadmin')) {
    function sbadmin($file)
    {
        return base_url($file);
    }
}

if (!function_exists('encodeHTML')) {
    function encodeHTML($html)
    {
        $html = html_entity_decode($html);
        $html = str_replace('&lt;iframe', '<iframe', $html);
        $html = str_replace('&gt;&lt;/iframe>', '></iframe>', $html);
        $html = str_replace('&gt;&lt;/iframe&gt;', '></iframe>', $html);
        return $html;
    }
}