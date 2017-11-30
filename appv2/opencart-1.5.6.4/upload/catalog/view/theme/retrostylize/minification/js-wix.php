<?php 
       $type= 'default';
    if (phpversion() >= '5') {
            include_once (dirname(__FILE__).DIRECTORY_SEPARATOR.'jsmin.php');
    }

    ob_start();
    
    if (file_exists(dirname(__DIR__).DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.'wix'.DIRECTORY_SEPARATOR.$type.'.js'))//&& default_mtime == filemtime(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'public/scripts'.DIRECTORY_SEPARATOR.$typejs.'.js')
    {
            if (!empty($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == filemtime(dirname(__DIR__).DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.'wix'.DIRECTORY_SEPARATOR.$type.'.js')) {
                    header("HTTP/1.1 304 Not Modified");
                    exit;
            }

            readfile(dirname(__DIR__).DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.'wix'.DIRECTORY_SEPARATOR.$type.'.js');
            
            if (phpversion() >= '5') {
                    $js = JSMin::minify(ob_get_clean());
            } else {
                    $js = ob_get_clean();
            }
    }
    else
    {
	
        include_once(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'sellegance/js'.DIRECTORY_SEPARATOR.'custom.js');
        include_once(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'sellegance/js'.DIRECTORY_SEPARATOR.'wix-custom-script.js');
		include_once('../../../javascript/jquery/cutestream/js/jquery.cutestream.1.2.js');
       // include_once(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'sellegance/js'.DIRECTORY_SEPARATOR.'jquery.impromptu.js');
        //include_once(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'sellegance/js'.DIRECTORY_SEPARATOR.'jquery.Jcrop.min.js');
        //include_once(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'sellegance/js'.DIRECTORY_SEPARATOR.'jquery.fileupload.js');
		//include_once(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'sellegance/js'.DIRECTORY_SEPARATOR.'facescroll.js');
		//include_once(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'sellegance/js'.DIRECTORY_SEPARATOR.'jquery.ui.touch-punch.min.js');        
        //include_once(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'sellegance/js'.DIRECTORY_SEPARATOR.'chosen.jquery.js');


       
        
		if (phpversion() >= '5') {
			$js = JSMin::minify(ob_get_clean());
			} else {
			$js = ob_get_clean();
		}
		
        
		$fp = @fopen(dirname(__DIR__).DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR.'wix'.DIRECTORY_SEPARATOR.$type.'.js', 'w');
		@fwrite($fp, $js);
		@fclose($fp);  
    }
	
		$lastModified = filemtime(dirname(__DIR__).'/cache/wix/'.$type.'.js');
	
	header('Content-type: text/javascript;charset=utf-8');
	header("Last-Modified: ".gmdate("D, d M Y H:i:s", $lastModified)." GMT");
	header('Expires: '.gmdate("D, d M Y H:i:s", time() + 3600*24*365).' GMT');
	header('Cache Control: max-age=216000, private, must-revalidate');
		
    echo $js; 
		