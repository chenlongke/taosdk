<?php
/**
 * TOP API: taobao.item.ebook.add request
 * 
 * @author auto create
 * @since 1.0, 2014-01-27 00:00:00
 */
class ItemEbookAddRequest
{
	/** 
	 * 版权到期时间，如2013-08-06
	 **/
	private $copyrightEnd;
	
	/** 
	 * 版权文件。类型:jpg,png；大小不能超过2M
	 **/
	private $copyrightFiles;
	
	/** 
	 * 商品主图片。类型:JPG,PNG;最大:2M，可以选择不填，不填，则获得默认封面图片
	 **/
	private $cover;
	
	/** 
	 * 宝贝描述。字数要大于5个字符，小于25000个字符，受违禁词控制
	 **/
	private $desc;
	
	/** 
	 * 电子书ISBN号
	 **/
	private $isbn;
	
	/** 
	 * 书名。长度不能超过60个字符
	 **/
	private $name;
	
	/** 
	 * 商品外部编码，该字段的最大长度是512个字节
	 **/
	private $outerId;
	
	/** 
	 * 电子书的售卖价格
取值范围:0.00-9999.99;精确到2位小数;单位:元。如:5.07，表示:5元7分.
	 **/
	private $price;
	
	/** 
	 * 试读章节数，至少大于或等于1，最大值不能超过100
	 **/
	private $probation;
	
	/** 
	 * 宝贝标题。不能超过60字符，受违禁词控制
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setCopyrightEnd($copyrightEnd)
	{
		$this->copyrightEnd = $copyrightEnd;
		$this->apiParas["copyright_end"] = $copyrightEnd;
	}

	public function getCopyrightEnd()
	{
		return $this->copyrightEnd;
	}

	public function setCopyrightFiles($copyrightFiles)
	{
		$this->copyrightFiles = $copyrightFiles;
		$this->apiParas["copyright_files"] = $copyrightFiles;
	}

	public function getCopyrightFiles()
	{
		return $this->copyrightFiles;
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

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setIsbn($isbn)
	{
		$this->isbn = $isbn;
		$this->apiParas["isbn"] = $isbn;
	}

	public function getIsbn()
	{
		return $this->isbn;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setProbation($probation)
	{
		$this->probation = $probation;
		$this->apiParas["probation"] = $probation;
	}

	public function getProbation()
	{
		return $this->probation;
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

	public function getApiMethodName()
	{
		return "taobao.item.ebook.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->copyrightEnd,"copyrightEnd");
		RequestCheckUtil::checkNotNull($this->copyrightFiles,"copyrightFiles");
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkMaxLength($this->desc,200000,"desc");
		RequestCheckUtil::checkNotNull($this->isbn,"isbn");
		RequestCheckUtil::checkNotNull($this->name,"name");
		RequestCheckUtil::checkMaxLength($this->name,60,"name");
		RequestCheckUtil::checkNotNull($this->price,"price");
		RequestCheckUtil::checkNotNull($this->probation,"probation");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,120,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
