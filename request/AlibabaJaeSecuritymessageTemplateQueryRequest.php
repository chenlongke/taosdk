<?php
/**
 * TOP API: alibaba.jae.securitymessage.template.query request
 * 
 * @author auto create
 * @since 1.0, 2014-01-04 00:00:00
 */
class AlibabaJaeSecuritymessageTemplateQueryRequest
{
	/** 
	 * 页码
	 **/
	private $pageNum;
	
	/** 
	 * 页大小
	 **/
	private $pageSize;
	
	/** 
	 * 模板使用者nick，非必须
	 **/
	private $templateUserNick;
	
	private $apiParas = array();
	
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
		return "alibaba.jae.securitymessage.template.query";
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
