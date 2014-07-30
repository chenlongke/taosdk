<?php
/**
 * TOP API: taobao.item.tag.set request
 * 
 * @author auto create
 * @since 1.0, 2014-02-28 00:00:00
 */
class ItemTagSetRequest
{
	/** 
	 * 商品数字id
	 **/
	private $numIid;
	
	/** 
	 * 需要的打标信息，可取值如下(不包含括号中的内容)：elt(e链通)
	 **/
	private $tag;
	
	/** 
	 * 设置标记的操作类型，可取值：add(添加标记)和del(删除标记)
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setNumIid($numIid)
	{
		$this->numIid = $numIid;
		$this->apiParas["num_iid"] = $numIid;
	}

	public function getNumIid()
	{
		return $this->numIid;
	}

	public function setTag($tag)
	{
		$this->tag = $tag;
		$this->apiParas["tag"] = $tag;
	}

	public function getTag()
	{
		return $this->tag;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.item.tag.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->numIid,"numIid");
		RequestCheckUtil::checkMinValue($this->numIid,1,"numIid");
		RequestCheckUtil::checkNotNull($this->tag,"tag");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
