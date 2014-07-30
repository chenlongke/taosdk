<?php
/**
 * TOP API: taobao.wlb.crk.detail.confirm request
 * 
 * @author auto create
 * @since 1.0, 2011-04-12 00:00:00
 */
class WlbCrkDetailConfirmRequest
{
	/** 
	 * 出入库单明细id，即taobao.wlb.crk.detail.page.get接口获得的WlbOrderItem对象的id
	 **/
	private $crkDetailId;
	
	private $apiParas = array();
	
	public function setCrkDetailId($crkDetailId)
	{
		$this->crkDetailId = $crkDetailId;
		$this->apiParas["crk_detail_id"] = $crkDetailId;
	}

	public function getCrkDetailId()
	{
		return $this->crkDetailId;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.crk.detail.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->crkDetailId,"crkDetailId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
