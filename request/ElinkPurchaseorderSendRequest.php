<?php
/**
 * TOP API: taobao.elink.purchaseorder.send request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class ElinkPurchaseorderSendRequest
{
	/** 
	 * 采购单编号
	 **/
	private $purchaseOid;
	
	/** 
	 * 入库单;如果有多个用逗号隔开,格式为：4324324324,3423423423
	 **/
	private $typeStockIn;
	
	/** 
	 * 出库单;如果有多个用逗号隔开,格式为：4324324324,3423423423
	 **/
	private $typeStockOut;
	
	private $apiParas = array();
	
	public function setPurchaseOid($purchaseOid)
	{
		$this->purchaseOid = $purchaseOid;
		$this->apiParas["purchase_oid"] = $purchaseOid;
	}

	public function getPurchaseOid()
	{
		return $this->purchaseOid;
	}

	public function setTypeStockIn($typeStockIn)
	{
		$this->typeStockIn = $typeStockIn;
		$this->apiParas["type_stock_in"] = $typeStockIn;
	}

	public function getTypeStockIn()
	{
		return $this->typeStockIn;
	}

	public function setTypeStockOut($typeStockOut)
	{
		$this->typeStockOut = $typeStockOut;
		$this->apiParas["type_stock_out"] = $typeStockOut;
	}

	public function getTypeStockOut()
	{
		return $this->typeStockOut;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.purchaseorder.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->purchaseOid,"purchaseOid");
		RequestCheckUtil::checkNotNull($this->typeStockIn,"typeStockIn");
		RequestCheckUtil::checkNotNull($this->typeStockOut,"typeStockOut");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
