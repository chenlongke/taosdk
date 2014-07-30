<?php
/**
 * TOP API: taobao.jianghu.microshop.publish request
 * 
 * @author auto create
 * @since 1.0, 2012-11-26 00:00:00
 */
class JianghuMicroshopPublishRequest
{
	/** 
	 * 发表掌柜说内容（内容长度必须小于140个字符）
	 **/
	private $content;
	
	/** 
	 * 图片byte数组（图片不能超过4M；图片像素不能超过1500w像素）
	 **/
	private $image;
	
	/** 
	 * 掌柜说FEED子类型，包括：104-掌柜说新鲜事, 112-掌柜说新品上架,113-掌柜说促销活动
	 **/
	private $subtype;
	
	/** 
	 * 淘宝范围内的商品链接地址
	 **/
	private $url;
	
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

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setSubtype($subtype)
	{
		$this->subtype = $subtype;
		$this->apiParas["subtype"] = $subtype;
	}

	public function getSubtype()
	{
		return $this->subtype;
	}

	public function setUrl($url)
	{
		$this->url = $url;
		$this->apiParas["url"] = $url;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.microshop.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
