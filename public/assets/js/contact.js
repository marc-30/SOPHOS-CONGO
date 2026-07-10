/*
*
* Contact JS
* @ThemeEaster
* Gère l'envoi du formulaire de contact en AJAX (sans rechargement de page)
* et l'affichage des messages de succès/erreur retournés par le serveur.
*/
$(function() {
    // Récupère le formulaire de contact.
    var form = $('#ajax_contact');

    // Récupère la div destinée à afficher les messages de retour (succès/erreur).
    var formMessages = $('#form-messages');

    // Met en place l'écouteur d'événement sur la soumission du formulaire de contact.
	$(form).submit(function(event) {
		// Empêche le navigateur de soumettre le formulaire de façon classique (rechargement).
		event.preventDefault();

		// Sérialise les données du formulaire (transforme les champs en chaîne de requête).
		var formData = $(form).serialize();
		// Envoie les données du formulaire via une requête AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Cas de succès : s'assure que la div des messages porte la classe 'success'.
			$(formMessages).removeClass('alert-danger');
			$(formMessages).addClass('alert-success');

			// Affiche le message de succès renvoyé par le serveur.
			$(formMessages).text(response);

			// Réinitialise les champs du formulaire.
			$('#fullname').val('');
			$('#email').val('');
			$('#phone').val('');
			$('#message').val('');
		})
		.fail(function(data) {
			// Cas d'échec : s'assure que la div des messages porte la classe 'error'.
			$(formMessages).removeClass('alert-success');
			$(formMessages).addClass('alert-danger');

			// Affiche le message d'erreur renvoyé par le serveur (ou un message générique).
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});

	});

});