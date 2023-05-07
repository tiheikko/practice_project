<script type="text/javascript">
		
	function seeMore(node) {
		let selector = `h3.${node.className} ~ table`;

		let elem = document.querySelector(selector);

		if (elem.className.includes('show')) {
			elem.classList.remove('show');
		} else elem.classList.add('show');
	}

</script>