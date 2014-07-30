<?php
/**
 * TOP API: taobao.fenxiao.supplier.punish request
 * 
 * @author auto create
 * @since 1.0, 2011-05-12 00:00:00
 */
class FenxiaoSupplierPunishRequest
{
	/** 
	 * 处罚类型 （枚举类型：NO_LIMIT[不限制]，LIMIT_PUBLIST_SUPPLIER[限制供应商铺货]、LIMIT_RECRUIT_SUPPLIER[限制供应商发布招募信息]、LIMIT_PUBLIST_AND_RECRUIT_SUPPLIER[限制供应商铺货，发布招募信息])
	 **/
	private $punishType;
	
	/** 
	 * 在分销平台上的供应商ID
	 **/
	private $supplierId;
	
	private $apiParas = array();
	
	public function setPunishType($punishType)
	{
		$this->punishType = $punishType;
		$this->apiParas["punish_type"] = $punishType;
	}

	public function getPunishType()
	{
		return $this->punishType;
	}

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
		return "taobao.fenxiao.supplier.punish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->punishType,"punishType");
		RequestCheckUtil::checkNotNull($this->supplierId,"supplierId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
