
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
   
});
