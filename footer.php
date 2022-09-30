    <div id="copyright">
        <p>Copyright &copy; 2022 IT-NolDerajatFilm</p>
    </div>
<script>   
	document.getElementById("bar").className = "timbul";
	function bar(){
      document.getElementById("menu-home").classList.toggle("muncul");
	}
    function submenu(idLi){
      document.getElementById(`menu-drop-${idLi}`).classList.toggle("show");
      document.getElementById(`profil-menu-${idLi}`).classList.toggle("show");
    }
</script>
</body>
</html>
<?php wp_footer(); ?>