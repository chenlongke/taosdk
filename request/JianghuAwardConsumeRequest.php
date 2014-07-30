<?php
/**
 * TOP API: taobao.jianghu.award.consume request
 * 
 * @author auto create
 * @since 1.0, 2011-08-25 00:00:00
 */
class JianghuAwardConsumeRequest
{
	/** 
	 * 商品的折扣值：如7.89折参数应该是789
	 **/
	private $discount;
	
	/** 
	 * 商品的在架id
	 **/
	private $onlineId;
	
	private $apiParas = array();
	
	public function setDiscount($discount)
	{
		$this->discount = $discount;
		$this->apiParas["discount"] = $discount;
	}

	public function getDiscount()
	{
		return $this->discount;
	}

	public function setOnlineId($onlineId)
	{
		$this->onlineId = $onlineId;
		$this->apiParas["online_id"] = $onlineId;
	}

	public function getOnlineId()
	{
		return $this->onlineId;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.award.consume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->discount,"discount");
		RequestCheckUtil::checkNotNull($this->onlineId,"onlineId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
