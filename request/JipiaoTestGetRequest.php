<?php
/**
 * TOP API: taobao.jipiao.test.get request
 * 
 * @author auto create
 * @since 1.0, 2014-03-04 00:00:00
 */
class JipiaoTestGetRequest
{
	/** 
	 * 国内机票：TOP接入接口测试必须参数
	 **/
	private $etName;
	
	/** 
	 * sdf
	 **/
	private $orderid;
	
	private $apiParas = array();
	
	public function setEtName($etName)
	{
		$this->etName = $etName;
		$this->apiParas["et_name"] = $etName;
	}

	public function getEtName()
	{
		return $this->etName;
	}

	public function setOrderid($orderid)
	{
		$this->orderid = $orderid;
		$this->apiParas["orderid"] = $orderid;
	}

	public function getOrderid()
	{
		return $this->orderid;
	}

	public function getApiMethodName()
	{
		return "taobao.jipiao.test.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->etName,"etName");
		RequestCheckUtil::checkMaxListSize($this->etName,3,"etName");
		RequestCheckUtil::checkMaxLength($this->etName,64,"etName");
		RequestCheckUtil::checkMaxListSize($this->orderid,3,"orderid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
