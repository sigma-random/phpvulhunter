<?php /* Smarty version 3.1.23, created on 2015-05-24 15:19:11
         compiled from "views/template/navigation.html" */ ?>
<?php
/*%%SmartyHeaderCode:290235561cfcf394a52_75379736%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec4feeb21b21903d6f3d0b9b7aad22aa8062f668' => 
    array (
      0 => 'views/template/navigation.html',
      1 => 1432457982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290235561cfcf394a52_75379736',
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_5561cfcf6dc8a2_77369373',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5561cfcf6dc8a2_77369373')) {
function content_5561cfcf6dc8a2_77369373 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '290235561cfcf394a52_75379736';
?>
<div class="menu">
	<div class="logo">
		<!-- <img src="static/images/logo.pn" alt="PHPvulhunter" /> -->
	</div>
	<div class="in-menu">
		<form>
			<div class="fm-project">
				<label for="project-path">Project Path</label>
				<input type="text" name="prj_path" id="project-path" placeholder="Your project path."/>
                <!-- <a href="javascript:;" class="sub-btn" id="sub-regex">
                    <span class="line line-top"></span>
                    <span class="line line-right"></span>
                    <span class="line line-bottom"></span>
                    <span class="line line-left"></span>
                	Search
                </a> -->
			</div>
			<div class="fm-file">
				<label for="file-path">File Path</label>
				<input type="text" name="path" id="file-path" placeholder="Your PHP file path."/>
                <a href="javascript:;" class="sub-btn" id="sub-path">
                	<span class="line line-top"></span>
                    <span class="line line-right"></span>
                    <span class="line line-bottom"></span>
                    <span class="line line-left"></span>
                	Scan
                </a>
			</div>	
			<div class="fm-vuln">
				<div class="fm-vuln-select select-type">
					<label for="vuln-trup">Vuln Turp</label>
					<span></span>
					<select name="vuln" id="vuln-trup">
					<!--?php 
						$vectors = array(
							'all' 			=> 'All',
							'server' 		=> 'All server-side',							
							'code' 			=> '- Code Execution',
							'exec' 			=> '- Command Execution',
							'connect'		=> '- Header Injection',							
							'file_read' 	=> '- File Disclosure',
							'file_include' 	=> '- File Inclusion',							
							'file_affect' 	=> '- File Manipulation',
							'ldap' 			=> '- LDAP Injection',
							'database' 		=> '- SQL Injection',
							'xpath' 		=> '- XPath Injection',
							'other' 		=> '- other',
							'client' 		=> 'All client-side',
							'xss' 			=> '- Cross-Site Scripting',
							'httpheader'	=> '- HTTP Response Splitting',
							'unserialize' 	=> 'Unserialize / POP'
							//'crypto'		=> 'Crypto hints'
						);
						
						foreach($vectors as $vector=>$description)
						{
							echo "<option value=\"$vector\" ";
							if($vector == 'all') echo 'selected';
							echo ">$description</option>\n";
						}
					?-->
						<option value="all" selected>All</option>
						<option value="server" >All server-side</option>
						<option value="code" >- Code Execution</option>
						<option value="exec" >- Command Execution</option>
						<option value="connect" >- Header Injection</option>
						<option value="file_read" >- File Disclosure</option>
						<option value="file_include" >- File Inclusion</option>
						<option value="file_affect" >- File Manipulation</option>
						<option value="ldap" >- LDAP Injection</option>
						<option value="database" >- SQL Injection</option>
						<option value="xpath" >- XPath Injection</option>
						<option value="other" >- other</option>
						<option value="client" >All client-side</option>
						<option value="xss" >- Cross-Site Scripting</option>
						<option value="httpheader" >- HTTP Response Splitting</option>
						<option value="unserialize" >Unserialize / POP</option>
					</select>
					<a href="javascript:;" class="select-btn"><em>︿</em></a>
				</div>
				
				<div class="fm-vuln-select select-coding">
					<label for="vuln-trup">Encoding</label>
					<span></span>
					<select name="encoding" id="vuln-encoding">
					<!--?php 
						$vectors = array(
							'utf8' 			=> 'UTF-8',
							'gbk' 			=> 'GBK',							
							'code' 			=> '...'
						);
						
						foreach($vectors as $vector=>$description)
						{
							echo "<option value=\"$vector\" ";
							if($vector == 'utf8') echo 'selected';
							echo ">$description</option>\n";
						}
					?-->
						<option value="utf8" selected>UTF-8</option>
						<option value="gbk" >GBK</option>
						<!-- <option value="code" >...</option -->
					</select>
					<a href="javascript:;" class="select-btn"><em>︿</em></a>
				</div>
			</div>
		</form>
	</div>
</div><?php }
}
?>