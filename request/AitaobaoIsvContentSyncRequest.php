<?php
/**
 * TOP API: taobao.aitaobao.isv.content.sync request
 * 
 * @author auto create
 * @since 1.0, 2014-04-03 00:00:00
 */
class AitaobaoIsvContentSyncRequest
{
	/** 
	 * 内容的频道id
	 **/
	private $channelId;
	
	/** 
	 * 内容的封面主图图片地址
	 **/
	private $cover;
	
	/** 
	 * 内容的自定义标签列表
	 **/
	private $customTags;
	
	/** 
	 * 内容的描述信息
	 **/
	private $desc;
	
	/** 
	 * 内容id
	 **/
	private $id;
	
	/** 
	 * 内容的附图图片地址列表
	 **/
	private $images;
	
	/** 
	 * 内容的宝贝id列表
	 **/
	private $items;
	
	/** 
	 * 内容的链接地址
	 **/
	private $link;
	
	/** 
	 * 内容的标签id列表
	 **/
	private $tagIds;
	
	/** 
	 * 内容的标题
	 **/
	private $title;
	
	/** 
	 * 内容的类型id(3-专辑；4-搭配)
	 **/
	private $typeId;
	
	private $apiParas = array();
	
	public function setChannelId($channelId)
	{
		$this->channelId = $channelId;
		$this->apiParas["channel_id"] = $channelId;
	}

	public function getChannelId()
	{
		return $this->channelId;
	}

	public function setCover($cover)
	{
		$this->cover = $cover;
		$this->apiParas["cover"] = $cover;
	}

	public function getCover()
	{
		return $this->cover;
	}

	public function setCustomTags($customTags)
	{
		$this->customTags = $customTags;
		$this->apiParas["custom_tags"] = $customTags;
	}

	public function getCustomTags()
	{
		return $this->customTags;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
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

	public function setImages($images)
	{
		$this->images = $images;
		$this->apiParas["images"] = $images;
	}

	public function getImages()
	{
		return $this->images;
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

	public function setLink($link)
	{
		$this->link = $link;
		$this->apiParas["link"] = $link;
	}

	public function getLink()
	{
		return $this->link;
	}

	public function setTagIds($tagIds)
	{
		$this->tagIds = $tagIds;
		$this->apiParas["tag_ids"] = $tagIds;
	}

	public function getTagIds()
	{
		return $this->tagIds;
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

	public function setTypeId($typeId)
	{
		$this->typeId = $typeId;
		$this->apiParas["type_id"] = $typeId;
	}

	public function getTypeId()
	{
		return $this->typeId;
	}

	public function getApiMethodName()
	{
		return "taobao.aitaobao.isv.content.sync";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->channelId,"channelId");
		RequestCheckUtil::checkNotNull($this->cover,"cover");
		RequestCheckUtil::checkNotNull($this->customTags,"customTags");
		RequestCheckUtil::checkMaxListSize($this->customTags,5,"customTags");
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkMaxLength($this->desc,200,"desc");
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkMinValue($this->id,1,"id");
		RequestCheckUtil::checkMaxListSize($this->images,4,"images");
		RequestCheckUtil::checkMaxListSize($this->items,100,"items");
		RequestCheckUtil::checkNotNull($this->link,"link");
		RequestCheckUtil::checkNotNull($this->tagIds,"tagIds");
		RequestCheckUtil::checkMaxListSize($this->tagIds,6,"tagIds");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,20,"title");
		RequestCheckUtil::checkNotNull($this->typeId,"typeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
