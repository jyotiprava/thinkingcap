<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback']; 
include_once("dbconnection.php");

?>
 ({
		
		"items": [
<?php
			
			$query=mysql_query("select * from `category` order by `serial_no`");
		while($result=mysql_fetch_array($query))
				{
				$q1=mysql_query("select `id` from `promote` where `category_id` like '%|$result[id]|%' and `status`='1'");
				$count=mysql_num_rows($q1);
				
					
						?>
						
	   {
			
			"description": "<a onclick='return set_cookie(&#39;<?php echo $result['id']?>&#39;);'><p id='<?php echo $result['id'];?>'><?php echo $result['category_name']; ?> &nbsp; &nbsp; (<?php echo $count?>)</p></a>"
		
	   },
	
 
   
						
						
						
						
						
							
					<?php
					}


			?>
			]
})