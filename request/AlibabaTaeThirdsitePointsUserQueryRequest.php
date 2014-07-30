<?php
/**
 * TOP API: alibaba.tae.thirdsite.points.user.query request
 * 
 * @author auto create
 * @since 1.0, 2014-03-07 00:00:00
 */
class AlibabaTaeThirdsitePointsUserQueryRequest
{
	/** 
	 * 批次Id
	 **/
	private $batchId;
	
	/** 
	 * 页码
	 **/
	private $pageNum;
	
	/** 
	 * 页码
	 **/
	private $pageSize;
	
	/** 
	 * 用户混淆nick
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setBatchId($batchId)
	{
		$this->batchId = $batchId;
		$this->apiParas["batch_id"] = $batchId;
	}

	public function getBatchId()
	{
		return $this->batchId;
	}

	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
		$this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum()
	{
		return $this->pageNum;
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

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "alibaba.tae.thirdsite.points.user.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNum,"pageNum");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMaxLength($this->userNick,256,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
