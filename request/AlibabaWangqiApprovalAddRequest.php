<?php
/**
 * TOP API: alibaba.wangqi.approval.add request
 * 
 * @author auto create
 * @since 1.0, 2014-04-08 00:00:00
 */
class AlibabaWangqiApprovalAddRequest
{
	/** 
	 * 接收者（审批人）列表
	 **/
	private $receivers;
	
	/** 
	 * 消息摘要
	 **/
	private $summary;
	
	/** 
	 * 消息模板数据（json格式）
	 **/
	private $template;
	
	private $apiParas = array();
	
	public function setReceivers($receivers)
	{
		$this->receivers = $receivers;
		$this->apiParas["receivers"] = $receivers;
	}

	public function getReceivers()
	{
		return $this->receivers;
	}

	public function setSummary($summary)
	{
		$this->summary = $summary;
		$this->apiParas["summary"] = $summary;
	}

	public function getSummary()
	{
		return $this->summary;
	}

	public function setTemplate($template)
	{
		$this->template = $template;
		$this->apiParas["template"] = $template;
	}

	public function getTemplate()
	{
		return $this->template;
	}

	public function getApiMethodName()
	{
		return "alibaba.wangqi.approval.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->receivers,"receivers");
		RequestCheckUtil::checkNotNull($this->summary,"summary");
		RequestCheckUtil::checkNotNull($this->template,"template");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
