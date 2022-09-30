<?php
if(is_user_logged_in()){ 
if(wp_get_current_user()->user_login == array_values($attr)[1] || wp_get_current_user()->user_login == "nolderajatfilm"){
$tablename = array_values($attr)[0];
require_once "sqlHandler.php";
$typeData = getTypeData($tablename);
$typeOfData;
for ($i=0; $i < count($typeData); $i++) { 
	foreach($typeData[$i] as $key=>$value){
		if($key == "Type") $typeOfData[] = $value;
	}
}
$id = $typeData[0]->Field;
$result = getData($tablename, $id);
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.css"/> 
<style>
	body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
		min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
	.clearfix{
		display: flex;
	}
	#row-data{
		width: 50px;
	}
    #pagination {
		margin: 0 0 0 auto;
    }
    .hint-text {
		margin: auto;
		margin-left: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox, .custom-checkboxs {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"],
	.custom-checkboxs input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before,
	.custom-checkboxs label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before,
	.custom-checkboxs label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after,
	.custom-checkboxs input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before,
	.custom-checkboxs input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after,
	.custom-checkboxs input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before,
	.custom-checkboxs input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}
</style>
</head>
<body>
    <div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Tabel <b><?php echo $tablename ?></b></h2>
						</div>
						<div id="kolomAksiTabel" class="col-xs-6">
							<a href="#addEmployeeModal" class="btn btn-success" id="insertData" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah data baru <?php echo $tablename ?></span></a>
							<a href="#deleteEmployeeModal" class="btn btn-danger" id="deleteData" data-toggle="modal" onclick="deleteManyData()"><i class="material-icons">&#xE15C;</i> <span>Hapus</span></a>		
							<a class="btn btn-primary" id="exportData" data-toggle="modal" onclick="exportData()"><i class="material-icons">&#xe2c4;</i> <span>Export</span></a>						
						</div>
					</div>
				</div>
				<div class="data-tables datatable-dark">
				<table class="table table-striped table-hover display nowrap" style="width:100%">
					<thead>
						<tr>
							<th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th>
                            <?php foreach($typeData as $key){ ?>
                            <th><?php echo $key->Field; ?></th>
                            <?php } ?>
							<th class="action">Aksi</th>
						</tr>
					</thead>
					<tbody id="data-tabel"></tbody>
				</table>
			</div>
				<div class="clearfix">
					<input type="number" id="row-data" onchange="setTabel(); document.getElementById('row-change').innerHTML = document.getElementById('row-data').value" value = 5 min="1" max="<?php echo count($result) ?>">
					<div class="hint-text">Showing <b id="row-change"><?php if(count($result) < 5) echo count($result); else echo "5" ?></b> out of <b><?php echo count($result) ?></b> entries</div>
					<div id="pagination"></div>
				</div>
			</div>
		</div>        
    </div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?php echo home_url(); ?>/sql-handler/" method="POST">
					<div class="modal-header">						
						<h4 class="modal-title">Tambah data <?php echo $tablename ?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<!-- <div class="form-group"> -->
							<!-- <label>Name</label> -->
							<!-- <input type="text" class="form-control" required> -->
						<!-- </div> -->
						<input type="hidden" value="<?php echo $_SERVER['HTTP_HOST']; echo $_SERVER['REQUEST_URI']; ?>" name="url" hidden>
						<input type="hidden" value="<?php echo $tablename ?>" name="table" hidden>
						<?php
						foreach($typeData as $value){
							if(substr($value->Field, 0, 3) == 'id_') continue;
					?>	<div class="form-group">
							<label style="display: block;"><?php echo $value->Field ?></label>
							<?php if($value->Type == "tinyint(1)"){ ?>
								<ul style="display: flex; padding-left: 0;">
									<li style="margin-right: 10px; list-style: none;"><input type="radio" value="1" name="<?php echo $value->Field ?>"> True</li>
									<li style="list-style: none;"><input type="radio" value="0" name="<?php echo $value->Field ?>" checked> False</li>
								</ul>
							<?php } else if($value->Type == "int(11)"){ ?>
								<input type="number" name="<?php echo $value->Field ?>" class="form-control" required>
							<?php } else if($value->Type == "text"){ ?>
								<textarea name="<?php echo $value->Field ?>" rows="2" style="width: 100%;" required></textarea>
							<?php } else { ?>
								<input type="text" name="<?php echo $value->Field ?>" class="form-control" required>
							<?php } ?>					
						</div> 
					<?php } ?>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Kembali">
						<input type="submit" class="btn btn-success" name="submit" value="Tambah">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?php echo home_url(); ?>/sql-handler/" method="POST">
					<div class="modal-header">						
						<h4 class="modal-title">Ubah data <?php echo $tablename ?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<!-- <div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div> -->
						<input type="hidden" value="<?php echo $_SERVER['HTTP_HOST']; echo $_SERVER['REQUEST_URI']; ?>" name="url" hidden>
						<input type="hidden" value="<?php echo $tablename ?>" name="table" hidden>
						<?php
						// var_dump($data);
						foreach($typeData as $value){
							if(substr($value->Field, 0, 3) == 'id_') {
						?>	<input type="hidden" class="editKolom kolom-edit" name="<?php echo $value->Field ?>" hidden>
						<?php 	
						continue;
							}
					?>	<div class="form-group">
							<label style="display: block;"><?php echo $value->Field ?></label>
							<?php if($value->Type == "tinyint(1)"){ ?>
								<ul style="display: flex; padding-left: 0;">
									<li style="margin-right: 10px; list-style: none;"><input type="radio" value="1" class="edit-radio" name="<?php echo $value->Field ?>"> True</li>
									<li style="list-style: none;"><input type="radio" value="0" class="edit-radio" name="<?php echo $value->Field ?>"> False</li>
								</ul>
							<?php } else if($value->Type == "int(11)"){ ?>
								<input type="number" name="<?php echo $value->Field ?>" class="form-control kolom-edit" required>
							<?php } else if($value->Type == "text"){ ?>
								<textarea name="<?php echo $value->Field ?>" rows="2" style="width: 100%;" class="form-control kolom-edit" required></textarea>
							<?php } else { ?>
								<input type="text" name="<?php echo $value->Field ?>" class="form-control kolom-edit" required>
							<?php } ?>		
						</div> 
					<?php 
						}
				 	?>	
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Kembali">
						<input type="submit" class="btn btn-info" name="simpan" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?php echo home_url(); ?>/sql-handler/" method="POST">
					<div class="modal-header">						
						<h4 class="modal-title">Hapus data <?php echo $tablename ?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Apakah kamu yakin untuk menghapusnya?</p>
						<p class="text-warning"><small>Data yang telah dihapus tidak dapat dikembalikan.</small></p>
					</div>
					<input type="hidden" value="<?php echo $_SERVER['HTTP_HOST']; echo $_SERVER['REQUEST_URI']; ?>" name="url" hidden>
					<input type="hidden" value="<?php echo $tablename ?>" name="table" hidden>
					<input type="hidden" name="<?php echo $id ?>" class="idDelete" hidden>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Kembali">
						<input type="submit" class="btn btn-danger" name="hapus" value="Hapus">
					</div>
				</form>
			</div>
		</div>
	</div>
<script>
	function tabelExport(){
		$('#mauexport').DataTable( {
			dom: 'Bfrtip',
			buttons: [
				'copy','csv','excel', 'pdf', 'print'
			]
		} );
	}
	let data = [<?php for ($i=0; $i < count($result); $i++) { 
		echo "{";
		foreach($result[$i] as $key=>$value){
			echo $key.': "'.$value.'", ';
		}
		echo "},"; 
	} ?>];
</script>
<script>
	function checkBox(){
            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function(){
                if(this.checked){
                    checkbox.each(function(){
                        this.checked = true;                        
                    });
                } else{
                    checkbox.each(function(){
                        this.checked = false;                        
                    });
                } 
            });
            checkbox.click(function(){
                if(!this.checked){
                    $("#selectAll").prop("checked", false);
                }
            });
	}
        $(document).ready(function(){
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();
            checkBox();
        });
</script>  

<script>
	setTabel();
    function setTabel() {
        let container = $('#pagination');
		container.html('');
        container.pagination({
            dataSource: data,
            pageSize: document.getElementById("row-data").value,
            callback: function (data, pagination) {
                var dataHtml = '';
                $.each(data, function (index, item) {
					dataHtml += '<tr>';
					dataHtml += '<td><span class="custom-checkboxs"><input type="checkbox" id="checkbox1" class="rowCheck" name="options[]" value="'+item.<?php echo $typeData[0]->Field?>+'"><label for="checkbox1"></label></span></td>';
					<?php 
					foreach ($typeData as $value) {
						echo "dataHtml += '<td>'+item.$value->Field+'</td>';";
					}
					?>
					dataHtml += '<td><a href="#editEmployeeModal" onclick="setIdUpdate('+item.<?php echo $typeData[0]->Field ?>+')" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a href="#deleteEmployeeModal" onclick="setIdDelete('+item.<?php echo $typeData[0]->Field ?>+')" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>'
					dataHtml += '</tr>';
				});
                $("#data-tabel").html(dataHtml);
            }
        })
		checkBox();
    }
</script>

<script>
	function setIdUpdate(id){
		let info = [];
		for (let i = 0; i < data.length; i++) {
			if(data[i]["<?php echo $typeData[0]->Field ?>"] == id){
				info = data[i];
			}
		}
		let type = [<?php 
			for ($i=0; $i < count($typeData); $i++) {
				if($i+1 == count($typeData)) echo "'".$typeData[$i]->Type."'"; 
				else echo "'".$typeData[$i]->Type."', ";
			}
			?>];
		let key = [<?php 
			for ($i=0; $i < count($typeData); $i++) {
				if($i+1 == count($typeData)) echo "'".$typeData[$i]->Field."'"; 
				else echo "'".$typeData[$i]->Field."', ";
			}
			?>];
		let kolom = document.getElementById("editEmployeeModal").getElementsByClassName("kolom-edit");
		let kolomLength = kolom.length;
		if(document.getElementsByClassName("edit-radio").length > 0) kolomLength += (document.getElementsByClassName("edit-radio").length)/2;
		let j =0; let k = 1;
		for (let i = 0; i < kolomLength; i++) {
          console.log(type[i] + " " + info[key[i]]);
			if(type[i] == "tinyint(1)"){
				if(info[key[i]] == 1){
					document.getElementsByClassName("edit-radio")[(k*2)-2].checked = true;
				}else{
					document.getElementsByClassName("edit-radio")[(k*2)-1].checked = true;
				}
              k++;
			}else{
              kolom[j].value = info[key[i]];
			  j++;
            }
		}
	}
	function setIdDelete(id){
		let info = [];
		for (let i = 0; i < data.length; i++) {
			if(data[i]["<?php echo $typeData[0]->Field ?>"] == id){
				info = data[i];
			}
		}
		let key = [<?php 
			for ($i=0; $i < count($typeData); $i++) {
				if($i+1 == count($typeData)) echo "'".$typeData[$i]->Field."'"; 
				else echo "'".$typeData[$i]->Field."', ";
			}
			?>];
		let kolom = document.getElementById("deleteEmployeeModal").getElementsByClassName("idDelete");
		kolom[0].value = info[key[0]];
	}
	function deleteManyData(){
		let kolom = document.getElementById("deleteEmployeeModal").getElementsByClassName("idDelete");
		kolom[0].value = "";
		let rowCheck = document.getElementsByClassName("custom-checkboxs");
		for (let j = 0; j < rowCheck.length; j++) {
			let rowCheckBox = rowCheck[j].getElementsByClassName("rowCheck")[0];
			if(rowCheckBox.checked) {
				kolom[0].value += rowCheckBox.value + ", ";
			}
		}
	}
	function exportData(){
		let tabel = document.querySelector(".table");
		let dataTabel = "";
		dataTabel += "<thead><tr>";
		<?php foreach($typeData as $key){ ?>
		dataTabel += "<th><?php echo $key->Field ?></th>";
        <?php } ?>
		dataTabel += "</tr></thead><tbody>";
		for(let i = 0; i < data.length; i++){
			dataTabel += '<tr>';
			<?php 
			foreach ($typeData as $value) {
				echo "dataTabel += '<td>'+data[i].$value->Field+'</td>';";
			}
			?>
			dataTabel += '</tr>';
		}
		dataTabel += "</tbody>";
		tabel.innerHTML = dataTabel;
		tabel.setAttribute("id", "mauexport");
		document.querySelector(".clearfix").innerHTML = "";
		document.getElementById("kolomAksiTabel").innerHTML = "<a class='btn btn-primary' data-toggle='modal' onclick='backData()'> <span>Kembali</span></a>";
		tabelExport();
	}
	function backData(){
		location.href = 'http://<?php echo $_SERVER['HTTP_HOST']; echo $_SERVER['REQUEST_URI']; ?>'
	}
	pageReload();
	function pageReload(){
		let pagination = document.getElementsByClassName("paginationjs-page");
		for (let i = 0; i < pagination.length; i++) {
			pagination[i].onclick = function(){
				setTimeout(pageReload, 250);
			};
			checkBox();
		}
	}
</script> 

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>
<?php 
  }else {
  	echo("<script>location.href = '".home_url()."'</script>");
  }
} else {
 	echo("<script>location.href = '".home_url()."/wp-admin/'</script>");
 }
?>