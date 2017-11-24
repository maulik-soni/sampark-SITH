<?php
	$type= 'default';//echo ('../../../javascript/jquery/colorbox/colorbox.css');exit;
        ob_start();
			
			//echo dirname(__DIR__).DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.$type.'.css';exit;
			
        if (file_exists(dirname(__DIR__).DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.$type.'.css')) {         
				
                if (!empty($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == filemtime(dirname(__DIR__).DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.$type.'.css')) {
				        header("HTTP/1.1 304 Not Modified");
                        exit;
                }
		
                @readfile(dirname(__DIR__).DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.$type.'.css');                
                $css = ob_get_clean();
        }
        else
        {
			//include_once(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'sellegance/stylesheet'.DIRECTORY_SEPARATOR.'min.css');
            include_once(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'sellegance/stylesheet'.DIRECTORY_SEPARATOR.'bootstrap.min.css'); 
			include_once(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'sellegance/stylesheet'.DIRECTORY_SEPARATOR.'jquery.fancybox-1.3.4.css');
			include_once(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'sellegance/stylesheet'.DIRECTORY_SEPARATOR.'stylesheet.css');
			include_once(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'sellegance/stylesheet'.DIRECTORY_SEPARATOR.'stylesheet-responsive.css');
			include_once('../../../javascript/jquery/colorbox/colorbox.min.css');
			include_once('../../../javascript/jquery/cutestream/css/jquery.cutestream.css');
	       
		   $css = minify(ob_get_clean());

            $fp = @fopen(dirname(__DIR__).DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.$type.'.css', 'w'); 
            @fwrite($fp, $css);
            @fclose($fp);        
        }
		
		$lastModified = filemtime(dirname(__DIR__).'/cache/'.$type.'.css');
		
        header('Content-type: text/css;charset=utf-8');
		header("Last-Modified: ".gmdate("D, d M Y H:i:s", $lastModified)." GMT");
		header('Expires: '.gmdate("D, d M Y H:i:s", time() + 3600*24*365).' GMT');
		header('Cache Control: max-age=604800, public, must-revalidate');
		
        echo $css;

function minify( $css ) {
	$css = preg_replace( '#\s+#', ' ', $css );
	$css = preg_replace( '#/\*.*?\*/#s', '', $css );
	$css = str_replace( '; ', ';', $css );
	$css = str_replace( ': ', ':', $css );
	$css = str_replace( ' {', '{', $css );
	$css = str_replace( '{ ', '{', $css );
	$css = str_replace( ', ', ',', $css );
	$css = str_replace( '} ', '}', $css );
	$css = str_replace( ';}', '}', $css );

	return trim( $css );
}