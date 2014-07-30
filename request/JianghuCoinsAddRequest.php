<?php
/**
 * TOP API: taobao.jianghu.coins.add request
 * 
 * @author auto create
 * @since 1.0, 2014-02-18 00:00:00
 */
class JianghuCoinsAddRequest
{
	/** 
	 * 添加淘金币数，有上限，最大默认200个（注：数据库达到最大值会变成负数）
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
		return "taobao.jianghu.coins.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->coinCount,"coinCount");
		RequestCheckUtil::checkMaxValue($this->coinCount,200,"coinCount");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
