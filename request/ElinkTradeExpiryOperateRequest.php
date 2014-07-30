<?php
/**
 * TOP API: taobao.elink.trade.expiry.operate request
 * 
 * @author auto create
 * @since 1.0, 2011-07-18 00:00:00
 */
class ElinkTradeExpiryOperateRequest
{
	/** 
	 * // 共享模式
	Integer SHARE_INVENTORY = 1;
	// 锁库模式
	Integer LOCK_INVENTORY = 2;
	// 经销模式
	Integer DISTRIBUTION = 3;
	 **/
	private $cooperationModel;
	
	/** 
	 * 外部编码
	 **/
	private $extNo;
	
	/** 
	 * 数量
	 **/
	private $quantity;
	
	/** 
	 * 零售商编码
	 **/
	private $retailerCode;
	
	/** 
	 * 零售商昵称
	 **/
	private $retailerNick;
	
	/** 
	 * 供货商编码
	 **/
	private $supplierCode;
	
	/** 
	 * 供货商昵称
	 **/
	private $supplierNick;
	
	/** 
	 * 仓库ID
	 **/
	private $warehouseId;
	
	private $apiParas = array();
	
	public function setCooperationModel($cooperationModel)
	{
		$this->cooperationModel = $cooperationModel;
		$this->apiParas["cooperation_model"] = $cooperationModel;
	}

	public function getCooperationModel()
	{
		return $this->cooperationModel;
	}

	public function setExtNo($extNo)
	{
		$this->extNo = $extNo;
		$this->apiParas["ext_no"] = $extNo;
	}

	public function getExtNo()
	{
		return $this->extNo;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function setRetailerCode($retailerCode)
	{
		$this->retailerCode = $retailerCode;
		$this->apiParas["retailer_code"] = $retailerCode;
	}

	public function getRetailerCode()
	{
		return $this->retailerCode;
	}

	public function setRetailerNick($retailerNick)
	{
		$this->retailerNick = $retailerNick;
		$this->apiParas["retailer_nick"] = $retailerNick;
	}

	public function getRetailerNick()
	{
		return $this->retailerNick;
	}

	public function setSupplierCode($supplierCode)
	{
		$this->supplierCode = $supplierCode;
		$this->apiParas["supplier_code"] = $supplierCode;
	}

	public function getSupplierCode()
	{
		return $this->supplierCode;
	}

	public function setSupplierNick($supplierNick)
	{
		$this->supplierNick = $supplierNick;
		$this->apiParas["supplier_nick"] = $supplierNick;
	}

	public function getSupplierNick()
	{
		return $this->supplierNick;
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
		return "taobao.elink.trade.expiry.operate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cooperationModel,"cooperationModel");
		RequestCheckUtil::checkNotNull($this->extNo,"extNo");
		RequestCheckUtil::checkNotNull($this->quantity,"quantity");
		RequestCheckUtil::checkNotNull($this->retailerCode,"retailerCode");
		RequestCheckUtil::checkNotNull($this->retailerNick,"retailerNick");
		RequestCheckUtil::checkNotNull($this->supplierCode,"supplierCode");
		RequestCheckUtil::checkNotNull($this->supplierNick,"supplierNick");
		RequestCheckUtil::checkNotNull($this->warehouseId,"warehouseId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
