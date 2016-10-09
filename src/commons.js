function injectTemplate(templateName){
	$.ajax({
		url: 'templates/'+templateName+'.html',
		method: 'GET',
		success: function(content) {
			document.getElementById(templateName).innerHTML = content;
		}
	});
}

injectTemplate('header');
injectTemplate('bottom');