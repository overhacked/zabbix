<?php
/*
** Zabbix
** Copyright (C) 2000-2011 Zabbix SIA
**
** This program is free software; you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation; either version 2 of the License, or
** (at your option) any later version.
**
** This program is distributed in the hope that it will be useful,
** but WITHOUT ANY WARRANTY; without even the implied warranty of
** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
** GNU General Public License for more details.
**
** You should have received a copy of the GNU General Public License
** along with this program; if not, write to the Free Software
** Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
**/
?>
<?php
	global $TRANSLATION;

	$TRANSLATION=array(

	'S_YEAR_SHORT'=>			_('y'),
	'S_MONTH_SHORT'=>			_('m'),
	'S_WEEK_SHORT'=>			_('w'),
	'S_DAY_SHORT'=>				_('d'),
	'S_HOUR_SHORT' =>			_('h'),
	'S_MINUTE_SHORT' =>			_('m'),

//	httpdetails.php
	'S_DETAILS_OF_SCENARIO'=>		_('Details of scenario'),
	'S_DETAILS_OF_SCENARIO_BIG'=>		_('DETAILS OF SCENARIO'),
	'S_SPEED'=>				_('Speed'),
	'S_RESPONSE_CODE'=>			_('Response code'),
	'S_TOTAL_BIG'=>				_('TOTAL'),
	'S_RESPONSE_TIME'=>			_('Response time'),

//	httpmon.php
	'S_STATUS_OF_WEB_MONITORING'=>		_('Status of Web monitoring'),
	'S_STATUS_OF_WEB_MONITORING_BIG'=>	_('STATUS OF WEB MONITORING'),

//	httpconf.php
	'S_STEP'=>					_('Step'),

//	exp_imp.php
	'S_ELEMENT'=>				_('Element'),
	'S_IMPORT_FILE'=>			_('Import file'),
	'S_IMPORT'=>				_('Import'),
	'S_PREVIEW'=>				_('Preview'),
	'S_RULES'=>				_('Rules'),

//	export.inc.php
	'S_EXPORT_DATE_ATTRIBUTE_DATE_FORMAT'=>	_('d.m.y'),
	'S_EXPORT_TIME_ATTRIBUTE_DATE_FORMAT'=>	_('H.i'),

//	admin.php
	'S_PREVIOUS'=>				_('Previous'),
	'S_NEXT'=>				_('Next'),
	'S_FINISH'=>				_('Finish'),

//	actions.inc.php
	'S_HISTORY_OF_ACTIONS_DATE_FORMAT'=>	_('d M Y H:i:s'),
	'S_EVENT_ACTION_MESSAGES_DATE_FORMAT'=>	_('d M Y H:i:s'),
	'S_EVENT_ACTION_CMDS_DATE_FORMAT'=>	_('Y.M.d H:i:s'),

//	node.php
	'S_MASTER_NODE'=>			_('Master node'),
	'S_CHILD'=>				_('Child'),
	'S_MASTER'=>				_('Master'),
	'S_NODE_UPDATED'=>			_('Node updated'),
	'S_CANNOT_UPDATE_NODE'=>		_('Cannot update node'),
	'S_NODE_ADDED'=>			_('Node added'),
	'S_CANNOT_ADD_NODE'=>			_('Cannot add node'),
	'S_NODE_DELETED'=>			_('Node deleted'),
	'S_CANNOT_DELETE_NODE'=>		_('Cannot delete node'),

//	acknow.php
	'S_BULK_ACKNOWLEDGE'=>			_('Bulk acknowledge'),

//	actionconf.php
	'S_CONFIGURATION_OF_ACTIONS'=>		_('Configuration of actions'),
	'S_FILTER'=>				_('Filter'),

//	actions.php
	'S_ON'=>					_('On'),
	'S_OFF'=>					_('Off'),
	'S_GROUP'=>				_('Group'),
	'S_OR'=>				_('or'),

//	alarms.php
	'S_TIME'=>				_('Time'),
	'S_STATUS'=>				_('Status'),

//	actions.php
	'S_TYPE'=>				_('Type'),
	'S_ERROR'=>				_('Error'),

// Lines
	'S_LINE'=>				_('Line'),
	'S_BOLD_LINE'=>				_('Bold line'),
	'S_DOT'=>				_('Dot'),
	'S_DASHED_LINE'=>			_('Dashed line'),

//	charts.php
	'S_CUSTOM_GRAPHS'=>			_('Custom graphs'),
	'S_GRAPHS_BIG'=>			_('GRAPHS'),
	'S_PERIOD'=>				_('Period'),

//	class.cchart.php
	'S_CCHARTS_TIMELINE_START_DATE_FORMAT'=>		_('d.m H:i'),
	'S_CCHARTS_TIMELINE_END_DATE_FORMAT'=>			_('d.m H:i'),
	'S_CCHARTS_TIMELINE_MAINPERIOD_HOURS_FORMAT'=>		_('H:i'),
	'S_CCHARTS_TIMELINE_MAINPERIOD_FULL_DAY_TIME_FORMAT'=>	_('d.m H:i'),
	'S_CCHARTS_TIMELINE_MAINPERIOD_MONTHDAYS_FORMAT'=>	_('d.m'),

// Colours

//	config.php
	'S_DEFAULT'=>					_('Default'),
	'S_IMAGE'=>					_('Image'),
	'S_OTHER'=>					_('Other'),

//	nodes.php
	'S_NOT_DM_SETUP'=>			_('Your setup is not configured for distributed monitoring'),
	'S_CONFIGURATION_OF_NODES'=>		_('CONFIGURATION OF NODES'),
	'S_NODE'=>				_('Node'),
	'S_NODES_BIG'=>				_('NODES'),
	'S_NEW_NODE'=>				_('New node'),
	'S_DELETE_SELECTED_NODE_Q'=>		_('Delete selected node?'),

// proxies.php
	'S_ENABLE_SELECTED_PROXIES' =>	_('Enable hosts monitored by selected proxies?'),
	'S_DISABLE_SELECTED_PROXIES' =>	_('Disable hosts monitored by selected proxies?'),
	'S_DELETE_SELECTED_PROXIES' =>	_('Delete selected proxies?'),
	'S_CONFIGURATION_OF_PROXIES'=>	_('CONFIGURATION OF PROXIES'),
	'S_HOST_COUNT' => _('Host count'),
	'S_ITEM_COUNT' => _('Item count'),
	'S_REQUIRED_PERFORMANCE' => _('Required performance (vps)'),
	'S_PROXY_PASSIVE' => _('Passive'),
	'S_PROXY_ACTIVE' => _('Active'),

//	Latest values
	'S_ALL_S'=>						_('All'),
	'S_GRAPH'=>						_('Graph'),

//	Footer
	'S_ZABBIX'=>				_('Zabbix'),

//	graph.php
	'S_GRAPHS_COPIED'=>			_('Graphs copied'),
	'S_CANNOT_COPY_GRAPHS'=>	_('Cannot copy graphs'),
	'S_COLOR'=>					_('Colour'),
	'S_UP'=>					_('Up'),
	'S_DOWN'=>					_('Down'),
	'S_NEW_ITEM_FOR_THE_GRAPH'=>		_('New item for the graph'),
	'S_UPD_ITEM_FOR_THE_GRAPH'=>		_('Update item for the graph'),
	'S_SORT_ORDER_0_100'=>			_('Sort order (0->100)'),
	'S_YAXIS_SIDE'=>			_('Y axis side'),
	'S_AXIS_SIDE'=>				_('Axis side'),
	'S_LEFT'=>					_('Left'),
	'S_FUNCTION'=>				_('Function'),
	'S_MIN_SMALL'=>				_('min'),
	'S_AVG_SMALL'=>				_('avg'),
	'S_MAX_SMALL'=>				_('max'),
	'S_LST_SMALL'=>				_('last'),
	'S_DRAW_STYLE'=>			_('Draw style'),
	'S_SIMPLE'=>				_('Simple'),
	'S_GRAPH_TYPE'=>			_('Graph type'),

//	graphs.php
	'S_ADD_GRAPH_ITEMS' => _('add graph items first'),
	'S_PERCENTILE_LINE'=>			_('Percentile line'),
	'S_CONFIGURATION_OF_GRAPHS'=>		_('Configuration of graphs'),
	'S_GRAPH_ADDED'=>			_('Graph added'),
	'S_GRAPH_UPDATED'=>			_('Graph updated'),
	'S_CANNOT_UPDATE_GRAPH'=>		_('Cannot update graph'),
	'S_GRAPH_DELETED'=>			_('Graph deleted'),
	'S_CANNOT_DELETE_GRAPH'=>		_('Cannot delete graph'),
	'S_GRAPHS_DELETED'=>			_('Graphs deleted'),
	'S_CANNOT_DELETE_GRAPHS'=>		_('Cannot delete graphs'),
	'S_CANNOT_ADD_GRAPH'=>			_('Cannot add graph'),
	'S_ANOTHER_ITEM_SUM'=>			_('Cannot add more than one item with type "Graph sum"'),
	'S_ID'=>				_('ID'),
	'S_NO_GRAPHS_DEFINED'=>			_('No graphs defined.'),
	'S_DELETE_GRAPH_Q'=>			_('Delete graph?'),
	'S_YAXIS_MIN_VALUE'=>			_('Y axis MIN value'),
	'S_YAXIS_MAX_VALUE'=>			_('Y axis MAX value'),
	'S_CALCULATED'=>			_('Calculated'),
	'S_FIXED'=>				_('Fixed'),
	'S_CREATE_GRAPH'=>			_('Create graph'),
	'S_SHOW_WORKING_TIME'=>			_('Show working time'),
	'S_SHOW_TRIGGERS'=>			_('Show triggers'),
	'S_3D_VIEW'=>				_('3D view'),
	'S_SHOW_LEGEND'=>			_('Show legend'),
	'S_GRAPH_SUM'=>				_('Graph sum'),
	'S_GRAPH_ITEM'=>			_('Graph item'),
	'S_REQUIRED_ITEMS_FOR_GRAPH'=>		_('Items required for graph'),
	'S_NO_TARGET_SELECTED'=>		_('No target selected'),
	'S_DELETE_SELECTED_GRAPHS'=>		_('Delete selected graphs?'),

//	history.php
	'S_SELECT_ROWS_WITH_VALUE_LIKE'=>	_('Select rows with value like'),
	'S_TIMESTAMP'=>				_('Timestamp'),
	'S_SOURCE'=>				_('Source'),
	'S_INFO'=>					_('Info'),
	'S_EVENT_ID'=>				_('Event ID'),
	'S_SHOW_UNKNOWN_EVENTS'=>			_('Show unknown events'),
	'S_REMOVE_SELECTED'=>			_('Remove selected'),
	'S_ITEMS_LIST'=>				_('Items list'),
	'S_SHOW_SELECTED'=>			_('Show selected'),
	'S_HIDE_SELECTED'=>			_('Hide selected'),
	'S_MARK_SELECTED'=>			_('Mark selected'),
	'S_MARK_OTHERS'=>			_('Mark others'),

	'S_AS_RED'=>				_('as Red'),
	'S_AS_GREEN'=>				_('as Green'),
	'S_AS_BLUE'=>				_('as Blue'),

	'S_HISTORY_LOG_ITEM_DATE_FORMAT'=>	_('[Y.M.d H:i:s]'),
	'S_HISTORY_LOG_LOCALTIME_DATE_FORMAT'=>	_('Y.M.d H:i:s'),
	'S_HISTORY_LOG_ITEM_PLAINTEXT'=>	_('Y-m-d H:i:s'),
	'S_HISTORY_PLAINTEXT_DATE_FORMAT'=>	_('Y-m-d H:i:s'),
	'S_HISTORY_ITEM_DATE_FORMAT'=>		_('Y.M.d H:i:s'),

	'S_JANUARY'=>				_('January'),
	'S_FEBRUARY'=>				_('February'),
	'S_MARCH'=>				_('March'),
	'S_APRIL'=>				_('April'),
	'S_MAY'=>				_('May'),
	'S_JUNE'=>				_('June'),
	'S_JULY'=>				_('July'),
	'S_AUGUST'=>				_('August'),
	'S_SEPTEMBER'=>				_('September'),
	'S_OCTOBER'=>				_('October'),
	'S_NOVEMBER'=>				_('November'),
	'S_DECEMBER'=>				_('December'),

//	hosts.php
	'S_IN'=>					_('In'),
	'S_APPLICATIONS'=>				_('Applications'),
	'S_HOSTS'=>					_('Hosts'),
	'S_ITEMS'=>					_('Items'),
	'S_TRIGGERS'=>					_('Triggers'),
	'S_GRAPHS'=>					_('Graphs'),
	'S_HOST'=>					_('Host'),
	'S_DNS'=>					_('DNS'),
	'S_IP'=>					_('IP'),
	'S_PORT'=>					_('Port'),
	'S_TEMPLATE'=>					_('Template'),
	'S_GROUPS'=>					_('Groups'),
	'S_DELETE_SELECTED_WITH_LINKED_ELEMENTS'=>	_('Delete selected with linked elements'),
	'S_HOST_GROUP'=>				_('Host group'),
	'S_UPDATE'=>					_('Update'),
	'S_PROXIES_BIG'=>				_('PROXIES'),
	'S_CREATE_PROXY'=>				_('Create proxy'),
	'S_LASTSEEN_AGE'=>				_('Last seen (age)'),
	'S_INTERFACES' =>				_('Interfaces'),

// templates.php
	'S_LINKED_TEMPLATES'=>			_('Linked templates'),
	'S_LINKED_TO'=>				_('Linked to'),
	'S_DELETE_AND_CLEAR'=>			_('Delete and clear'),
	'S_DELETE_SELECTED_TEMPLATES_Q'=>	_('Delete selected templates?'),
	'S_WARNING_THIS_DELETE_TEMPLATES_AND_CLEAR'=>_('Delete and clear selected templates? (Warning: all linked hosts will be cleared!)'),
	'S_DELETE_TEMPLATE_Q' => _('Delete template?'),
	'S_DELETE_AND_CLEAR_TEMPLATE_Q' => _('Delete and clear template? (Warning: all linked hosts will be cleared!)'),

	'S_TEMPLATE_LINKAGE'=>			_('Template linkage'),
	'S_TEMPLATES'=>				_('Templates'),
	'S_UNLINK'=>				_('Unlink'),
	'S_CANNOT_UNLINK_TEMPLATE'=>	_('Cannot unlink template'),
	'S_CANNOT_LINK_TEMPLATE'=>	_('Cannot link template'),
	'S_UNLINK_AND_CLEAR'=>			_('Unlink and clear'),

//	items.php
	'S_DESCRIPTION'=>					_('Description'),
	'S_HISTORY'=>						_('History'),
	'S_WEB_CHECKS_BIG'=>					_('WEB CHECKS'),
	'S_ITEM'=>						_('Item'),
	'S_MODE'=>						_('Mode'),

// disc_prototypes.php
	'S_ADD_PROTOTYPE' => _('Add prototype'),

	'S_CONFIGURATION_OF_GRAPHS_PROTOTYPES_BIG' => _('CONFIGURATION OF GRAPH PROTOTYPES'),

// graph_prototypes.php
	'S_GRAPH_PROTOTYPES_OF_BIG' => _('GRAPH PROTOTYPES OF'),

//	events.php
	'S_NO_EVENTS_FOUND'=>			_('No events found'),
	'S_EVENTS_DATE_FORMAT'=>		_('d M Y H:i:s'),
	'S_EVENTS_DISCOVERY_TIME_FORMAT'=>	_('d M Y H:i:s'),
	'S_EVENTS_ACTION_TIME_FORMAT'=>		_('d M Y H:i:s'),

//	sysmap.php
	'S_HIDDEN'=>			_('Hidden'),
	'S_SHOWN'=>				_('Shown'),
	'S_URLS'=>				_('URLs'),
	'S_LABEL'=>				_('Label'),
	'S_X'=>					_('X'),
	'S_CONFIGURATION_OF_NETWORK_MAPS'=>	_('Configuration of network maps'),
	'S_NO_IMAGES' => 'You need to have at least one image uploaded to create map element. Images can be uploaded in Administration->General->Images section.',

//	sysmaps.php
	'S_MAP_DELETED'=>			_('Network map deleted'),
	'S_CANNOT_DELETE_MAP'=>			_('Cannot delete network map'),
	'S_MAPS_BIG'=>					_('MAPS'),
	'S_CREATE_MAP'=>				_('Create map'),
	'S_IMPORT_MAP'=>				_('Import map'),
	'S_DELETE_SELECTED_MAPS_Q'=>		_('Delete selected maps?'),
	'S_MAP_ADDED'=>					_('Network map added'),
	'S_CANNOT_ADD_MAP'=>			_('Cannot add network map'),
	'S_MAP_UPDATED'=>				_('Network map updated'),
	'S_CANNOT_UPDATE_MAP'=>			_('Cannot update network map'),
	'S_TWO_ELEMENTS_SHOULD_BE_SELECTED'=>		_('Two elements should be selected'),
	'S_DELETE_SELECTED_ELEMENTS_Q'=>		_('Delete selected elements?'),
	'S_PLEASE_SELECT_TWO_ELEMENTS'=>		_('Please select two elements'),
	'S_DELETE_LINKS_BETWEEN_SELECTED_ELEMENTS_Q'=>	_('Delete links between selected elements?'),
	'S_NEW_ELEMENT'=>				_('New element'),

	'S_BOTTOM'=>					_('Bottom'),
	'S_TOP'=>						_('Top'),

	'S_CANNOT_FIND_IMAGE'=>			_('Cannot find image'),
	'S_CANNOT_FIND_BACKGROUND_IMAGE'=>	_('Cannot find background image'),
	'S_CANNOT_FIND_TRIGGER'=>		_('Cannot find trigger'),
	'S_CANNOT_FIND_HOST'=>			_('Cannot find host'),
	'S_CANNOT_FIND_HOSTGROUP'=>		_('Cannot find hostgroup'),
	'S_CANNOT_FIND_MAP'=>			_('Cannot find map'),
	'S_CANNOT_FIND_SCREEN'=>		_('Cannot find screen'),
	'S_USED_IN_EXPORTED_MAP_SMALL'=>_('used in exported map'),

	'S_INCORRECT_ELEMENT_MAP_LINK' => _('All links should have "Name" and "URL" specified'),
	'S_EACH_URL_SHOULD_HAVE_UNIQUE' => _('Each URL should have a unique name. Please make sure there is only one URL named'),

//	map.php
	'S_ZABBIX_URL'=>		_('http://www.zabbix.com'),
	'S_EVENT_ACKNOWLEDGING_DISABLED' => _('Event acknowledging disabled'),

//	maps.php
	'S_NETWORK_MAPS'=>		_('Network maps'),
	'S_MAPS_DATE_FORMAT'=>	_('Y.m.d H:i:s'),

//	media.php
	'S_MEDIA'=>				_('Media'),
	'S_SEND_TO'=>				_('Send to'),
	'S_WHEN_ACTIVE'=>			_('When active'),
	'S_NEW_MEDIA'=>				_('New media'),
	'S_USE_IF_SEVERITY'=>			_('Use if severity'),
	'S_SAVE'=>				_('Save'),
	'S_CANCEL'=>				_('Cancel'),

//	Menu

//	dashboard.php
	'S_AGE'=>				_('Age'),
	'S_FAVOURITES'=>			_('Favourites'),
	'S_RESET'=>				_('Reset'),

// dashconf.php
	'S_DASHBOARD_CONFIGURATION' =>	_('Dashboard configuration'),
	'S_DASHBOARD_CONFIGURATION_BIG' =>	_('DASHBOARD CONFIGURATION'),
	'S_SELECTED' => _('Selected'),
	'S_SHOW_HOSTS_IN_MAINTENANCE' => _('Show hosts in maintenance'),
	'S_TRIGGERS_WITH_SEVERITY' => _('Triggers with severity'),
	'S_DASHBOARD_FILTER' => _('Dashboard filter'),
	'S_O_UNACKNOWLEDGED_ONLY' => _('Unacknowledged only'),
	'S_O_SEPARATED' => _('Separated'),
	'S_PROBLEM_DISPLAY' => _('Problem display'),

//	overview.php
	'S_OVERVIEW'=>				_('Overview'),
	'S_OVERVIEW_BIG'=>			_('OVERVIEW'),
	'S_HOSTS_LOCATION'=>			_('Hosts location'),
	'S_DATA'=>				_('Data'),
	'S_VALUES'=>				_('Values'),

//	queue.php
	'S_COUNT'=>				_('Count'),
	'S_QUEUE_NODES_DATE_FORMAT'=>		_('d M Y H:i:s'),

//	report1.php
	'S_REPORT_BIG'=>			_('REPORT'),
	'S_STATUS_OF_ZABBIX'=>			_('Status of Zabbix'),
	'S_STATUS_OF_ZABBIX_BIG'=>		_('STATUS OF ZABBIX'),
	'S_VALUE'=>				_('Value'),

//	report2.php
	'S_AVAILABILITY_REPORT'=>		_('Availability report'),
	'S_AVAILABILITY_REPORT_BIG'=>		_('AVAILABILITY REPORT'),
	'S_SHOW'=>				_('Show'),
	'S_BY_HOST'=>				_('By host'),
	'S_BY_TRIGGER_TEMPLATE'=>		_('By trigger template'),

//	chart4.php
	'S_CHART4_TIMELINE_DATE_FORMAT'=>	_('d.M'),

//	chart_bar.php
	'S_CHARTBAR_HOURLY_DATE_FORMAT'=>		_('Y.m.d H:i'),
	'S_CHARTBAR_DAILY_DATE_FORMAT'=>		_('Y.m.d'),

//	report3.php
	'S_FROM'=>					_('From'),
	'S_TILL'=>					_('Till'),
	'S_OK'=>					_('Ok'),
	'S_SLA'=>					_('SLA'),
	'S_DAY'=>					_('Day'),
	'S_MONTH'=>					_('Month'),
	'S_YEAR'=>					_('Year'),
	'S_HOURLY'=>					_('Hourly'),
	'S_DAILY'=>					_('Daily'),
	'S_WEEKLY'=>					_('Weekly'),
	'S_MONTHLY'=>					_('Monthly'),
	'S_YEARLY'=>					_('Yearly'),

//	locales.php
	'S_CREATE'=>				_('Create'),

//	report4.php
	'S_NOTIFICATIONS_BIG'=>			_('NOTIFICATIONS'),
	'S_IT_NOTIFICATIONS'=>			_('Notification report'),
	'S_REPORT4_ANNUALLY_DATE_FORMAT'=>	_('Y'),
	'S_REPORT4_MONTHLY_DATE_FORMAT'=>	_('M Y'),
	'S_REPORT4_DAILY_DATE_FORMAT'=>		_('d M Y'),
	'S_REPORT4_WEEKLY_DATE_FORMAT'=>	_('d M Y H:i'),

//	report6.php
	'S_BAR_REPORTS'=>			_('Bar reports'),
	'S_BAR_REPORT_1'=>			_('Distribution of values for multiple periods'),
	'S_BAR_REPORT_2'=>			_('Distribution of values for multiple items'),
	'S_BAR_REPORT_3'=>			_('Compare values for multiple periods'),

	'S_SCALE'=>				_('Scale'),
	'S_AVERAGE_BY'=>			_('Average by'),
	'S_PALETTE'=>				_('Palette'),
	'S_DARKEN'=>				_('Darken'),
	'S_BRIGHTEN'=>				_('Brighten'),

//	reports.inc.php
	'S_REPORTS_BAR_REPORT_DATE_FORMAT'=>	_('d M Y H:i:s'),

//	screenconf.php
	'S_NO_RESOURCES_DEFINED'=>		_('No resources defined.'),
	'S_SIMPLE_GRAPHS'=>				_('Simple graphs'),
	'S_HISTORY_AND_SIMPLE_GRAPHS'=> _('History and simple graphs'),
	'S_WIDTH'=>						_('Width'),
	'S_HEIGHT'=>					_('Height'),
	'S_EDIT'=>						_('Edit'),
	'S_CANNOT_FIND_GRAPH'=>			_('Cannot find graph'),
	'S_CANNOT_FIND_ITEM'=>			_('Cannot find item'),
	'S_USED_IN_EXPORTED_SCREEN_SMALL'=>_('used in exported screen'),

//	screenedit.php
	'S_MAP'=>					_('Map'),
	'S_AS_PLAIN_TEXT'=>			_('As plain text'),
	'S_LOCAL_TIME'=>			_('Local time'),
	'S_RIGHT'=>				_('Right'),
	'S_MIDDLE'=>				_('Middle'),

//	screens.php
	'S_HOST_SCREENS'=>				_('Host screens'),

//	services.php
	'S_NO_IT_SERVICE_DEFINED'=>		_('No IT services defined.'),
	'S_TRIGGER'=>				_('Trigger'),
	'S_DELETE'=>				_('Delete'),
	'S_CLONE'=>				_('Clone'),
	'S_FULL_CLONE'=>			_('Full clone'),
	'S_REMOVE'=>				_('Remove'),

//	triggers.php
	'S_NO_TRIGGER'=>			_('No trigger'),
	'S_SEVERITY'=>				_('Severity'),
	'S_MIN_SEVERITY'=>			_('Min severity'),
	'S_DISABLED'=>				_('Disabled'),
	'S_ENABLED'=>				_('Enabled'),
	'S_URL'=>				_('URL'),
	'S_TIME_SHIFT'=>			_('Time shift'),
	'S_INSERT_MACRO'=>			_('Insert macro'),
	'S_TRIGGER_LOG_FORM'=>	_('Trigger form'),

//	tr_comments.php
	'S_TRIGGER_COMMENTS'=>			_('Trigger comments'),
	'S_TRIGGER_COMMENTS_BIG'=>		_('TRIGGER COMMENTS'),
	'S_COMMENT_UPDATED'=>			_('Comment updated'),
	'S_CANNOT_UPDATE_COMMENT'=>		_('Cannot update comment'),
	'S_ADD'=>						_('Add'),

//	tr_status.php
	'S_STATUS_OF_TRIGGERS_BIG'=>		_('STATUS OF TRIGGERS'),
	'S_SHOW_DETAILS'=>			_('Show details'),
	'S_FILTER_BY_NAME'=>				_('Filter by name'),
	'S_ACK'=>				_('Ack'),
	'S_ACKNOWLEDGE_STATUS' => _('Acknowledge status'),
	'S_ANY' => _('Any'),
	'S_WITH_UNACKNOWLEDGED_EVENTS' => _('With unacknowledged events'),
	'S_WITH_LAST_EVENT_UNACKNOWLEDGED' => _('With last event unacknowledged'),
	'S_TRIGGERS_STATUS' => _('Triggers status'),
	'S_AGE_LESS_THAN' => _('Age less than'),
	'S_SELECT' => _('Select'),

//	users.php
	'S_PROXY_ADDED'=>			_('Proxy added'),
	'S_CANNOT_ADD_PROXY'=>		_('Cannot add proxy'),
	'S_PROXY_UPDATED'=>			_('Proxy updated'),
	'S_CANNOT_UPDATE_PROXY'=>	_('Cannot update proxy'),
	'S_PROXY_DELETED'=>			_('Proxy deleted'),
	'S_CANNOT_DELETE_PROXY'=>	_('Cannot delete proxy'),
	'S_NAME'=>					_('Name'),
	'S_HIDE'=>					_('Hide'),
	'S_ADD_TO'=>				_('Add to'),
	'S_REMOVE_FROM'=>			_('Remove from'),

//scripts.php
	'S_SCRIPTS'=>				_('Scripts'),
	'S_CLOSE'=>					_('Close'),
	'S_SCRIPT_ERROR'=>					_('SCRIPT ERROR'),
	'S_SCRIPT_ERROR'=>					_('Cannot connect to the trapper port of zabbix server daemon, but it should be available to run the script.'),

//	audit.php

//	profile.php
	'S_CLEAR' =>				_('Clear'),
	'S_MOVE'=>					_('Move'),
	'S_UNMUTE'=>				_('Unmute'),
	'S_MUTE'=>					_('Mute'),
	'S_SNOOZE'=>				_('Snooze'),
	'S_MESSAGES'=>				_('Messages'),

//	hostinventoriesoverview.php
	'S_HOST_INVENTORY_OVERVIEW'=>	_('Host inventory overview'),

//	search.php
	'S_GO'=>					_('Go'),

//	popup.php
	'S_CAPTION'=>				_('Caption'),

//	popup_period.php
	'S_POPUP_PERIOD_CAPTION_DATE_FORMAT'=>	_('d M Y H:i:s'),

//	tr_logform.php
	'S_INCLUDE_S'=>		_('Include'),
	'S_EXCLUDE'=>		_('Exclude'),
	'S_KEYWORD'=>		_('Keyword'),
	'S_POSITION'=>		_('Position'),
	'S_DELETE_EXPRESSION_Q'=>	_('Delete expression?'),
	'S_DELETE_KEYWORD_Q'=>		_('Delete keyword?'),

//  tr_testexpr.php
	'S_TEST_DATA'=>		_('Test data'),
	'S_EXPRESSION_VARIABLE_ELEMENTS'=>	_('Expression Variable Elements'),
	'S_RESULT_TYPE'=>	_('Result type'),

// popup_media.php
	'S_INCORRECT_TIME_PERIOD'=>	_('Incorrect time period'),

// main.js
	'S_NO_ELEMENTS_SELECTED'=>	_('No elements selected!'),

// 	func.inc.php
	'S_E'=>			_('E'),
	'S_Y'=>			_('Y'),

//	items.inc.php
	'S_UPDATED_SMALL'=>				_('updated'),

//	httptest.inc.php
	'S_ADDED_SMALL'=>				_('added'),

//	hosts.inc.php
	'S_INTERNAL_AND_CANNOT_DELETED_SMALL'=>		_('is internal and can not be deleted'),
	'S_NO_APPLICATION_WITH'=>			_('No application with'),
	'S_TEMPLATE_WITH_ITEM_KEY'=>			_('Template with item key'),
	'S_TEMPLATE_WITH_APPLICATION'=>			_('Template with application'),
	'S_ALREADY_LINKED_TO_HOST_SMALL'=>		_('already linked to host'),

//	graphs.inc.php
	'S_NO_GRAPH_WITH'=>					_('No graph item with'),
	'S_MISSING_ITEMS_FOR_GRAPH'=>				_('Missing items for graph'),
	'S_GRAPH_TEMPLATE_HOST_CANNOT_OTHER_ITEMS_HOSTS_SMALL'=>_('with template host cannot contain items from other hosts.'),

//	images.inc.php
	'S_COULD_NOT_SAVE_IMAGE'=>		_('Could not save image!'),
	'S_EXECUTE_SQL_ERROR'=>			_('Execute SQL error'),
	'S_PARSE_SQL_ERROR'=>			_('Parse SQL error'),

//	class.cuser.php
	'S_CUSER_ERROR_ONLY_ADMIN_CAN_ADD_USER_MEDIAS'=>	_('Only Zabbix Admins can add user Medias'),
	'S_CUSER_ERROR_ONLY_ADMIN_CAN_REMOVE_USER_MEDIAS'=>	_('Only Zabbix Admins can remove user Medias'),
	'S_CUSER_ERROR_ONLY_ADMIN_CAN_CHANGE_USER_MEDIAS'=>	_('Only Zabbix Admins can change user Medias'),
	'S_CUSER_ERROR_CANT_DELETE_USER_MEDIAS'=>		_('Can\'t delete user medias'),
	'S_CUSER_ERROR_CANT_UPDATE_USER_MEDIAS'=>		_('Can\'t update user medias'),
	'S_CUSER_ERROR_CANT_INSERT_USER_MEDIAS'=>		_('Can\'t insert user medias'),
	'S_CUSER_ERROR_CANT_RENAME_GUEST_USER'=>		_('Cannot rename guest user'),
	'S_CUSER_ERROR_INCORRECT_TIME_PERIOD'=>			_('Incorrect time period'),
	'S_CUSER_ERROR_WRONG_PERIOD_PART1'=>			_('Wrong period ['),
	'S_CUSER_ERROR_WRONG_PERIOD_PART2'=>			_(']'),

//	Menu

	'S_QUEUE'=>				_('Queue'),
	'S_REPORT'=>				_('Report'),
	'S_REPORTS'=>				_('Reports'),

//	Errors
	'S_NO_PERMISSIONS_FOR_SCREEN'=>	_('No permissions for screen'),
	'S_NO_PERMISSIONS_FOR_MAP'=>	_('No permissions for map'),
	'S_XML_FILE_CONTAINS_ERRORS'=>	_('XML file contains errors'),

//	class.calendar.js
	'S_MONDAY_SHORT_BIG'=>		_('M'),
	'S_TUESDAY_SHORT_BIG'=>		_('T'),
	'S_WEDNESDAY_SHORT_BIG'=>	_('W'),
	'S_THURSDAY_SHORT_BIG'=>	_('T'),
	'S_FRIDAY_SHORT_BIG'=>		_('F'),
	'S_SATURDAY_SHORT_BIG'=>	_('S'),
	'S_SUNDAY_SHORT_BIG'=>		_('S'),
	'S_NOW'=>	_('Now'),
	'S_DONE'=>	_('Done'),

//	gtlc.js
	'S_ZOOM'=>			_('Zoom'),
	'S_FIXED_SMALL'=>		_('fixed'),
	'S_DYNAMIC_SMALL'=>		_('dynamic'),
	'S_NOW_SMALL'=>			_('now'),

//	functions.js
	'S_CREATE_LOG_TRIGGER'=>			_('Create trigger'),
	'DO_YOU_REPLACE_CONDITIONAL_EXPRESSION_Q'=>	_('Do you wish to replace the conditional expression?'),
	'S_ADD_SERVICE'=>				_('Add service'),
	'S_EDIT_SERVICE'=>				_('Edit service'),
	'S_DELETE_SERVICE'=>				_('Delete service'),
	'S_DELETE_SELECTED_SERVICES_Q'=>		_('Delete selected services?'),

// class.cookie.js
	'S_MAX_COOKIE_SIZE_REACHED'=>		_('We are sorry, the maximum possible number of elements to remember has been reached.'),

	'S_ICONMAP_IS_NOT_ENABLED' => _('Iconmap is not enabled'),
);
?>
