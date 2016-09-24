<?php
namespace Source;

/**
* 
*/
class ServiceProduct implements IServiceProduct
{
	private $db;
	private $product;

	function __construct(Iconn $db, IProduct $product)
	{
		$this->db = $db->connect();
		$this->product = $product;
	}

	public function list()
	{
		$query = "Select * from products";

		$stmt = $this->db->prepare($query);
		$stmt->execute();

		return $list = $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
	public function save()
	{

	}
	
	public function update()
	{
		
	}

	public function delete()
	{
		
	}
	
}