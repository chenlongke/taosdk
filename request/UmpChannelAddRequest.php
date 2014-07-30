<?php
/**
 * TOP API: taobao.ump.channel.add request
 * 
 * @author auto create
 * @since 1.0, 2012-08-28 00:00:00
 */
class UmpChannelAddRequest
{
	/** 
	 * 渠道的描述信息
	 **/
	private $channelDisplayName;
	
	private $apiParas = array();
	
	public function setChannelDisplayName($channelDisplayName)
	{
		$this->channelDisplayName = $channelDisplayName;
		$this->apiParas["channel_display_name"] = $channelDisplayName;
	}

	public function getChannelDisplayName()
	{
		return $this->channelDisplayName;
	}

	public function getApiMethodName()
	{
		return "taobao.ump.channel.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channelDisplayName,"channelDisplayName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
