function isValidreg(pForm) {

	const nameMsg = document.getElementById("name_msg");
	const emailMsg = document.getElementById("email_msg");
	const usernameMsg = document.getElementById("username_msg");
	const passwordMsg = document.getElementById("password_msg");
	const cnfrmMsg = document.getElementById("cnfrmPass_msg");
	const genderMsg = document.getElementById("gender_msg");
	const dobMsg = document.getElementById("dob_msg");
	
	nameMsg.innerHTML = "";
	emailMsg.innerHTML = "";
	usernameMsg.innerHTML = "";
	passwordMsg.innerHTML = "";
	cnfrmMsg.innerHTML = "";
	genderMsg.innerHTML = "";
	dobMsg.innerHTML = "";

	let flag = true;
	const patternname =  /^[a-zA-Z_\-. ]*$/  ;
	const patternemail =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	const patternusername =  /^[0-9a-zA-Z_\-.]*$/;
	const patternpassword =  /^(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[%$#@]).+$/;
	const patterncnfrmpassword =  /^(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[%$#@]).+$/;


	if (pForm.name.value === "") {
		nameMsg.innerHTML = "Name cannot be empty (JS)";
		flag = false;
	}
	else {
		if (!patternname.test(pForm.name.value)) {
			nameMsg.innerHTML = "Name is not in correct format (JS)";
			flag = false;
		}
	}

	if (pForm.email.value === "") {
		emailMsg.innerHTML = "Email cannot be empty (JS)";
		flag = false;
	}
	else {
		if (!patternemail.test(pForm.email.value)) {
			emailMsg.innerHTML = "Email is not in correct format (JS)";
			flag = false;
		}
	}


	if (pForm.username.value === "") {
		usernameMsg.innerHTML = "Username cannot be empty (JS)";
		flag = false;
	}
	else {
		if (!pattern.test(pForm.username.value)) {
			usernameMsg.innerHTML = "Username is not in correct format (JS)";
			flag = false;
		}
	}

	if (pForm.password.value === "") {
		passwordMsg.innerHTML = "Password cannot be empty (JS)";
		flag = false;
	}
	else {
		if (!patternpassword.test(pForm.password.value)) {
			passwordMsg.innerHTML = "Password is not in correct format (JS)";
			flag = false;
		}
	}


	if (pForm.cnfrmpassword.value === "") {
		cnfrmMsg.innerHTML = "Confirm Password cannot be empty (JS)";
		flag = false;
	}
	else {
		if (!patterncnfrmpassword.test(pForm.cnfrmpassword.value)) {
			cnfrmMsg.innerHTML = "Confirm Password is not in correct format (JS)";
			flag = false;
		}
	}

	if (pForm.gender.value === "") {
		genderMsg.innerHTML = "Gender cannot be empty (JS)";
		flag = false;
	}

	if (pForm.dob.value === "") {
		dobMsg.innerHTML = "Dob cannot be empty (JS)";
		flag = false;
	}	
	

	if (!flag) return false;
	return true;

}