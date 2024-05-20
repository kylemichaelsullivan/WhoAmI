jQuery(document).ready(($) => {
	$('#wpadminbar').removeClass('nojq');

	$('#to-top').on('click', (e) => {
		e.preventDefault();
		document.body.scrollTop = 0; // for Safari
		window.scrollTo({ top: 0, behavior: 'smooth' });
	});
});
