<?php
/**
 * TOP API: taobao.qt.report.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-11-23 00:00:00
 */
class QtReportDeleteRequest
{
	/** 
	 * 一个质检服务唯一标识质量检验单的编号
	 **/
	private $qtCode;
	
	private $apiParas = array();
	
	public function setQtCode($qtCode)
	{
		$this->qtCode = $qtCode;
		$this->apiParas["qt_code"] = $qtCode;
	}

	public function getQtCode()
	{
		return $this->qtCode;
	}

	public function getApiMethodName()
	{
		return "taobao.qt.report.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->qtCode,"qtCode");
		RequestCheckUtil::checkMaxLength($this->qtCode,64,"qtCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
