<?php
/**
 * TOP API: alibaba.laiwang.pubplatform.qrcode.create request
 * 
 * @author auto create
 * @since 1.0, 2014-03-27 00:00:00
 */
class AlibabaLaiwangPubplatformQrcodeCreateRequest
{
	/** 
	 * 开发者发送二维码参数，请求生成二维码
	 **/
	private $postData;
	
	private $apiParas = array();
	
	public function setPostData($postData)
	{
		$this->postData = $postData;
		$this->apiParas["post_data"] = $postData;
	}

	public function getPostData()
	{
		return $this->postData;
	}

	public function getApiMethodName()
	{
		return "alibaba.laiwang.pubplatform.qrcode.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->postData,"postData");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
