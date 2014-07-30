<?php
/**
 * TOP API: alibaba.yunos.bi.contractphone.get request
 * 
 * @author auto create
 * @since 1.0, 2013-10-15 00:00:00
 */
class AlibabaYunosBiContractphoneGetRequest
{
	/** 
	 * 查询时间，查某天的数据如2013-09-15，查某月的数据如2013-09
	 **/
	private $queryTime;
	
	/** 
	 * 分页查询时指定每页的起始行。因为数据有可能很多，我们分页将数据回传回去，因此需要指定start_rowkey，当查询第一页时，传start_rowkey=""(空字符串)，当查询第二页时，传start_rowkey="第一页的最大rowkey"，查询第三页时，传start_rowkey="第二页的最大rowkey"，依此类推，直到最后返回数据页List为0条，数据回传结束。
	 **/
	private $startRowkey;
	
	/** 
	 * 数据标识
	 **/
	private $tableName;
	
	private $apiParas = array();
	
	public function setQueryTime($queryTime)
	{
		$this->queryTime = $queryTime;
		$this->apiParas["query_time"] = $queryTime;
	}

	public function getQueryTime()
	{
		return $this->queryTime;
	}

	public function setStartRowkey($startRowkey)
	{
		$this->startRowkey = $startRowkey;
		$this->apiParas["start_rowkey"] = $startRowkey;
	}

	public function getStartRowkey()
	{
		return $this->startRowkey;
	}

	public function setTableName($tableName)
	{
		$this->tableName = $tableName;
		$this->apiParas["table_name"] = $tableName;
	}

	public function getTableName()
	{
		return $this->tableName;
	}

	public function getApiMethodName()
	{
		return "alibaba.yunos.bi.contractphone.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->queryTime,"queryTime");
		RequestCheckUtil::checkNotNull($this->tableName,"tableName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
