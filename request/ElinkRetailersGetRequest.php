<?php
/**
 * TOP API: taobao.elink.retailers.get request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class ElinkRetailersGetRequest
{
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数; 默认20，最大50,超过50默认20
	 **/
	private $pageSize;
	
	/** 
	 * 零售商淘宝帐号
	 **/
	private $retailersNick;
	
	/** 
	 * 合作模式。*DISTRIBUTE(经销)*VENDOR(代销)
	 **/
	private $tpType;
	
	private $apiParas = array();
	
	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
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

	public function setRetailersNick($retailersNick)
	{
		$this->retailersNick = $retailersNick;
		$this->apiParas["retailers_nick"] = $retailersNick;
	}

	public function getRetailersNick()
	{
		return $this->retailersNick;
	}

	public function setTpType($tpType)
	{
		$this->tpType = $tpType;
		$this->apiParas["tp_type"] = $tpType;
	}

	public function getTpType()
	{
		return $this->tpType;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.retailers.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
