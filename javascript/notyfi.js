function notyfi(text, type, extra_options)
{
	var options = 
	{
		text : text,
		type : type,
		dismissQueue : true,
		layout : "bottomRight",
		theme : 'defaultTheme',
		animation : {
			open : {
				height : 'toggle'
			},
			close : {
				height : 'toggle'
			},
			easing : 'swing',
			speed : 500 // opening & closing animation speed
		},
		timeout : 4000
	}
	
	if(!_(extra_options).isUndefined())
	{
		_(extra_options).each(function(val,key) {
		  options[key] = val;
		});	
	}
	
	noty(options); 
}