<?php
/**
 * TOP API: alibaba.yunos.bi.contractphone.add request
 * 
 * @author auto create
 * @since 1.0, 2013-08-21 00:00:00
 */
class AlibabaYunosBiContractphoneAddRequest
{
	/** 
	 * 上传数据，形式为column1=value1,column2=value2,...的字符串， 列名称只能包含字母数字和下划线，Value如果包含=和，必须用\转义，没有参数则不填
	 **/
	private $content;
	
	/** 
	 * 报表名称
	 **/
	private $tableName;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
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
		return "alibaba.yunos.bi.contractphone.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->tableName,"tableName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
