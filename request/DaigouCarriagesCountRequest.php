<?php
/**
 * TOP API: taobao.daigou.carriages.count request
 * 
 * @author auto create
 * @since 1.0, 2012-03-20 00:00:00
 */
class DaigouCarriagesCountRequest
{
	/** 
	 * 购买点唯一标志位
	 **/
	private $flags;
	
	/** 
	 * 网点的传入的订单信息，格式如下：
{"mainNick":"wujunyi001","isdefault":false,"ctExteriorBuyers":[{"buyerMobilePhoneNumber":"18860155405","ctItems":[{"amount":1,"itemId":1604909268}],"buyerName":"张龙"}],"areaCode":"331126","consignee":"吴君轶","customAddress":"文二路391号","consigneeMobilePhone":"18860155405"}
	 **/
	private $paramsValues;
	
	private $apiParas = array();
	
	public function setFlags($flags)
	{
		$this->flags = $flags;
		$this->apiParas["flags"] = $flags;
	}

	public function getFlags()
	{
		return $this->flags;
	}

	public function setParamsValues($paramsValues)
	{
		$this->paramsValues = $paramsValues;
		$this->apiParas["params_values"] = $paramsValues;
	}

	public function getParamsValues()
	{
		return $this->paramsValues;
	}

	public function getApiMethodName()
	{
		return "taobao.daigou.carriages.count";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->paramsValues,"paramsValues");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
