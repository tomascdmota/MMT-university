var dataReaload = document.querySelectorAll("[data-reload]");



var language = {
  'eng' : {
    'home' : 'Home',
    'operations' : 'Operate',
    'services' : 'Services',
    'depoimentos' : 'Depositions',
    'comecando' : 'Get started',
    'contacts' : 'Contacts'
  },

  'pt' : {
    'home' : 'Home',
    'operations' : 'Onde operamos',
    'services' : 'Serviços',
    'depoimentos' : 'Depoimentos',
    'comecando' : 'Começando',
    'contacts' : 'Contacte-nos'
  }


};

if(window.location.hash) {
  if (window.location.hash === "#pt") {

  }
}

for(i =; i<= dataReaload.length; i++){
  dataReaload[i].onClick = function(){
    location.reload(true);
  }

}
