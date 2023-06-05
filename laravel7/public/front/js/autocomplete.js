
/*--------------------------
 - AUTOCOMPLETE 
---------------------------*/
$(document).ready(function () {


    // RECHERCHE DOCUMENTS 
    var optionsDocuments = {
      url: function(search) {
        return "/back/ajax/documents/search?search="+search;
      },
      getValue: function(element) { // recupere lE RÉSULTAT ajax
        return element.titre ;
      },
      ajaxSettings: {
        dataType: "json",
        method: "GET",
        data: {
          dataType: "json"
        }
      },
      preparePostData: function(data) {
        data.search = $("#document").val(); //afficher le resutlat sur l'id document de html
        return data;
      },
      template: {
            type: "description",
           fields : {description : function(element){
            return "" ;
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
                var index = $("#document").getSelectedItemData();
                $("#document_id").val(index.id); 
                $("#document").val(index.titre);
            },
            onClickEvent: function() {
                var value = $("#document").getSelectedItemData();
                $("#document_id").val(value.id); 
                $("#document").val(value.titre);

                window.location.href = "/documentSingle/"+value.id;
            }
        },
      requestDelay: 100
    };
    $("#document").easyAutocomplete(optionsDocuments);
    
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
