<?php
/**
 * TOP API: taobao.vas.freesub.close request
 * 
 * @author auto create
 * @since 1.0, 2012-12-07 00:00:00
 */
class VasFreesubCloseRequest
{
	/** 
	 * 淘宝账号绑定的支付宝账号id
	 **/
	private $accountNo;
	
	/** 
	 * 商品对应的应用appKey
	 **/
	private $applicationKey;
	
	/** 
	 * 商品规格code
	 **/
	private $itemCode;
	
	/** 
	 * 关闭卖家订购服务的原因
	 **/
	private $memo;
	
	/** 
	 * 淘宝账号id
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setAccountNo($accountNo)
	{
		$this->accountNo = $accountNo;
		$this->apiParas["account_no"] = $accountNo;
	}

	public function getAccountNo()
	{
		return $this->accountNo;
	}

	public function setApplicationKey($applicationKey)
	{
		$this->applicationKey = $applicationKey;
		$this->apiParas["application_key"] = $applicationKey;
	}

	public function getApplicationKey()
	{
		return $this->applicationKey;
	}

	public function setItemCode($itemCode)
	{
		$this->itemCode = $itemCode;
		$this->apiParas["item_code"] = $itemCode;
	}

	public function getItemCode()
	{
		return $this->itemCode;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
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
		return "taobao.vas.freesub.close";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->accountNo,20,"accountNo");
		RequestCheckUtil::checkNotNull($this->applicationKey,"applicationKey");
		RequestCheckUtil::checkNotNull($this->itemCode,"itemCode");
		RequestCheckUtil::checkNotNull($this->memo,"memo");
		RequestCheckUtil::checkMaxLength($this->userId,32,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
