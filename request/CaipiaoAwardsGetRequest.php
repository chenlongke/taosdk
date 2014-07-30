<?php
/**
 * TOP API: taobao.caipiao.awards.get request
 * 
 * @author auto create
 * @since 1.0, 2013-10-21 00:00:00
 */
class CaipiaoAwardsGetRequest
{
	/** 
	 * 彩种的标识，中间用":"分割
	 **/
	private $lotteryTypeIds;
	
	private $apiParas = array();
	
	public function setLotteryTypeIds($lotteryTypeIds)
	{
		$this->lotteryTypeIds = $lotteryTypeIds;
		$this->apiParas["lottery_type_ids"] = $lotteryTypeIds;
	}

	public function getLotteryTypeIds()
	{
		return $this->lotteryTypeIds;
	}

	public function getApiMethodName()
	{
		return "taobao.caipiao.awards.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->lotteryTypeIds,"lotteryTypeIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
