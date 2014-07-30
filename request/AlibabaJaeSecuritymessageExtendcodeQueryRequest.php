<?php
/**
 * TOP API: alibaba.jae.securitymessage.extendcode.query request
 * 
 * @author auto create
 * @since 1.0, 2014-01-04 00:00:00
 */
class AlibabaJaeSecuritymessageExtendcodeQueryRequest
{
	/** 
	 * 业务码
	 **/
	private $extendCode;
	
	/** 
	 * isp的id，非必选
	 **/
	private $ispId;
	
	/** 
	 * 页码
	 **/
	private $pageNum;
	
	/** 
	 * 页大小
	 **/
	private $pageSize;
	
	/** 
	 * 短信使用者nick，非必选
	 **/
	private $templateUserNick;
	
	private $apiParas = array();
	
	public function setExtendCode($extendCode)
	{
		$this->extendCode = $extendCode;
		$this->apiParas["extend_code"] = $extendCode;
	}

	public function getExtendCode()
	{
		return $this->extendCode;
	}

	public function setIspId($ispId)
	{
		$this->ispId = $ispId;
		$this->apiParas["isp_id"] = $ispId;
	}

	public function getIspId()
	{
		return $this->ispId;
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

	public function setTemplateUserNick($templateUserNick)
	{
		$this->templateUserNick = $templateUserNick;
		$this->apiParas["template_user_nick"] = $templateUserNick;
	}

	public function getTemplateUserNick()
	{
		return $this->templateUserNick;
	}

	public function getApiMethodName()
	{
		return "alibaba.jae.securitymessage.extendcode.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageNum,"pageNum");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
