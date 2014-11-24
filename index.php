<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<body>

<table style="width:100%">
  <tr>
    <td>Gear 1</td>	
    <td><button type="button" id="1" class="btn btn-default">On</button></td>
  </tr>
  <tr>
    <td>Gear 2</td>
    <td><button type="button"  id="2" class="btn btn-default">On</button></td>
  </tr>
  <tr>
    <td>Gear 3</td>
    <td><button type="button"  id="3" class="btn btn-default">On</button></td>
  </tr>
   <tr>
    <td>Gear 4</td>
    <td><button type="button"  id="4" class="btn btn-default">On</button></td>
  </tr>
  <span></span>
</table>





             
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <script type="text/javascript">

      $('button').click(function  () {
      	if ($(this).html()=='On') {
      		$(this).html('Off');
      	$(this).removeClass('btn-default');
      	$(this).addClass('btn-primary');
        $url = "txt.php";
		
		txt = '';
		$.each( $('button'), function(i, nappula) {
			html = $(nappula).html();
			id = $(nappula).attr('id');
        txt += id + ': ' + html + '\r\n';

});
        
        console.log(txt);
        $.post("txt.php",{suggest:txt},function(result){
     // $("span").html(result);

    });
      	
      	}
      	 else{
      	 	$(this).html('On');
      	$(this).removeClass('btn-primary');
      	$(this).addClass('btn-default');
        $url = "txt.php";
        	txt = '';
		$.each( $('button'), function(i, nappula) {
			html = $(nappula).html();
			id = $(nappula).attr('id');
        txt += id + ': ' + html + '\r\n';
        
		});
        console.log(txt);
        $.post("txt.php",{suggest:txt},function(result){
          
     // $("span").html(result);
    });
        
      	 };
      	
      })

      </script>
</body>