<?php
/**
 * TOP API: taobao.rwt.plugin.count request
 * 
 * @author auto create
 * @since 1.0, 2011-09-09 00:00:00
 */
class RwtPluginCountRequest
{
	/** 
	 * 任我淘插件的appkey
	 **/
	private $appkey;
	
	/** 
	 * 查询关键字
	 **/
	private $keyword;
	
	/** 
	 * 插件是否免费: 0 代表不收费 ; 1代表收费
	 **/
	private $policy;
	
	private $apiParas = array();
	
	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		$this->apiParas["keyword"] = $keyword;
	}

	public function getKeyword()
	{
		return $this->keyword;
	}

	public function setPolicy($policy)
	{
		$this->policy = $policy;
		$this->apiParas["policy"] = $policy;
	}

	public function getPolicy()
	{
		return $this->policy;
	}

	public function getApiMethodName()
	{
		return "taobao.rwt.plugin.count";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->policy,1,"policy");
		RequestCheckUtil::checkMinValue($this->policy,0,"policy");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
