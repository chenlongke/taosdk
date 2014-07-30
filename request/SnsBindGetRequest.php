<?php
/**
 * TOP API: taobao.sns.bind.get request
 * 
 * @author auto create
 * @since 1.0, 2013-09-18 00:00:00
 */
class SnsBindGetRequest
{
	/** 
	 * 手机号码或者邮箱的一个数据串,每一个用逗号分隔
	 **/
	private $dataset;
	
	private $apiParas = array();
	
	public function setDataset($dataset)
	{
		$this->dataset = $dataset;
		$this->apiParas["dataset"] = $dataset;
	}

	public function getDataset()
	{
		return $this->dataset;
	}

	public function getApiMethodName()
	{
		return "taobao.sns.bind.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->dataset,"dataset");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
