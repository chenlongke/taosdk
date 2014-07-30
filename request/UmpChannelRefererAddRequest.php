<?php
/**
 * TOP API: taobao.ump.channel.referer.add request
 * 
 * @author auto create
 * @since 1.0, 2012-08-29 00:00:00
 */
class UmpChannelRefererAddRequest
{
	/** 
	 * 渠道KEY
	 **/
	private $channelKey;
	
	/** 
	 * 每一个referer的匹配类型，以半角逗号分隔，个数与referer个数相同。
取值：0：精确匹配，1：前缀匹配。
	 **/
	private $matchTypes;
	
	/** 
	 * 当前渠道的来源referer地址。多个referer之间使用半角逗号隔开。
	 **/
	private $referers;
	
	private $apiParas = array();
	
	public function setChannelKey($channelKey)
	{
		$this->channelKey = $channelKey;
		$this->apiParas["channel_key"] = $channelKey;
	}

	public function getChannelKey()
	{
		return $this->channelKey;
	}

	public function setMatchTypes($matchTypes)
	{
		$this->matchTypes = $matchTypes;
		$this->apiParas["match_types"] = $matchTypes;
	}

	public function getMatchTypes()
	{
		return $this->matchTypes;
	}

	public function setReferers($referers)
	{
		$this->referers = $referers;
		$this->apiParas["referers"] = $referers;
	}

	public function getReferers()
	{
		return $this->referers;
	}

	public function getApiMethodName()
	{
		return "taobao.ump.channel.referer.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channelKey,"channelKey");
		RequestCheckUtil::checkNotNull($this->referers,"referers");
		RequestCheckUtil::checkMaxLength($this->referers,1000,"referers");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
