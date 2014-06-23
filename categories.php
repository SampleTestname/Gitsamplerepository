<?php require_once 'connect.inc'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz App MST Solution</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
    <script src="index.js"></script>
</head>
<body>
    <div data-role="page" id="login" data-theme="b">
        <div data-role="header" data-theme="a">
            <h3>Exam Categries</h3>
        </div>
 
        <div data-role="content">
            <form id="category" class="ui-body ui-body-a ui-corner-all" data-ajax="false" method="post">
                <fieldset>
                    	
			<div data-role="fieldcontain"> 
       		    <ol data-role="listview" class="art-vmenu">
			<?php $response=mysql_query("select id,name from sample");
			 while($result=mysql_fetch_array($response)){ ?>

			<li value=<?php echo $result['id'];?>><a href="/Quiz/index.php"><?php echo $result['name'];?></a></li>
			
			<?php
			}
			?>
		</ol>
		    
		    </div>
                    	    
                </fieldset>
            </form>                             
        </div>
 
        <div data-theme="a" data-role="footer" data-position="fixed">
 
        </div>
    </div>
    
</body>
</html>
