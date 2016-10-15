<?php 
/**
 * @Author: adhibarfan
 * @Date:   2016-10-15 14:40:25
 * @Last Modified by:   adhibarfan
 * @Last Modified time: 2016-10-15 14:47:30
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->view('admin/IndexView.php');
	}
}