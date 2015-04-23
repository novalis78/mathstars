<?php
  class Amazon_model extends MY_Model
  {

    public $_table = 'amazon_meta';

    public function __construct()
    {
        parent::__construct();
    }


   function get_isbn($isbn)
	 {
      $query = $this->db->query("select * from amazon_meta where isbn = ? limit 1; ", array($isbn));
      //echo $this->db->last_query();
      if ($query->num_rows() > 0)
      {
        $row = $query->row(1);
            if($row)
                return $row;
        }
        else
          return FALSE;
    }

  }