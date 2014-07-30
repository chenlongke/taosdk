<?php
/**
 * TOP API: taobao.uz.content.update request
 * 
 * @author auto create
 * @since 1.0, 2013-09-25 00:00:00
 */
class UzContentUpdateRequest
{
	/** 
	 * 内容的自定义分类，数值为文本内容，主要用于区分内容的分类（譬如连衣裙、T恤、阿迪达斯等），分类名称的长度限制为(0,5] (单位是字符，不区分中英文)，分类名称中不能包含非法内容，且一个站点下所拥有的总自定义分类数量不能超过16个
	 **/
	private $className;
	
	/** 
	 * 内容的推荐理由，数值为文本内容，此参数只有在type =1 || type =2 （即内容类型为宝贝或图片）的时候才有效，且推荐理由的长度限制为[0,140](单位是字符，不区分中英文)，推荐理由中不能含有非法内容，不能含有恶意脚本
	 **/
	private $comments;
	
	/** 
	 * 内容的心得，数值为文本内容（html形式），此参数只有在type = 3（即内容类型为心得）的时候才有效，且心得长度限制为[100,20000] (单位是字符，不区分中英文), 心得中不能有外链，不能有恶意脚本；心得中包含的商品链接系统自自动提取并保存起来
	 **/
	private $content;
	
	/** 
	 * 内容的detail页面地址，数值为html链接，主要用于展现内容的detail信息的，此数值必须存在，它是U站首页或淘宝官网搜索到内容之后用户点击进入的跳转页面。（如果站点没有单个内容的detail页面，也可以直接填写站点首页）
	 **/
	private $detailUrl;
	
	/** 
	 * 内容的主键id
	 **/
	private $id;
	
	/** 
	 * 内容关联的商品列表，数值为商品的detail链接地址，多个宝贝以“，”分割。此参数只有在type = 1 || type = 2（即内容类型为宝贝或图片）的时候才有效，宝贝只能并且必须关联一个商品；图片可以关联0~5个商品；
	 **/
	private $items;
	
	/** 
	 * 内容关联的图片地址，数值为图片的html链接地址，多个图片以“，”分割。此参数只有在type = 2（即内容类型为图片）的时候才有效，且关联的图片数量范围为[1,10]；
	 **/
	private $picUrl;
	
	/** 
	 * 内容的自定义标签，数值为文本内容，多个标签以“，”分割。主要用于细化内容的分类（譬如小清新，棉质、雪纺等），标签名称的长度限制为(0,20] (单位是字符，不区分中英文)，标签名称中不能包含非法内容，且一个内容关联的标签数目不能超过20个。
	 **/
	private $tags;
	
	/** 
	 * 内容标题，数值为文本内容，此参数只有在type = 3（即内容类型为心得）的时候才有效，且标题的长度限制为(0,30](单位是字符，不区分中英文)，标题中不能含有非法内容，不能含有恶意脚本。
	 **/
	private $title;
	
	/** 
	 * 站长的userid
	 **/
	private $userId;
	
	private $apiParas = array();
	
	public function setClassName($className)
	{
		$this->className = $className;
		$this->apiParas["class_name"] = $className;
	}

	public function getClassName()
	{
		return $this->className;
	}

	public function setComments($comments)
	{
		$this->comments = $comments;
		$this->apiParas["comments"] = $comments;
	}

	public function getComments()
	{
		return $this->comments;
	}

	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setDetailUrl($detailUrl)
	{
		$this->detailUrl = $detailUrl;
		$this->apiParas["detail_url"] = $detailUrl;
	}

	public function getDetailUrl()
	{
		return $this->detailUrl;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setItems($items)
	{
		$this->items = $items;
		$this->apiParas["items"] = $items;
	}

	public function getItems()
	{
		return $this->items;
	}

	public function setPicUrl($picUrl)
	{
		$this->picUrl = $picUrl;
		$this->apiParas["pic_url"] = $picUrl;
	}

	public function getPicUrl()
	{
		return $this->picUrl;
	}

	public function setTags($tags)
	{
		$this->tags = $tags;
		$this->apiParas["tags"] = $tags;
	}

	public function getTags()
	{
		return $this->tags;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "taobao.uz.content.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->className,"className");
		RequestCheckUtil::checkMaxLength($this->className,5,"className");
		RequestCheckUtil::checkNotNull($this->comments,"comments");
		RequestCheckUtil::checkMaxLength($this->comments,140,"comments");
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkMaxLength($this->content,20000,"content");
		RequestCheckUtil::checkNotNull($this->detailUrl,"detailUrl");
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->items,"items");
		RequestCheckUtil::checkNotNull($this->picUrl,"picUrl");
		RequestCheckUtil::checkMaxLength($this->tags,400,"tags");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
