<?php 
function public_url($string='')
{
	return base_url('public/'.$string);
}
function admin_url($string='')
{
	return base_url('admin/'.$string);
}