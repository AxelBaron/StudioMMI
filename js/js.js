function menu(){
  $('#phoneMenu').slideToggle("slow");
}

function sendMail(){
  console.log('test');
  var nom = $('#nom').val();
  var prenom = $('#prenom').val();
  var email = $('#email').val();
  var societe = $('#societe').val();
  var message = $('#message').val();

  if (nom =='' || prenom =='' || email =='' || message =='') {
    alert('Les renseignements nom, prénom, message et email sont obligatoires.')
  }else{
    $.ajax({
      url : 'sendMail.php',
      type : 'POST',
      dataType:"html",
      data: { nom:nom, prenom:prenom, email:email, societe:societe, message:message},
      success : function(data){
        $('#nom').val('');
        $('#prenom').val('');
        $('#email').val('');
        $('#societe').val('');
        $('#message').val('');
        alert('Merci, votre email a bien été envoyé. Nous vous répondrons dans les plus brefs délais.');
      },
      error : function(){
        alert('Désolé, une erreur est survenue, veuillez contacter l\'IUT de Troyes.');
      }
    });
  }
  return false;
}
