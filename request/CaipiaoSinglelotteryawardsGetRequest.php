<?php
/**
 * TOP API: taobao.caipiao.singlelotteryawards.get request
 * 
 * @author auto create
 * @since 1.0, 2013-10-21 00:00:00
 */
class CaipiaoSinglelotteryawardsGetRequest
{
	/** 
	 * 彩种编号
	 **/
	private $lotteryTypeId;
	
	/** 
	 * 页数
	 **/
	private $pageNumber;
	
	/** 
	 * 每页条数
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setLotteryTypeId($lotteryTypeId)
	{
		$this->lotteryTypeId = $lotteryTypeId;
		$this->apiParas["lottery_type_id"] = $lotteryTypeId;
	}

	public function getLotteryTypeId()
	{
		return $this->lotteryTypeId;
	}

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["page_number"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "taobao.caipiao.singlelotteryawards.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->lotteryTypeId,"lotteryTypeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
