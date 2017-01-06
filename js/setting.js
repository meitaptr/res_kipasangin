var $jnoc = jQuery.noConflict();
$jnoc(document).ready(function(){
	$jnoc('#num').attr({
		"max":3,
		"min":0
	})
	$jnoc("input[name$='control']").iCheck({
		checkboxClass:'icheckbox_square-yellow',
		radioClass:'iradio_square-yellow',
		increaseArea:'20%'
	})
	$jnoc("input[name$='control']").on('ifClicked', function(event){
		var v = this.value;
		if(v == "m"){
			$jnoc('#i').show();
		} if(v == "a") {
			$jnoc('#i').hide();
			$jnoc("input[type='range']").val();
		}
	})
	$jnoc("input[type='range']").rangeslider({
		polyfill:false,
		onSlide: function(position,value){
			$jnoc('#n').text(value);
			if(value=='0'){
				$jnoc('#g').attr('src','images/00.png');
			}
			if(value=='1'){
				$jnoc('#g').attr('src','images/01.png');
			}
			if(value=='2'){
				$jnoc('#g').attr('src','images/02.png');
			}
			if(value=='3'){
				$jnoc('#g').attr('src','images/03.png');
			}
		}
	});
})