<?php
/**
 * TOP API: taobao.athena.scenes.recognize request
 * 
 * @author auto create
 * @since 1.0, 2013-09-10 00:00:00
 */
class AthenaScenesRecognizeRequest
{
	/** 
	 * 需要场景识别的AthenaBizQuery转换成json的字符串数组，字段 String content;
	 int top;
Long messageId;
    Long sellerId;
    Long buyerId;
    String buyerNick;
    String sellerNick;
	 **/
	private $querylist;
	
	private $apiParas = array();
	
	public function setQuerylist($querylist)
	{
		$this->querylist = $querylist;
		$this->apiParas["querylist"] = $querylist;
	}

	public function getQuerylist()
	{
		return $this->querylist;
	}

	public function getApiMethodName()
	{
		return "taobao.athena.scenes.recognize";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->querylist,"querylist");
		RequestCheckUtil::checkMaxListSize($this->querylist,9999,"querylist");
		RequestCheckUtil::checkMaxLength($this->querylist,9999,"querylist");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
