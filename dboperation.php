<?php
class dboperation
{
	var $con,$dbcon,$res;
	function dbconnect()
	{
		$this->con=mysqli_connect("localhost","root","","college_connector");
		
		
	}
	function execute($qry)
	{
		$this->dbconnect();
		$this->res=mysqli_query($this->con,$qry);
		return $this->res;
	}
}
?>