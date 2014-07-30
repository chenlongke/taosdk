<?php
/**
 * TOP API: taobao.juwliserver.appraisal.add request
 * 
 * @author auto create
 * @since 1.0, 2012-10-25 00:00:00
 */
class JuwliserverAppraisalAddRequest
{
	/** 
	 * 扩展字段
	 **/
	private $appraisal;
	
	/** 
	 * 用户是否喜欢
0 不喜欢
1 喜欢
2 一般
	 **/
	private $favResult;
	
	/** 
	 * 商品对应的聚划算id
	 **/
	private $juId;
	
	private $apiParas = array();
	
	public function setAppraisal($appraisal)
	{
		$this->appraisal = $appraisal;
		$this->apiParas["appraisal"] = $appraisal;
	}

	public function getAppraisal()
	{
		return $this->appraisal;
	}

	public function setFavResult($favResult)
	{
		$this->favResult = $favResult;
		$this->apiParas["fav_result"] = $favResult;
	}

	public function getFavResult()
	{
		return $this->favResult;
	}

	public function setJuId($juId)
	{
		$this->juId = $juId;
		$this->apiParas["ju_id"] = $juId;
	}

	public function getJuId()
	{
		return $this->juId;
	}

	public function getApiMethodName()
	{
		return "taobao.juwliserver.appraisal.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->favResult,"favResult");
		RequestCheckUtil::checkNotNull($this->juId,"juId");
		RequestCheckUtil::checkMinValue($this->juId,1,"juId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
