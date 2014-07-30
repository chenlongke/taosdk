<?php
/**
 * TOP API: taobao.productstat.sms.search request
 * 
 * @author auto create
 * @since 1.0, 2011-09-01 00:00:00
 */
class ProductstatSmsSearchRequest
{
	/** 
	 * 查询内容
	 **/
	private $content;
	
	/** 
	 * 发送方电话号码
	 **/
	private $phone;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function getApiMethodName()
	{
		return "taobao.productstat.sms.search";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->phone,"phone");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
