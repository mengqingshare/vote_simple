<!doctype html>
<html >
 <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta name="Author" content=""/>
	<meta name="Keywords" content=""/>
	<meta name="Description" content=""/>
	<meta name="apple-mobile-web-app-capable" content="no"/>
  <title>投票结果</title>
  <style>
  body{margin:0;font-family:微软雅黑;background-color:#eeeeee;}
  .divbody{text-align:center;}
  .banner{background-color:#006666;height:100px;text-align:center;}
  .banner_text{margin-left:auto;margin-right:auto;}
  .banner_vote{text-align:left;font-size:2em;}
  .vote_result{background-color:#0099cc;margin-left:auto;margin-right:auto;margin-top:20px;}
  .bargraph{min-width:700px;height:560px}
  @media (min-width:1200px){
			.banner_text{width:1200px;}
			.vote_result{width:1200px;height:100%;}
			.bargraph{min-width:700px;height:560px}
  }
  @media (min-width:960px) and (max-width:1199px){
 			.banner_text{width:960px;}
			.vote_result{width:960px;height:100%;}
			.bargraph{min-width:560px;height:560px}
  }
 @media (min-width:721px) and (max-width:959px){
			.banner_text{width:720px;}
			.vote_result{width:720px;height:100%;}
			.bargraph{min-width:320px;height:560px}
 }
 @media (max-width:720px){
 			.banner_text{width:auto;}
			.vote_result{width:100%;height:100%;}
			.bargraph{min-width:320px;height:700px}
 }
  </style>
<script type="text/javascript" src="<?= base_url()?>source/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="<?= base_url()?>source/js/highcharts.js"></script>
  <script type="text/javascript" src="<?= base_url()?>source/js/exporting.js"></script>
  <script>
$(function () {                                                                
    $('#container').highcharts({                                           
        chart: {                                                           
            type: 'bar'                                                    
        },                                                                 
        title: {                                                           
            text: '投票结果',
			style:{
			fontSize:'30px',
			fontWight:'bold'
			}
        },                                                                                                                                
        xAxis: {                                                           
            categories: <?= $name?>,
            title: {                                                       
                text: null                                                 
            }                                                              
        },                                                                 
        yAxis: {                                                           
            min: 0,                                                        
            title: {                                                       
                text: '票数',                             
                align: 'high'                                              
            },                                                             
            labels: {                                                      
                overflow: 'justify'                                        
            }                                                              
        },                                                                 
        tooltip: {                                                         
            enabled:false                                      
        },            
		//右上角下载
        exporting:{
         enabled:false
       },
        plotOptions: {                                                     
            bar: {                                                         
                dataLabels: {                                              
                    enabled: true                                          
                }                                                          
            }                                                              
        },                                                                                                                 
        credits: {                                                         
            enabled: false                                                 
        },                                                                 
        series: [{                                                         
            name: '投票数据',                                             
            data: <?= $vote_num?>,                          
        }, ]                                                                 
    });                                                                    
});                                                                        
  </script>

 </head>
 <body>
  <div class="divbody">
	  <div class="banner">
	  		  <div class="banner_text">
	  		  <div class="banner_vote"></div>
	  		  </div>
	  </div> 
	  <div class="vote_result">
		  <div class="bargraph" id="container">
		  </div>
	  </div>
	  </div>
 </body>
</html>
