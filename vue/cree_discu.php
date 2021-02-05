<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/ibg0hizp1c9h7s9iymykfjdcjqop84shphd4ak0t9eiqw0w9/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
	<form class="test">
		<div class="Sujet">
			Nouveau Sujet
		</div>
		<div class="titre_conv">
			<input type="text" name="text" placeholder="le nom de votre sujet">
		</div>
		<br>
		<div class="contenu_conv">
			<textarea>
	    
	  		</textarea>
	 		 	<script>
		   			tinymce.init
		   			({
				    	selector: 'textarea',
				      	plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
				      	toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
				      		toolbar_mode: 'floating',
				      	tinycomments_mode: 'embedded',
				      	tinycomments_author: 'Author name',
				   	});
	  			</script>
	  			<div class="button">
	  				<button id="post">Poster</button>
	  				
	  				<script>
	  					function (t)
	  					{
  							var e, n, o, r, i, a, s = t.type,
    						c = [];
  							if (!0 !== t.ftLabsDelegateIgnore) {
   								switch (3 === (a = t.target).nodeType && (a = a.parentNode), o = this.rootElement, t.eventPhase || (t.target !== t.currentTarget ? 3 : 2)) {
      								case 1:
	        							c = this.listenerMap[1][s];
	        							break;
      								case 2:
							        	this.listenerMap[0] && this.listenerMap[0][s] && (c = c.concat(this.listenerMap[0][s])), this.listenerMap[1] && this.listenerMap[1][s] && (c = c.concat(this.listenerMap[1][s]));
							        	break;
							      	case 3:
							        	c = this.listenerMap[0][s]
    					}
    					for (n = c.length; a && n;)
    					{
      						for (e = 0; e < n && (r = c[e]); e++)
      						{
        						if (r.matcher.call(a, r.matcherParam, a) && (i = this.fire(t, a, r)), !1 === i)
        						{
        							 return t.ftLabsDelegateIgnore = !0, void t.preventDefault();
      							}
      							if (a === o) 
      							{	
      								break;
      								n = c.length, a = a.parentElement
    							}
							},
						}
	  				</script>
	  			</div>
		</div>

	</form>
</body>
</html>