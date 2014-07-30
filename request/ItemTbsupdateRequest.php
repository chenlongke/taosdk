<?php
/**
 * TOP API: taobao.item.tbsupdate request
 * 
 * @author auto create
 * @since 1.0, 2011-03-09 00:00:00
 */
class ItemTbsupdateRequest
{
	/** 
	 * 是否在外部网店显示。is_taobao和is_ex两个中至少输入一个
	 **/
	private $isEx;
	
	/** 
	 * 是否在淘宝显示。is_taobao和is_ex两个中至少输入一个
	 **/
	private $isTaobao;
	
	/** 
	 * 商品数字ID。必选
	 **/
	private $numIid;
	
	private $apiParas = array();
	
	public function setIsEx($isEx)
	{
		$this->isEx = $isEx;
		$this->apiParas["is_ex"] = $isEx;
	}

	public function getIsEx()
	{
		return $this->isEx;
	}

	public function setIsTaobao($isTaobao)
	{
		$this->isTaobao = $isTaobao;
		$this->apiParas["is_taobao"] = $isTaobao;
	}

	public function getIsTaobao()
	{
		return $this->isTaobao;
	}

	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function getApiMethodName()
	{
		return "taobao.item.tbsupdate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkMinValue($this->numIid,0,"numIid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
