<?php
/**
 * TOP API: taobao.hanoi.action.get request
 * 
 * @author auto create
 * @since 1.0, 2013-04-23 00:00:00
 */
class HanoiActionGetRequest
{
	/** 
	 * 根据条件查询所有action，目前只支持根据id查询。
ActionVO的json格式
	 **/
	private $para;
	
	private $apiParas = array();
	
	public function setPara($para)
	{
		$this->para = $para;
		$this->apiParas["para"] = $para;
	}

	public function getPara()
	{
		return $this->para;
	}

	public function getApiMethodName()
	{
		return "taobao.hanoi.action.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->para,"para");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
