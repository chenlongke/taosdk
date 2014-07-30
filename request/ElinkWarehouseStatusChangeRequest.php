<?php
/**
 * TOP API: taobao.elink.warehouse.status.change request
 * 
 * @author auto create
 * @since 1.0, 2011-07-18 00:00:00
 */
class ElinkWarehouseStatusChangeRequest
{
	/** 
	 * 仓库状态：启用或者停用
	 **/
	private $status;
	
	/** 
	 * 仓库ID
	 **/
	private $warehouseId;
	
	private $apiParas = array();
	
	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setWarehouseId($warehouseId)
	{
		$this->warehouseId = $warehouseId;
		$this->apiParas["warehouse_id"] = $warehouseId;
	}

	public function getWarehouseId()
	{
		return $this->warehouseId;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.warehouse.status.change";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->status,"status");
		RequestCheckUtil::checkNotNull($this->warehouseId,"warehouseId");
		RequestCheckUtil::checkMinValue($this->warehouseId,1,"warehouseId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
