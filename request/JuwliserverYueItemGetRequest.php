<?php
/**
 * TOP API: taobao.juwliserver.yue.item.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-25 00:00:00
 */
class JuwliserverYueItemGetRequest
{
	/** 
	 * 二维码字符串
	 **/
	private $qrcode;
	
	private $apiParas = array();
	
	public function setQrcode($qrcode)
	{
		$this->qrcode = $qrcode;
		$this->apiParas["qrcode"] = $qrcode;
	}

	public function getQrcode()
	{
		return $this->qrcode;
	}

	public function getApiMethodName()
	{
		return "taobao.juwliserver.yue.item.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->qrcode,"qrcode");
		RequestCheckUtil::checkMaxLength($this->qrcode,256,"qrcode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
