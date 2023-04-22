<script>
	function selectCategory(node) {
		//if "all" was chosen
		if (node.className == "all" || node.className == "all active"){
			document.querySelectorAll('.categories span').forEach(e => e.classList.remove('active')); //removing 'active' class from every category

			//adding 'active' class to every image block so we'll be able to see every image
			document.querySelectorAll('.pics div').forEach(e => e.classList.add('active'));
			node.classList.add('active'); //adding 'active' class to needed category

		} else {
			document.querySelectorAll('.categories span').forEach(e => e.classList.remove('active')); //removing 'active' class from every category
			//removing 'active' class from every image
			document.querySelectorAll('.pics div').forEach(e => e.classList.remove('active'));

			//adding 'active' class to every needed image
			document.querySelectorAll('.pics div').forEach(e => {
			if (e.className == node.className) e.classList.add('active');
			});
			node.classList.add('active'); //adding 'active' class to needed category
		}
	}
</script>
