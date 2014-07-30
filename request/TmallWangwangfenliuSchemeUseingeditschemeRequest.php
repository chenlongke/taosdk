<?php
/**
 * TOP API: tmall.wangwangfenliu.scheme.useingeditscheme request
 * 
 * @author auto create
 * @since 1.0, 2013-04-22 00:00:00
 */
class TmallWangwangfenliuSchemeUseingeditschemeRequest
{
	/** 
	 * 分流模式的名称
	 **/
	private $scheme;
	
	private $apiParas = array();
	
	public function setScheme($scheme)
	{
		$this->scheme = $scheme;
		$this->apiParas["scheme"] = $scheme;
	}

	public function getScheme()
	{
		return $this->scheme;
	}

	public function getApiMethodName()
	{
		return "tmall.wangwangfenliu.scheme.useingeditscheme";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scheme,"scheme");
		RequestCheckUtil::checkMaxLength($this->scheme,64,"scheme");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
