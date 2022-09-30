<?php
//import koneksi ke database
function getData($tbl, $id){
    global $wpdb;
    return $wpdb->get_results("SELECT * FROM $tbl ORDER BY $id DESC");
}
function getTypeData($tbl){
    global $wpdb;
    return $wpdb->get_results("SHOW FIELDS FROM $tbl");
}
function insertData($tbl, $data){
    global $wpdb;
    return $wpdb->get_results('CALL SP_DYNAMIC_INSERT("'.$tbl.'", "' . $data . '")');
}
function updateData($tbl, $data, $condition){
    global $wpdb;
    return $wpdb->get_results('CALL SP_DYNAMIC_UPDATE("'.$tbl.'", "' . $data . '", "'. $condition .'")');
}
function deleteData($tbl, $condition){
    global $wpdb;
    echo 'CALL SP_DYNAMIC_DELETE("'.$tbl.'", "' . $condition . '")';
    return $wpdb->get_results('CALL SP_DYNAMIC_DELETE("'.$tbl.'", "' . $condition . '")');
}

if(isset($_POST["submit"])){
    $data = "'',";
    $i=0;
    foreach($_POST as $key=>$value){
        if($i>1 && ($i+1 != count($_POST))) {
            if($i+2 == count($_POST)) $data = $data . "'$value'";
            else $data = $data . "'$value',";
        }
        $i++;
    }
    insertData($_POST["table"], $data);
    echo("<script>location.href = 'http://".$_POST["url"]."'</script>");
}
if(isset($_POST["simpan"])){
    $data = "";
    $id = "";
    $i=0;
    foreach($_POST as $key=>$value){
        if($i == 2){
            $id = " $key = $value ";
        }
        else if($i>2 && ($i+1 != count($_POST))) {
            if($i+2 == count($_POST)) $data = $data . "$key = '$value'";
            else $data = $data . "$key = '$value', ";
        }
        $i++;
    }
    updateData($_POST["table"], $data, $id);
    echo("<script>location.href = 'http://".$_POST["url"]."'</script>");
}
if(isset($_POST["hapus"])){
    $id = "";
    $i=0;
    foreach($_POST as $key=>$value){
        if($i == 2){
            $values = explode(", ", $value);
            for ($j=0; $j < count($values); $j++) { 
                if($values[$j] == "") unset($values[$j]);
            }
            for($j = 0; $j < count($values); $j++){
                $id = "$key = $values[$j]";
                deleteData($_POST["table"], $id);
            }
        }
        $i++;
    }
    echo("<script>location.href = 'http://".$_POST["url"]."'</script>");
}