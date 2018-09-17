<script>
	$(document).ready(function() {
		//$('#productos').DataTable();
		cargar_productos();

		function cargar_productos()
		{
			var parametros = { catalogo: 'Products' }; // Nombre de la tabla
			$.ajax({
				url: base_url + 'catalogo/get_catalogo',
		        type: 'post',
		        dataType: 'json',
		        data: parametros,
		        success: function(data){
		        	$('#productos').DataTable({
				        "data": data,
				        "columns": 
				        [
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
		}
	});				
</script>