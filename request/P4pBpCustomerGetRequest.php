<?php
/**
 * TOP API: taobao.p4p.bp.customer.get request
 * 
 * @author auto create
 * @since 1.0, 2010-11-23 00:00:00
 */
class P4pBpCustomerGetRequest
{
	/** 
	 * 淘宝会员的p4p客户id
	 **/
	private $custId;
	
	/** 
	 * 淘宝会员的数字id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setCustId($custId)
	{
		$this->custId = $custId;
		$this->apiParas["cust_id"] = $custId;
	}

	public function getCustId()
	{
		return $this->custId;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.p4p.bp.customer.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
