window.onbeforeunload = function(e) {
    var dialogText = 'Bist du dir sicher die Seite verlassen zu wollen?';
    e.returnValue = dialogText;
    return dialogText;
};