const form= document.getElementById('form');
const name= document.getElementById('name');
const passowrd= document.getElementById('passoword');
form.addEventListener('submit',(e) => {
	e.PreventDefault();
	CheckInputs();
});
function checkInputs() {

	const namevalue = name.value.trim();
	const passoword.value = passowrd.value.trim();

	if(username===''){

		setErrorFor(username,'username cannot be blank');

	}else {
		setSucessFor(username);
			}
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}			
}
function setErrorFor(input,message) {

	const formControl = input.ParentElement; 
	const small = formControl.querySelector('small');
	small.innerText = message ;
	formControl.classname ='form-control error';


}
function setSucessFor(input) {

	const formControl = input.ParentElement;
	formControl.classname ='form-control sucess';
}

