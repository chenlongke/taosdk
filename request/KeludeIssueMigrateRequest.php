<?php
/**
 * TOP API: taobao.kelude.issue.migrate request
 * 
 * @author auto create
 * @since 1.0, 2014-04-11 00:00:00
 */
class KeludeIssueMigrateRequest
{
	/** 
	 * {    "project_id":"必填。Kelude项目的编号。",    "version_ids":"非必填。列表类型, 可传入多个。kelude版本编号列表，"    "template_id":"必填"。模板ID"    "author":"必填。作者的标识。用户标识可以参考Kelude中用户标识的说明：http://k.alibaba-inc.com/help/openapi",    "assigned_to":"必填。指派人，即问题的解决人",    "subject":"必填。缺陷标题",    "status_id":"必填。缺陷当前的状态。变更历史最好传入完整的变更历史。不然就会出现，变更历史还是New,而缺陷本身是Closed。后续会造成数据统计错误",    "testsuite_id":"非必填。默认空。缺陷关联的测试集编号",    "priority_id":"非必填。缺陷的优先级。94-97.分别表示1-Urgent、2-High、3-Medium、4-Low。默认为96。即3-Medium",    "expected_at":"非必填。期望修复时间。采用北京时间。格式如：2012-05-29 13:53:46",    "created_at":"必填。缺陷创建时间。",    "serious_level_id":"非必填。缺陷的严重程度。87-90。分别表示1-Blocker、2-Major、3-Normal、4-Trivial",    "description":"必填。缺陷详情。支持富文本格式",       "watcher_user_ids":"非必填。跟踪者的用户编号ID。可以传入多个，比如'watcher_user_ids':[1,2,3]",      "attachment_ids":"非必填。如果需要上传附件，需要上传附件的编号。多个请以英文的,分隔，如'attachment_ids'=[123,435,673]",    "custom_field_values":[{        "xxx":"非必填。xx表示自定义属性的编号。比如：47:'6-测试执行期间'。表示缺陷的属性"发现阶段"为"6-测试执行期间"。"    }],        *变更历史的属性名称说明：必须指定为kelude缺陷的字段名称或者自定义属性的编号。字段名称可选的为：subject,description,priority_id,assigned_to_id,serious_level_id,    *status_id,author_id,tracker_id,testsuite_id。自定义属性直接传入数字即可。比如47表示 "发现阶段"这个自定义属性。调用接口前，需要在Kelude缺陷中配置好模板(tracker)    *和模块对应的自定义属性。       "comments",[        {"created_at":"注释1创建时间","author":"注释1创建者的标识符","content":"注释1详情内容"},        ......    ],        *history的property_type支持attr(基本属性),cf(自定义属性)。property_key仅支持以下字段：subject、description、priority_id、assigned_to_id、serious_level_id、status_id、author_id、tracker_id、testsuite_id、自定义属性ID。    *所有的非自定义属性的old_value和new_value都是以对象的ID来记录。所有的自定义属性的old_value和new_value都是其具体的值。比如property_key=47，old_value=6-测试执行期间，new_value=8-发布后。       "history":[        {"created_at":"变更1时间", "property_type":"变更1的属性类别","property_key":"变更1的属性名称。","author":"变更1的作者标识符","old_value":"变更1的旧值","new_value":"变更1的新值"},        .......    ]}
	 **/
	private $data;
	
	private $apiParas = array();
	
	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function getApiMethodName()
	{
		return "taobao.kelude.issue.migrate";
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
