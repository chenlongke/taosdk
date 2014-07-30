<?php
/**
 * TOP API: taobao.item.video.delete request
 * 
 * @author auto create
 * @since 1.0, 2012-11-11 00:00:00
 */
class ItemVideoDeleteRequest
{
	/** 
	 * 商品中视频关联记录的id
	 **/
	private $id;
	
	/** 
	 * 视频所属商品文字的版本。可选值:zh_HK(繁体),zh_CN(简体);默认值:zh_CN。不存默认简体
	 **/
	private $lang;
	
	/** 
	 * 商品数字ID，必选
	 **/
	private $numIid;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setLang($lang)
	{
		$this->lang = $lang;
		$this->apiParas["lang"] = $lang;
	}

	public function getLang()
	{
		return $this->lang;
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
		return "taobao.item.video.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkMinValue($this->id,0,"id");
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkMinValue($this->numIid,0,"numIid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
