<?php
/**
 * TOP API: taobao.jianghu.userstatus.updateUserStatus request
 * 
 * @author auto create
 * @since 1.0, 2011-10-26 00:00:00
 */
class JianghuUserstatusUpdateUserStatusRequest
{
	/** 
	 * app自定义命令行(或URL)
	 **/
	private $appCmd;
	
	/** 
	 * app应用类型 1.音乐 2.影音视频 3.游戏 4.博客 5.书刊杂志 6.通用
	 **/
	private $appType;
	
	/** 
	 * app自定义的文本内容 ，最多100个字符，一个汉字或者一个英文字母或者一个标点符号都算作一个字符
	 **/
	private $content;
	
	/** 
	 * 显示插件开发商提供的图片 ，只支持png格式
	 **/
	private $iconFile;
	
	private $apiParas = array();
	
	public function setAppCmd($appCmd)
	{
		$this->appCmd = $appCmd;
		$this->apiParas["app_cmd"] = $appCmd;
	}

	public function getAppCmd()
	{
		return $this->appCmd;
	}

	public function setAppType($appType)
	{
		$this->appType = $appType;
		$this->apiParas["app_type"] = $appType;
	}

	public function getAppType()
	{
		return $this->appType;
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

	public function setIconFile($iconFile)
	{
		$this->iconFile = $iconFile;
		$this->apiParas["icon_file"] = $iconFile;
	}

	public function getIconFile()
	{
		return $this->iconFile;
	}

	public function getApiMethodName()
	{
		return "taobao.jianghu.userstatus.updateUserStatus";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appType,"appType");
		RequestCheckUtil::checkNotNull($this->content,"content");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
