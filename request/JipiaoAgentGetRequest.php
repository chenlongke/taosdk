<?php
/**
 * TOP API: taobao.jipiao.agent.get request
 * 
 * @author auto create
 * @since 1.0, 2012-04-27 00:00:00
 */
class JipiaoAgentGetRequest
{
	/** 
	 * 逗号分隔代理商id列表
	 **/
	private $sellerIds;
	
	private $apiParas = array();
	
	public function setSellerIds($sellerIds)
	{
		$this->sellerIds = $sellerIds;
		$this->apiParas["seller_ids"] = $sellerIds;
	}

	public function getSellerIds()
	{
		return $this->sellerIds;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.agent.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sellerIds,"sellerIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
