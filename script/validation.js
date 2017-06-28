$(document).ready(function() 
{	

    $.validator.addMethod('mdp',function(value,element)
	{
 		return this.optional(element) || /([A-Za-z0-9]){5,10}/.test(value);
 	},
	'5 à 10 caractères ne contenant aucun caractère spécial');
	
	$.validator.addMethod('string',function(value,element)
		{
			return this.optional(element)|| /[A-Z,a-z,-]{1,}$/.test(value);}
			, 'Seulement des lettres');
			
	$.validator.addMethod('fic',function(value,element)
		{
			return this.optional(element)|| /([A-Za-z0-9_\-])+\.(gif|jpg|jpeg|tiff|png)$/.test(value);}
			, 'Seulement des Images de types gif, jpg, jpeg,t iff ou png');
			
	$.validator.addMethod('num',function(value,element)
		{
			return this.optional(element)|| /[0-9]{1,}(\.)[0-9]{0,2}/.test(value);}
			, 'Format imposé  99.99 ');
	
	
	
	//exemple de validation de formulaire
	
	/* $('#form_ajout_usr').validate(
	{
		rules:
		{
			nom:
			{
				required:true,
				minlength:2,
				string:true
			},
			pseudo:
			{
				required:true,
				minlength:2
			},
			pswd:
			{
				required:true,
				mdp:true	
			},
			conf_pswd:
			{
				required:true,
				equalTo:'#pswd'
			}
			
		}
	}); */

	//exemple de verification xml
	/*$('#modif_usr').on('change',function(){
		var value=$('#modif_usr option:selected').text();
		//console.log("Messages raffraichis");
		$.get('script/modif_supr.php',
			{
				action:'modif_usr',
				nom:value
			},
			function(xml)
			{
                var pseudo=$(xml).find('pseudo').text();
           		if(pseudo=='vide')
				{
					$('#pseudo_modif_modif').val('');
				}
				else
				{
					$('#pseudo_modif_modif').val(pseudo);
				}
			}
				
		);
	});*/
	
	$('identification').submit(function(){
		$.get(function(xml)
		
		
		
		
		);

	});
	
});
	
