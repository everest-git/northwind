$(document).ready(function() {
	$('#productos').DataTable();

	$.ajax({
		url: base_url + '/producto/get_productos',
        type: 'POST',
        dataType: 'json',
        success: function(data){
        	$('#example').DataTable({
		        "data": data,
		        "columns": [
		            { "data": "ProductID" },
		            { "data": "ProductName" },
		            { "data": "SupplierID" },
		            { "data": "CategoryID" },
		            { "data": "QuantityPerUnit" },
		            { "data": "UnitPrice" },
		            { "data": "UnitsInStock" },
		            { "data": "UnitsOnOrder" },
		            { "data": "ReorderLevel" },
		            { "data": "Discontinued" }
		        ]
    		});
        }
    });
});				