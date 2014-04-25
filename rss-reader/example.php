<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Example</title>
</head>

<body>
<?php
include("feedReader.class.php");
$ob=new feedReader();
$ob->setFeedUrl("webdevfeed.xml");
$ob->parseFeed();
$array=$ob->getFeedOutputData();
$number=$ob->getFeedNumberOfNodes();
echo "-- Channel --<br>";
echo $array["channel"]["title"]."<br>";
echo $array["channel"]["link"]."<br>";
echo $array["channel"]["description"]."<br>";
echo $array["channel"]["language"]."<br>";
echo $array["channel"]["copyright"]."<br>";
echo $array["channel"]["docs"]."<br>";
echo "<br>-- image --<br>";
echo $array["image"]["title"]."<br>";
echo $array["image"]["url"]."<br>";
echo $array["image"]["link"]."<br>";
echo "<br>-- items --<br>";
for($i=0;$i<$number;$i++){
	echo $array["item"]["title"][$i]."<br>";
	echo $array["item"]["link"][$i]."<br>";
	echo $array["item"]["description"][$i]."<br>";
	echo $array["item"]["author"][$i]."<br>";
	echo $array["item"]["pubdate"][$i]."<br>";
}
?>
</body>
</html>
