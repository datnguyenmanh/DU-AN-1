const next = document.querySelector('.next')
const prev = document.querySelector('.prev')
const comment = document.querySelector('#list-comment')
const commentItem = document.querySelectorAll('#list-comment .item')
var translateY = 0
var count = commentItem.length

next.addEventListener('click', function (event) {
	event.preventDefault()
	if (count == 1) {
		return false
	}
	translateY += -400
	comment.style.transform = `translateY(${translateY}px)`
	count--
})

prev.addEventListener('click', function (event) {
	event.preventDefault()
	if (count == 4) {
		// Xem hết bình luận
		return false
	}
	translateY += 400
	comment.style.transform = `translateY(${translateY}px)`
	count++
})

// resgist
function CheckResgist() {
	var pass = document.getElementById("pass");
	var name = document.getElementById("name");
	var email = document.getElementById("email");

	var errorName = document.getElementById("errorName");
	var errorPass = document.getElementById("errorPass");
	var errorEmail = document.getElementById("errorEmail");
	var errorSex = document.getElementById("errorSex");

	var gender = document.getElementsByName("gender");

	//Check name
	if (name.value.length == 0) {
		name.style.border = "3px solid red";
		errorName.innerHTML = "Last name and first name cannot be empty!";
		return false;
	} else {
		name.style.border = "none";
		errorName.innerHTML = "";
	}

	//Check pass
	if (pass.value.length == 0) {
		pass.style.border = "3px solid red";
		errorPass.innerHTML = "Password cannot be empty!";
		return false;
	} else {
		pass.style.border = "none";
		errorPass.innerHTML = "";
	}

	//Check email
	if (email.value.length == 0) {
		email.style.border = "3px solid red";
		errorEmail.innerHTML = "Email cannot be empty!";
		return false;
	} else {
		email.style.border = "none";
		errorEmail.innerHTML = "";
	}

	//Check gender
	if (gender[0].checked !== true & gender[1].checked !== true) {
		errorSex.innerHTML = "You have to choose the sex!";
		return false;
	} else {
		error4.innerHTML = "";
	}
}



// slide show
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
	showSlides(slideIndex += n);
}

function currentSlide(n) {
	showSlides(slideIndex = n);
}


function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
	if (n > slides.length) { slideIndex = 1 }
	if (n < 1) { slideIndex = slides.length }
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex - 1].style.display = "block";
	dots[slideIndex - 1].className += " active";
}