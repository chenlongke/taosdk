<?php
/**
 * TOP API: taobao.ju.freeloginurl.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-28 00:00:00
 */
class JuFreeloginurlGetRequest
{
	/** 
	 * 需要免登录的URL
	 **/
	private $srcUrl;
	
	private $apiParas = array();
	
	public function setSrcUrl($srcUrl)
	{
		$this->srcUrl = $srcUrl;
		$this->apiParas["src_url"] = $srcUrl;
	}

	public function getSrcUrl()
	{
		return $this->srcUrl;
	}

	public function getApiMethodName()
	{
		return "taobao.ju.freeloginurl.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->srcUrl,"srcUrl");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
