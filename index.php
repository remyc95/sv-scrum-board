<!DOCTYPE html>
<html>
    
    <head>
    	<link rel="stylesheet" type="text/css" href="css/flexboxgrid.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" href="images/favicon.ico" type="image/jpeg">
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light|Architects+Daughter' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-1.12.1.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/script.js"></script>
        <title>Silicon Valley Scrum</title>
    </head>
    
    <body>
    	
    	<img src="images/trash.png" id="trash" alt="trash" title="Drag post-it note on me!">
		
		<!-- Main container -->
		<div id="main">
		
			<!-- Panel headers -->
			<div id="table_head" class="row">
				
				<!--<div class="col-xs-2"><div id="trash_div"><img id="trash" src="images/trash.png" alt="trash" />TRASH</div></div>-->
				<div class="col-xs-2"></div>
				<div class="col-xs-2"><div class="title_box-1 title_shortened paper ">ICE BOX</div></div>
				<div class="col-xs-2"><div class="title_box-2 emergency">EMERGENCY</div></div>
				<div class="col-xs-2"><div class="title_box-3 paper">IN PROGRESS</div></div>
				<div class="col-xs-2"><div class="title_box-4 title_shortened paper">TESTING</div></div>
				<div class="col-xs-2"><div class="title_box-5 title_shortened paper">COMPLETE</div></div>
				
			</div>
	
			<!-- Note panels -->
			<div id="table_content" class="row">
				
				<div class="col-xs-2">
					<div class="cat_box-1">CLOUD<div class="cat_note-1"></div></div>
					<div class="cat_box-2">INGESTION ENGINE<div class="cat_note-2"></div></div>
					<div class="cat_box-3">COMPRESSION ENGINE<div class="cat_note-3"></div></div>
					<div class="cat_box-4">FILE STORAGE SERVICES<div class="cat_note-4"></div></div>
					<div class="cat_box-5">PUBLISHING SERVICES<div class="cat_note-5"></div></div>
					<div class="cat_box-6">CDN DISTRIBUTION SERVICES<div class="cat_note-6"></div></div>
					<div class="cat_box-7">CONSUMPTION SERVICES<div class="cat_note-7"></div></div>
					<div class="cat_box-8">CONSUMPTION EDGE<div class="cat_note-8"></div></div>
					<div class="cat_box-9">OPERATIONS BILLING AND USER MANAGEMENT<div class="cat_note-9"></div></div>

				</div>
					
				<div class="col-xs-2" id="ice_box_content"></div>
				<div class="col-xs-2"></div>
				<div class="col-xs-2"></div>
				<div class="col-xs-2"></div>
				<div class="col-xs-2"></div>
				
			</div>
		
		</div>
		
    </body>
    
</html>