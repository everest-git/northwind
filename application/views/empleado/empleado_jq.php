<script>
	$(document).ready(function() {
		cargar_empleados();

		function cargar_empleados()
		{
			var parametros = { catalogo: 'Employees' }; // Nombre de la tabla
			$.ajax({
				url: base_url + 'catalogo/get_catalogo',
		        type: 'post',
		        dataType: 'json',
		        data: parametros,
		        success: function(data){
		        	$('#empleados').DataTable({
				        "data": data,
				        "columns": [
				            { "data": "EmployeeID" },
				            { "data": "LastName" },
				            { "data": "FirstName" },
				            { "data": "Title" },
				            { "data": "TitleOfCourtesy" },
				            { "data": "BirthDate" },
				            { "data": "HireDate" }
				        ]
		    		});
		        }
		    });
		}
		
	});				
</script>