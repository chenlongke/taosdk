<?php
/**
 * TOP API: taobao.wlb.item.setting.update request
 * 
 * @author auto create
 * @since 1.0, 2011-03-29 00:00:00
 */
class WlbItemSettingUpdateRequest
{
	/** 
	 * 规则id
	 **/
	private $id;
	
	/** 
	 * 补货周期
	 **/
	private $supplementCycle;
	
	/** 
	 * 库存警戒值
	 **/
	private $warnQuantity;
	
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

	public function setSupplementCycle($supplementCycle)
	{
		$this->supplementCycle = $supplementCycle;
		$this->apiParas["supplement_cycle"] = $supplementCycle;
	}

	public function getSupplementCycle()
	{
		return $this->supplementCycle;
	}

	public function setWarnQuantity($warnQuantity)
	{
		$this->warnQuantity = $warnQuantity;
		$this->apiParas["warn_quantity"] = $warnQuantity;
	}

	public function getWarnQuantity()
	{
		return $this->warnQuantity;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.item.setting.update";
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
