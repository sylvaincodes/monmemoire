
/*--------------------------
 - AUTOCOMPLETE 
---------------------------*/
$(document).ready(function () {


    // RECHERCHE DOCUMENTS 
    var optionsVar = {
      url: function(search) {
        return "{{ route('ajax.documents') }}?search="+search;
      },
      getValue: function(element) { // recupere lE RÉSULTAT ajax
        return element.titre;
      },
      ajaxSettings: {
        dataType: "json",
        method: "GET",
        data: {
          dataType: "json"
        }
      },
      preparePostData: function(data) {
        data.search = $("#variable").val(); //attribuER le résultat À l'element variable
        return data;
      },
      template: {
            type: "description",
           fields : {description : function(element){
            return element.libelle
           }}
        },  
      theme: "round",
      highlightPhrase: true,
      list: {
            maxNumberOfElements: 10,
            match: {
                enabled: false
            },
            showAnimation: {
                type: "fade", 
                time: 400,
                callback: function() {}
            },
            hideAnimation: {
                type: "hide", 
                time: 400,
                callback: function() {}
            },
            onSelectItemEvent: function() {
                var index = $("#variable").getSelectedItemData();
                $("#idvariable").val(index.idvariable); 
                $("#variable").val(index.libelle);
            },
            onClickEvent: function() {
                var value = $("#variable").getSelectedItemData();
                 $("#idvariable").val(value.idvariable); 
            }
        },
      requestDelay: 100
    };
    $("#variable").easyAutocomplete(optionsVar);
    $(".variable").easyAutocomplete(optionsVar);


    
    // RECHERCHE AUTEURS 
    var optionsUsers = {
      url: function(search) {
        return "/back/ajax/users/search?search="+search;
      },
      getValue: function(element) { // recupere lE RÉSULTAT ajax
        return element.nom +' '+ element.prenom;
      },
      ajaxSettings: {
        dataType: "json",
        method: "GET",
        data: {
          dataType: "json"
        }
      },
      preparePostData: function(data) {
        data.search = $("#user").val(); //afficher le resutlat sur l'id user de html
        return data;
      },
      template: {
            type: "description",
           fields : {description : function(element){
            return element.nom +' '+ element.prenom;
           }}
        },  
      theme: "round",
      highlightPhrase: true,
      list: {
            maxNumberOfElements: 10,
            match: {
                enabled: false
            },
            showAnimation: {
                type: "fade", 
                time: 400,
                callback: function() {}
            },
            hideAnimation: {
                type: "hide", 
                time: 400,
                callback: function() {}
            },
            onSelectItemEvent: function() {
                var index = $("#user").getSelectedItemData();
                console.log(index.nom);
                $("#user_id").val(index.id); 
                $("#user").val(index.nom+' '+index.prenom);
            },
            onClickEvent: function() {
                var value = $("#user").getSelectedItemData();
                $("#user_id").val(value.id); 
                $("#user").val(value.nom+' '+value.prenom);
            }
        },
      requestDelay: 100
    };
    $("#user").easyAutocomplete(optionsUsers);
    $(".user").easyAutocomplete(optionsUsers);
    
    // RECHERCHE FILIERES 
    var optionsFilieres = {
      url: function(search) {
        return "/back/ajax/filieres/search?search="+search;
      },
      getValue: function(element) { // recupere lE RÉSULTAT ajax
        return element.libelle ;
      },
      ajaxSettings: {
        dataType: "json",
        method: "GET",
        data: {
          dataType: "json"
        }
      },
      preparePostData: function(data) {
        data.search = $("#filiere").val(); //afficher le resutlat sur l'id filiere de html
        return data;
      },
      template: {
            type: "description",
           fields : {description : function(element){
            return element.libelle ;
           }}
        },  
      theme: "round",
      highlightPhrase: true,
      list: {
            maxNumberOfElements: 10,
            match: {
                enabled: false
            },
            showAnimation: {
                type: "fade", 
                time: 400,
                callback: function() {}
            },
            hideAnimation: {
                type: "hide", 
                time: 400,
                callback: function() {}
            },
            onSelectItemEvent: function() {
                var index = $("#filiere").getSelectedItemData();
                console.log(index.nom);
                $("#filiere_id").val(index.id); 
                $("#filiere").val(index.libelle);
            },
            onClickEvent: function() {
                var value = $("#filiere").getSelectedItemData();
                $("#filiere_id").val(value.id); 
                $("#filiere").val(value.libelle);
            }
        },
      requestDelay: 100
    };
    $("#filiere").easyAutocomplete(optionsFilieres);
   
});
