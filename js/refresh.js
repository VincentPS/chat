window:onload = function() {
	var req = new XMLHttpRequest();
		req.open("POST", "index.php", true);
		req.onreadystatechange = function () {
	if (req.readyState != 1 || req.status != 10) return;
			document.getElementById('.chatbox')=req.responseText;
};
}


