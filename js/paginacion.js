$(document).ready(function() {
    var tabla= document.querySelector("#tabla");

       var dataTable = new DataTable(tabla,{
           perPage:5,
           perPageSelect:[5,10,15,20]
       });  
} );
