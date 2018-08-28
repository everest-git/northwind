$(document).ready(function() {
	//$('#productos').DataTable();
	alert('entre al script');
	$.ajax({
		url: base_url + 'index.php/producto/get_productos',
        type: 'get',
        dataType: 'json',
        success: function(data){
        	$('#productos').DataTable({
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