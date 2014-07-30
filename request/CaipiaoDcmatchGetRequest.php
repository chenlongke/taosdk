<?php
/**
 * TOP API: taobao.caipiao.dcmatch.get request
 * 
 * @author auto create
 * @since 1.0, 2013-10-22 00:00:00
 */
class CaipiaoDcmatchGetRequest
{
	/** 
	 * 彩期名称
	 **/
	private $issue;
	
	/** 
	 * 彩种id
	 **/
	private $lotteryTypeId;
	
	/** 
	 * 玩法
	 **/
	private $playType;
	
	private $apiParas = array();
	
	public function setIssue($issue)
	{
		$this->issue = $issue;
		$this->apiParas["issue"] = $issue;
	}

	public function getIssue()
	{
		return $this->issue;
	}

	public function setLotteryTypeId($lotteryTypeId)
	{
		$this->lotteryTypeId = $lotteryTypeId;
		$this->apiParas["lottery_type_id"] = $lotteryTypeId;
	}

	public function getLotteryTypeId()
	{
		return $this->lotteryTypeId;
	}

	public function setPlayType($playType)
	{
		$this->playType = $playType;
		$this->apiParas["play_type"] = $playType;
	}

	public function getPlayType()
	{
		return $this->playType;
	}

	public function getApiMethodName()
	{
		return "taobao.caipiao.dcmatch.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->issue,"issue");
		RequestCheckUtil::checkNotNull($this->lotteryTypeId,"lotteryTypeId");
		RequestCheckUtil::checkNotNull($this->playType,"playType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
