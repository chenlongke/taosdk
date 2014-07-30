<?php
/**
 * TOP API: taobao.trade.cart.virgin.query request
 * 
 * @author auto create
 * @since 1.0, 2012-12-06 00:00:00
 */
class TradeCartVirginQueryRequest
{
	/** 
	 * 查询弃单数据的起始日期（格式为yyyy-MM-dd），购物车弃单数据的周期为当前时间的前[3天，33天]
	 **/
	private $beginDate;
	
	/** 
	 * 查询弃单数据的截止日期，购物车弃单数据的周期为当前时间的前[3天，33天]，如当前时间为2012-06-08，则查询弃单数据最大区间为[2012-05-07，2012-06-05]
	 **/
	private $endDate;
	
	/** 
	 * 分页的偏移量，也叫分页的长度
	 **/
	private $offset;
	
	/** 
	 * 是否查询单天的购物车弃单数据（单天single_day=true， 多天single_day=false或不传都可），若single_day=true时， begin_date 和 end_date的值必须要相等
	 **/
	private $singleDay;
	
	/** 
	 * 数据分页的起始位置
	 **/
	private $startIndex;
	
	/** 
	 * 查询购物车弃单数据时，是否使用数据分页（使用分页，use_pagination=true； 不使用分页use_pagination=false或不传）。use_pagination=true时，还要传入分页起始位置和偏移量两个参数值
	 **/
	private $usePagination;
	
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

	public function setOffset($offset)
	{
		$this->offset = $offset;
		$this->apiParas["offset"] = $offset;
	}

	public function getOffset()
	{
		return $this->offset;
	}

	public function setSingleDay($singleDay)
	{
		$this->singleDay = $singleDay;
		$this->apiParas["single_day"] = $singleDay;
	}

	public function getSingleDay()
	{
		return $this->singleDay;
	}

	public function setStartIndex($startIndex)
	{
		$this->startIndex = $startIndex;
		$this->apiParas["start_index"] = $startIndex;
	}

	public function getStartIndex()
	{
		return $this->startIndex;
	}

	public function setUsePagination($usePagination)
	{
		$this->usePagination = $usePagination;
		$this->apiParas["use_pagination"] = $usePagination;
	}

	public function getUsePagination()
	{
		return $this->usePagination;
	}

	public function getApiMethodName()
	{
		return "taobao.trade.cart.virgin.query";
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
