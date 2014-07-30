<?php
/**
 * TOP API: taobao.weitao.cloudtags.group.custom.add request
 * 
 * @author auto create
 * @since 1.0, 2014-01-15 00:00:00
 */
class WeitaoCloudtagsGroupCustomAddRequest
{
	/** 
	 * 所要创建自定义分组的描述
	 **/
	private $groupDesc;
	
	/** 
	 * 想要创建的自定义分组名称
	 **/
	private $groupName;
	
	/** 
	 * 上传的文件内容转换成的字节数组。文件需要使用UTF-8编码方式编写。其中内容为用户id或手机号用英文逗号连接起来的单行文本。
	 **/
	private $userListFileContent;
	
	private $apiParas = array();
	
	public function setGroupDesc($groupDesc)
	{
		$this->groupDesc = $groupDesc;
		$this->apiParas["group_desc"] = $groupDesc;
	}

	public function getGroupDesc()
	{
		return $this->groupDesc;
	}

	public function setGroupName($groupName)
	{
		$this->groupName = $groupName;
		$this->apiParas["group_name"] = $groupName;
	}

	public function getGroupName()
	{
		return $this->groupName;
	}

	public function setUserListFileContent($userListFileContent)
	{
		$this->userListFileContent = $userListFileContent;
		$this->apiParas["user_list_file_content"] = $userListFileContent;
	}

	public function getUserListFileContent()
	{
		return $this->userListFileContent;
	}

	public function getApiMethodName()
	{
		return "taobao.weitao.cloudtags.group.custom.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupDesc,"groupDesc");
		RequestCheckUtil::checkMaxLength($this->groupDesc,256,"groupDesc");
		RequestCheckUtil::checkNotNull($this->groupName,"groupName");
		RequestCheckUtil::checkMaxLength($this->groupName,32,"groupName");
		RequestCheckUtil::checkNotNull($this->userListFileContent,"userListFileContent");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
