function copyToClipboard() {
    // Sélectionnez la div dont vous souhaitez copier le contenu
    var content = document.getElementById('contentToCopy').innerText;

    // Utilisez l'API Clipboard pour copier le texte
    navigator.clipboard.writeText(content).then(function() {
        alert('Contenu copié dans le presse-papier');
    }, function(err) {
        console.error('Erreur lors de la copie : ', err);
    });
}