<?php
/**
 * TOP API: taobao.jianghu.feed.publish request
 * 
 * @author auto create
 * @since 1.0, 2012-11-26 00:00:00
 */
class JianghuFeedPublishRequest
{
	/** 
	 * 动态显示的内容数据。在body里可以使用${actor}和${participator}模板变量，其中${actor}表示产生Feed的人，${participator} 表示动态的参与者，如果要使用这个模板变量需要传递participator参数。使用示例：${actor}踢了${participator}一下。 在例子中，动态展示时，系统会将${actor}及${participator}替换成相应的人名，并加上对应主页的连接地址。动态显示的内容数据。只支持两个html元素<a>和<img>，其他的html元素将被过滤掉。 script、style、head、select标签的内容被去掉。其他的标签保留内容如：<script>alert</script>和红色 结果为：红色 （最长4000个字符，一个中文字符和一个英文字符的长度都是1）
	 **/
	private $body;
	
	/** 
	 * (此字段废弃掉)媒体对象的数据，媒体对象的数据，用json格式表示。 mediaType:0:图片，1:音频，2:flash 。 其中media是媒体对象的图片地址，mediaLink是点击媒体对象时候的目标URL 。
注：图片大小240*240像素 格式无限制 [ {"mediaName":"baobei","media":"media src","mediaLink":"mdedia link","mediaDesc":"","mediaType":"0" } , {"mediaName":"baobei","media":"media src","mediaLink":"mdedia link","mediaDesc":"","mediaType":"0"} ]
	 **/
	private $medias;
	
	/** 
	 * 如果Feed的内容描述的是两人之间发生的关系，则用这个参数指明被参与的一方。注：Feed的发起方不需要指定，默认为当前用户。(须数字，最长20位)
	 **/
	private $participator;
	
	/** 
	 * 标题。feed标题在title里可以使用${actor}和${participator}模板变量，其中${actor}表示产生Feed的人，$ {participator}表示动态的参与者，如果要使用这个模板变量需要传递participator参数。使用示例： ${actor}踢了${participator} 一下。 在例子中，动态展示时，系统会将$ {actor}及${participator}替换成相应的人名。没有链接。最长200个字符，一个中文字符和一个英文字符的长度都是1。
	 **/
	private $title;
	
	/** 
	 * 标题链接，最长200个字符，一个中文字符和一个英文字符的长度都是1。
	 **/
	private $titleLink;
	
	/** 
	 * 应用自定义feed（动态）的类型（必须为数字取值范围[0,127]）
	 **/
	private $type;
	
	/** 
	 * 动态在旺旺上的显示类型，如果多个则用逗号分隔。0:主窗口Feed，2:联系人头像前的Feed。当wwFeedTypes 不为空，title,titleLink 不能为空。
	 **/
	private $wwFeedTypes;
	
	private $apiParas = array();
	
	public function setBody($body)
	{
		$this->body = $body;
		$this->apiParas["body"] = $body;
	}

	public function getBody()
	{
		return $this->body;
	}

	public function setMedias($medias)
	{
		$this->medias = $medias;
		$this->apiParas["medias"] = $medias;
	}

	public function getMedias()
	{
		return $this->medias;
	}

	public function setParticipator($participator)
	{
		$this->participator = $participator;
		$this->apiParas["participator"] = $participator;
	}

	public function getParticipator()
	{
		return $this->participator;
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

	public function setTitleLink($titleLink)
	{
		$this->titleLink = $titleLink;
		$this->apiParas["title_link"] = $titleLink;
	}

	public function getTitleLink()
	{
		return $this->titleLink;
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

	public function setWwFeedTypes($wwFeedTypes)
	{
		$this->wwFeedTypes = $wwFeedTypes;
		$this->apiParas["ww_feed_types"] = $wwFeedTypes;
	}

	public function getWwFeedTypes()
	{
		return $this->wwFeedTypes;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.feed.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->body,"body");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
