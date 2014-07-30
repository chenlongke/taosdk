<?php
/**
 * TOP API: taobao.clouddata.mbp.data.flowback request
 * 
 * @author auto create
 * @since 1.0, 2014-03-28 00:00:00
 */
class ClouddataMbpDataFlowbackRequest
{
	/** 
	 * 上传数据，形式为column1=value1,column2=value2,...的字符串， 列名称只能包含字母数字和下划线，Value如果包含=和，必须用\转义，没有参数则不选
	 **/
	private $data;
	
	/** 
	 * MBP查询表名
	 **/
	private $tableName;
	
	private $apiParas = array();
	
	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
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
		return "taobao.clouddata.mbp.data.flowback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->data,"data");
		RequestCheckUtil::checkNotNull($this->tableName,"tableName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
