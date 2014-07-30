<?php
/**
 * TOP API: taobao.jianghu.coins.consume request
 * 
 * @author auto create
 * @since 1.0, 2014-02-18 00:00:00
 */
class JianghuCoinsConsumeRequest
{
	/** 
	 * 兑换淘金币数（有上限，最大默认9999999个）
	 **/
	private $coinCount;
	
	private $apiParas = array();
	
	public function setCoinCount($coinCount)
	{
		$this->coinCount = $coinCount;
		$this->apiParas["coin_count"] = $coinCount;
	}

	public function getCoinCount()
	{
		return $this->coinCount;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.coins.consume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->coinCount,"coinCount");
		RequestCheckUtil::checkMaxValue($this->coinCount,9999999,"coinCount");
		RequestCheckUtil::checkMinValue($this->coinCount,1,"coinCount");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
