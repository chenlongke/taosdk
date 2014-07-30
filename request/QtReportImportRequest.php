<?php
/**
 * TOP API: taobao.qt.report.import request
 * 
 * @author auto create
 * @since 1.0, 2012-11-23 00:00:00
 */
class QtReportImportRequest
{
	/** 
	 * 0:未通过1:通过 空代表未判定
	 **/
	private $isPassed;
	
	/** 
	 * 样品宝贝描述
	 **/
	private $itemDesc;
	
	/** 
	 * 宝贝样品id
	 **/
	private $itemId;
	
	/** 
	 * 宝贝样品url
	 **/
	private $itemUrl;
	
	/** 
	 * 一个质检服务唯一标识质量检验单的编号
	 **/
	private $qtCode;
	
	/** 
	 * 质检报告源文件url
	 **/
	private $reportUrl;
	
	/** 
	 * 质检服务商名称
	 **/
	private $spName;
	
	/** 
	 * 送检者昵称
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setIsPassed($isPassed)
	{
		$this->isPassed = $isPassed;
		$this->apiParas["is_passed"] = $isPassed;
	}

	public function getIsPassed()
	{
		return $this->isPassed;
	}

	public function setItemDesc($itemDesc)
	{
		$this->itemDesc = $itemDesc;
		$this->apiParas["item_desc"] = $itemDesc;
	}

	public function getItemDesc()
	{
		return $this->itemDesc;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setItemUrl($itemUrl)
	{
		$this->itemUrl = $itemUrl;
		$this->apiParas["item_url"] = $itemUrl;
	}

	public function getItemUrl()
	{
		return $this->itemUrl;
	}

	public function setQtCode($qtCode)
	{
		$this->qtCode = $qtCode;
		$this->apiParas["qt_code"] = $qtCode;
	}

	public function getQtCode()
	{
		return $this->qtCode;
	}

	public function setReportUrl($reportUrl)
	{
		$this->reportUrl = $reportUrl;
		$this->apiParas["report_url"] = $reportUrl;
	}

	public function getReportUrl()
	{
		return $this->reportUrl;
	}

	public function setSpName($spName)
	{
		$this->spName = $spName;
		$this->apiParas["sp_name"] = $spName;
	}

	public function getSpName()
	{
		return $this->spName;
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
		return "taobao.qt.report.import";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isPassed,"isPassed");
		RequestCheckUtil::checkNotNull($this->itemDesc,"itemDesc");
		RequestCheckUtil::checkMaxLength($this->itemDesc,150,"itemDesc");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->itemUrl,"itemUrl");
		RequestCheckUtil::checkMaxListSize($this->itemUrl,256,"itemUrl");
		RequestCheckUtil::checkMaxLength($this->itemUrl,256,"itemUrl");
		RequestCheckUtil::checkNotNull($this->qtCode,"qtCode");
		RequestCheckUtil::checkMaxLength($this->qtCode,64,"qtCode");
		RequestCheckUtil::checkNotNull($this->reportUrl,"reportUrl");
		RequestCheckUtil::checkMaxLength($this->reportUrl,256,"reportUrl");
		RequestCheckUtil::checkNotNull($this->spName,"spName");
		RequestCheckUtil::checkMaxLength($this->spName,50,"spName");
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
		RequestCheckUtil::checkMaxLength($this->userNick,32,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
