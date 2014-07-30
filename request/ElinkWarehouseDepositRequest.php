<?php
/**
 * TOP API: taobao.elink.warehouse.deposit request
 * 
 * @author auto create
 * @since 1.0, 2011-07-18 00:00:00
 */
class ElinkWarehouseDepositRequest
{
	/** 
	 * InventoryConstants.BizType.REAL_INVENTORY 实际库存，InventoryConstants.BizType.LOCK_INVENTORY 锁定库存，InventoryConstants.BizType.LOCKED_INVENTORY 被锁定库存，InventoryConstants.BizType.SHARE_INVENTORY 共享库存
	 **/
	private $bizType;
	
	/** 
	 * 外部交易号，如物流公司单号
	 **/
	private $extNo;
	
	/** 
	 * 操作来源
	 **/
	private $operateSource;
	
	/** 
	 * 数量
	 **/
	private $quantity;
	
	/** 
	 * 商家对指定仓库的某个商品进行入库的操作
	 **/
	private $reason;
	
	/** 
	 * 最小库存单位
	 **/
	private $skuId;
	
	/** 
	 * 仓库ID
	 **/
	private $warehouseId;
	
	private $apiParas = array();
	
	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
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

	public function setOperateSource($operateSource)
	{
		$this->operateSource = $operateSource;
		$this->apiParas["operate_source"] = $operateSource;
	}

	public function getOperateSource()
	{
		return $this->operateSource;
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

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
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
		return "taobao.elink.warehouse.deposit";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->extNo,"extNo");
		RequestCheckUtil::checkNotNull($this->operateSource,"operateSource");
		RequestCheckUtil::checkNotNull($this->quantity,"quantity");
		RequestCheckUtil::checkNotNull($this->reason,"reason");
		RequestCheckUtil::checkNotNull($this->skuId,"skuId");
		RequestCheckUtil::checkNotNull($this->warehouseId,"warehouseId");
		RequestCheckUtil::checkMinValue($this->warehouseId,1,"warehouseId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
