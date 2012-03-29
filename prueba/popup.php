<!doctype html>


<head>

		<link href="attention_box.css" media="screen" rel="stylesheet" />
		<script src="jquery-1.4.2.min.js"></script>
		<script src="jquery-ui-1.8.1.custom.min.js"></script>
		<script src="attention_box-min.js"></script>
		<script>
	jQuery(document).ready(function()
			{
	
				jQuery("#message12").click(function()
				{
					AttentionBox.showMessage("This message is handled using a callback.", 
					{ 
						modal   : true,
						inputs : 
						[
							{caption: "Fullname", value: "Denon Studio", required: true}, 
							{caption: "Age", value: "34", required: true}, 
							{caption: "How did you hear about us?", value: "Newspaper", required: true}
						],
						callback: function(action, inputs)
						{
							var message = "";

							if (action != "CANCELLED")
							{
								message = "User inputs were:<br/><br/>";							
								for (var i = 0; i < inputs.length; i++)
									message += inputs[i].caption + " <strong>" + inputs[i].value + "</strong><br/>";
							}
							else
							{
								message = "User canceled";							
							}

							AttentionBox.showMessage(message); 
						}
					})
				});
			});

		</script>


<style>
			body { margin: 0px; padding: 0px; background: #D5E9ED}
			h1, h2 {font-family: "Helvetica Neue",Arial,Helvetica,sans-serif; font-weight: normal; color: #3C3D3D; font-size: 30pt;}
			h2 { font-size: 75%; font-size: 13pt; }
			p {font-family: "Helvetica Neue",Arial,Helvetica,sans-serif; }
			#wrap { margin: 0px auto; width: 700px; background: #FFF; padding: 40px; 20px 60px 20px}
			.demos { margin-top: 20px; border-top: 1px dotted #AAA; padding:10px 0px; overflow: hidden}
			.demos pre {width:660px; color: #000; background: #96C0E6; overflow: auto; padding: 20px; }
			.demos button { float: right; background: #C2CD22; color: #FFF; padding: 6px; border: none; -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; }
		</style>
		
		<!--[if IE 6]>
		<style>
			.demos button { float: none; }		
		</style>
		<![endif]-->


</head>
<body>



<div class="demos">
				<h2>12. Message with handler callback</h2>
				<pre>
AttentionBox.showMessage("This message is handled using a callback.", 
{ 
    modal  : true,
    inputs : 
    [
        {caption: "Fullname", value: "Denon Studio", required: true}, 
        {caption: "Age", value: "34", required: true}, 
        {caption: "How did you hear about us?", value: "Newspaper", required: true}
    ],
    callback: function(action, inputs)
    {
        var message = "";

        if (action != "CANCELLED")
        {
            message = "User inputs were:";							
            for (var i = 0; i < inputs.length; i++)
                message += inputs[i].caption + " &lt;strong&gt;" + inputs[i].value + "&lt;/strong&gt;&lt;br/&gt;";
        }
        else
        {
            message = "User canceled";							
        }

        AttentionBox.showMessage(message); 
     }
});
				</pre>
				<button id="message12">Show Message</button>
			</div>
		</div>


</body>


</html>