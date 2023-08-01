function isValid(pForm) {

	const usernameMsg = document.getElementById("username_msg");
	const passwordMsg = document.getElementById("password_msg");

	usernameMsg.innerHTML = "";
	passwordMsg.innerHTML = "";

	let flag = true;
	//const pattern =  /^[a-zA-Z_\-.]*$/;

	if (pForm.username.value === "") {
		usernameMsg.innerHTML = "Username cannot be empty (JS)";
		flag = false;
	}
	/*else {
		if (!pattern.test(pForm.username.value)) {
			usernameMsg.innerHTML = "Username is not in correct format (JS)";
			flag = false;
		}
	}*/
	if (pForm.password.value === "") {
		passwordMsg.innerHTML = "Password cannot be empty (JS)";
		flag = false;
	}	

	if (!flag) return false;
	return true;

}