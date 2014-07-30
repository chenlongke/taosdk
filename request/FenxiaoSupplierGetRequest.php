<?php
/**
 * TOP API: taobao.fenxiao.supplier.get request
 * 
 * @author auto create
 * @since 1.0, 2011-05-12 00:00:00
 */
class FenxiaoSupplierGetRequest
{
	/** 
	 * 在分销平台的供应商ID
	 **/
	private $id;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.supplier.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
