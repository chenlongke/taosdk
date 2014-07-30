<?php
/**
 * TOP API: taobao.trade.cart.virgin.count request
 * 
 * @author auto create
 * @since 1.0, 2012-12-06 00:00:00
 */
class TradeCartVirginCountRequest
{
	/** 
	 * 查询弃单数据的起始日期（格式为yyyy-MM-dd），购物车弃单数据的周期为当前时间的前[3天，33天]
	 **/
	private $beginDate;
	
	/** 
	 * 查询弃单数据的截止日期，购物车弃单数据的周期为当前时间的前[3天，33天]，如当前时间为2012-06-08，则查询弃单数据最大区间为[2012-05-07，2012-06-05]
	 **/
	private $endDate;
	
	private $apiParas = array();
	
	public function setBeginDate($beginDate)
	{
		$this->beginDate = $beginDate;
		$this->apiParas["begin_date"] = $beginDate;
	}

	public function getBeginDate()
	{
		return $this->beginDate;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.cart.virgin.count";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->beginDate,"beginDate");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
