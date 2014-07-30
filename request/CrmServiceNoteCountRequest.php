<?php
/**
 * TOP API: taobao.crm.service.note.count request
 * 
 * @author auto create
 * @since 1.0, 2013-11-05 00:00:00
 */
class CrmServiceNoteCountRequest
{
	/** 
	 * 买家的昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 提供服务的结束时间
	 **/
	private $serviceNoteEndDate;
	
	/** 
	 * 提供服务的起始时间
	 **/
	private $serviceNoteStartDate;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setServiceNoteEndDate($serviceNoteEndDate)
	{
		$this->serviceNoteEndDate = $serviceNoteEndDate;
		$this->apiParas["service_note_end_date"] = $serviceNoteEndDate;
	}

	public function getServiceNoteEndDate()
	{
		return $this->serviceNoteEndDate;
	}

	public function setServiceNoteStartDate($serviceNoteStartDate)
	{
		$this->serviceNoteStartDate = $serviceNoteStartDate;
		$this->apiParas["service_note_start_date"] = $serviceNoteStartDate;
	}

	public function getServiceNoteStartDate()
	{
		return $this->serviceNoteStartDate;
	}

	public function getApiMethodName()
	{
		return "taobao.crm.service.note.count";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkMaxLength($this->buyerNick,32,"buyerNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
