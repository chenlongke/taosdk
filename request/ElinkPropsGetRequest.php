<?php
/**
 * TOP API: taobao.elink.props.get request
 * 
 * @author auto create
 * @since 1.0, 2012-03-19 00:00:00
 */
class ElinkPropsGetRequest
{
	/** 
	 * 类目ID
	 **/
	private $cid;
	
	private $apiParas = array();
	
	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function getApiMethodName()
	{
		return "taobao.elink.props.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cid,"cid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
