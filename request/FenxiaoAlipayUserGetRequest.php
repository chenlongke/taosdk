<?php
/**
 * TOP API: taobao.fenxiao.alipay.user.get request
 * 
 * @author auto create
 * @since 1.0, 2011-05-12 00:00:00
 */
class FenxiaoAlipayUserGetRequest
{
	/** 
	 * 支付宝帐号(16位ID)
	 **/
	private $uid;
	
	private $apiParas = array();
	
	public function setUid($uid)
	{
		$this->uid = $uid;
		$this->apiParas["uid"] = $uid;
	}

	public function getUid()
	{
		return $this->uid;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.alipay.user.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->uid,"uid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
