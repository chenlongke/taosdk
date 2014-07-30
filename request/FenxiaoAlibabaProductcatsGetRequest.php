<?php
/**
 * TOP API: taobao.fenxiao.alibaba.productcats.get request
 * 
 * @author auto create
 * @since 1.0, 2010-12-07 00:00:00
 */
class FenxiaoAlibabaProductcatsGetRequest
{
	/** 
	 * 在分销平台上的供应商ID
	 **/
	private $supplierId;
	
	private $apiParas = array();
	
	public function setSupplierId($supplierId)
	{
		$this->supplierId = $supplierId;
		$this->apiParas["supplier_id"] = $supplierId;
	}

	public function getSupplierId()
	{
		return $this->supplierId;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.alibaba.productcats.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->supplierId,"supplierId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
