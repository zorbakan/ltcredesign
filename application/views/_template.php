<?php
$this->load->view('html_header',$header_vars);
$this->load->view('includes_header');
$this->load->view('common/content_header',$content_vars);
if ($content_vars['content_load_from_db']){
	$this->load->view('common/content_body',$content_vars);
}else{
	$this->load->view($content_vars['section'].'/content_body',$content_vars);
}
$this->load->view('common/content_footer',$content_vars);

$this->load->view('html_footer');