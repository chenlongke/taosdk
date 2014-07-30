<?php
/**
 * TOP API: taobao.logistics.order.query request
 * 
 * @author auto create
 * @since 1.0, 2014-03-06 00:00:00
 */
class LogisticsOrderQueryRequest
{
	/** 
	 * 运单号
	 **/
	private $mailNo;
	
	private $apiParas = array();
	
	public function setMailNo($mailNo)
	{
		$this->mailNo = $mailNo;
		$this->apiParas["mail_no"] = $mailNo;
	}

	public function getMailNo()
	{
		return $this->mailNo;
	}

	public function getApiMethodName()
	{
		return "taobao.logistics.order.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mailNo,"mailNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
