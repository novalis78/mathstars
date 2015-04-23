<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function getBlock($id)
	{
		$this->load->model("Block_model", "block");
		$block = $this->block->get_by(array("block_id"=>$id));
		if($block &&  count($block) > 0)
		{
			echo $block->html;
		}
	}
}
