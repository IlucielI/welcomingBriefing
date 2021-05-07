<?php

class FrontEnd_Model extends CI_Model
{
	public function getLinkConf()
	{
		$this->db->select('link');
		return $this->db->get('link-conference')->row_array();
	}
	public function getPortfolio($portfolio_page)
	{
		$this->db->select('portfolio_file');
		return $this->db->get_where('portfolio', ['portfolio_page' => $portfolio_page])->row_array();
	}
}
