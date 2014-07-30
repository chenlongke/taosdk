<?php
/**
 * TOP API: taobao.juwliserver.alipay.num.get request
 * 
 * @author auto create
 * @since 1.0, 2012-12-25 00:00:00
 */
class JuwliserverAlipayNumGetRequest
{
	/** 
	 * 淘宝订单id
	 **/
	private $taobaoNum;
	
	private $apiParas = array();
	
	public function setTaobaoNum($taobaoNum)
	{
		$this->taobaoNum = $taobaoNum;
		$this->apiParas["taobao_num"] = $taobaoNum;
	}

	public function getTaobaoNum()
	{
		return $this->taobaoNum;
	}

	public function getApiMethodName()
	{
		return "taobao.juwliserver.alipay.num.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->taobaoNum,"taobaoNum");
		RequestCheckUtil::checkMaxListSize($this->taobaoNum,10,"taobaoNum");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
