<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>{$title}</title>
</head>
<body>
	{foreach $arr as $key => $val}
	{$val.entity_media_id} &nbsp; {$val.entity_id} &nbsp; {$val.path}<br>
	{/foreach}
	
	===============================<br>
	the older version<br>
	===============================<br/>
	
	{foreach from = $arr key = k  item = val}
	{$val.entity_media_id} &nbsp; {$val.entity_id} &nbsp; {$val.path}<br>
	{/foreach}
	
	
	
	{$articleTitle}<br>
	{$articleTitle|truncate}<br>
	{$articleTitle|truncate:30}<br>
	{$articleTitle|truncate:30:""}<br>
	{$articleTitle|truncate:30:"---"}<br>
	{$articleTitle|truncate:30:"":true}<br>
	{$articleTitle|truncate:30:"...":true}<br>
	{$articleTitle|truncate:30:'..':true:true}<br>
	
	
	{$number}<br>
	{$number|string_format:"%.2f"}<br>
	{$number|string_format:"%d"}<br>
</body>
</html>
