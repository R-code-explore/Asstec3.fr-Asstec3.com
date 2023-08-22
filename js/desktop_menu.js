
	let info_timer_menu;
	let info_button = document.getElementById("informatique")
	let info_menu = document.getElementById("info_submenu")

	let print_timer_menu;
	let print_button = document.getElementById("impression")
	let print_menu = document.getElementById("print_submenu")

	let demat_timer_menu;
	let demat_button = document.getElementById("gestion")
	let demat_menu = document.getElementById("demat_submenu")

	let display_timer_menu;
	let display_button = document.getElementById("ecran")
	let display_menu = document.getElementById("display_submenu")

	let phone_timer_menu;
	let tel_button = document.getElementById("telephonie")
	let phone_menu = document.getElementById("telephonie_submenu")

	let internet_timer_menu;
	let internet_button = document.getElementById("internet")
	let internet_menu = document.getElementById("internet_submenu")

	let support_timer_menu;
	let support_button = document.getElementById("support")
	let support_menu = document.getElementById("support_submenu")

//Informatique

info_button.addEventListener("mouseover", function() {
		info_menu.style.transform = "translate(-80%, 0)"
		info_menu.style.transition = ".2s ease-in-out"
        phone_menu.style.transform = "translate(-50%, -400px)"
		print_menu.style.transform = "translate(-50%, -400px)"
		demat_menu.style.transform = "translate(-50%, -600px)"
		display_menu.style.transform = "translate(-50%, -400px)"
		internet_menu.style.transform = "translate(-50%, -400px)"
		support_menu.style.transform = "translate(-50%, -400px)"
	})
	info_menu.addEventListener("mouseenter", function() {
		clearTimeout(info_timer_menu)
	})
	info_menu.addEventListener("mouseleave", function() {
		clearTimeout(info_timer_menu)
		info_timer_menu = setTimeout(info_resetSubmenuPosition, 1000); //1000 = 1s
	})
	function info_resetSubmenuPosition(){
		info_menu.style.transform = "translate(-80%, -400px)"
		info_menu.style.transition = ".2s ease-in-out"
	}

///////////


// Impression / Bureautique

print_button.addEventListener("mouseover", function() {
	print_menu.style.transform = "translate(-60%, 0)"
	print_menu.style.transition = ".2s ease-in-out"
	phone_menu.style.transform = "translate(-50%, -400px)"
	info_menu.style.transform = "translate(-50%, -400px)"
	demat_menu.style.transform = "translate(-50%, -600px)"
	display_menu.style.transform = "translate(-50%, -400px)"
	internet_menu.style.transform = "translate(-50%, -400px)"
	support_menu.style.transform = "translate(-50%, -400px)"
})
print_menu.addEventListener("mouseenter", function() {
	clearTimeout(print_timer_menu)
})
print_menu.addEventListener("mouseleave", function() {
	clearTimeout(print_timer_menu)
	print_timer_menu = setTimeout(print_resetSubmenuPosition, 1000); //1000 = 1s
})
function print_resetSubmenuPosition(){
	print_menu.style.transform = "translate(-80%, -400px)"
	print_menu.style.transition = ".2s ease-in-out"
}

///////////

// Dématérialisation

demat_button.addEventListener("mouseover", function() {
	demat_menu.style.transform = "translate(-40%, 0)"
	demat_menu.style.transition = ".2s ease-in-out"
	phone_menu.style.transform = "translate(-50%, -400px)"
	info_menu.style.transform = "translate(-50%, -400px)"
	print_menu.style.transform = "translate(-50%, -400px)"
	display_menu.style.transform = "translate(-50%, -400px)"
	internet_menu.style.transform = "translate(-50%, -400px)"
	support_menu.style.transform = "translate(-50%, -400px)"
})
demat_menu.addEventListener("mouseenter", function() {
	clearTimeout(demat_timer_menu)
})
demat_menu.addEventListener("mouseleave", function() {
	clearTimeout(demat_timer_menu)
	demat_timer_menu = setTimeout(demat_resetSubmenuPosition, 1000); //1000 = 1s
})
function demat_resetSubmenuPosition(){
	demat_menu.style.transform = "translate(-80%, -600px)"
	demat_menu.style.transition = ".2s ease-in-out"
}

///////////


// Affichage dynamique

display_button.addEventListener("mouseover", function() {
	display_menu.style.transform = "translate(-10%, 0)"
	display_menu.style.transition = ".2s ease-in-out"
	phone_menu.style.transform = "translate(-50%, -400px)"
	info_menu.style.transform = "translate(-50%, -400px)"
	print_menu.style.transform = "translate(-50%, -400px)"
	demat_menu.style.transform = "translate(-50%, -600px)"
	internet_menu.style.transform = "translate(-50%, -400px)"
	support_menu.style.transform = "translate(-50%, -400px)"
})
display_menu.addEventListener("mouseenter", function() {
	clearTimeout(display_timer_menu)
})
display_menu.addEventListener("mouseleave", function() {
	clearTimeout(display_timer_menu)
	display_timer_menu = setTimeout(display_resetSubmenuPosition, 1000); //1000 = 1s
})
function display_resetSubmenuPosition(){
	display_menu.style.transform = "translate(-80%, -400px)"
	display_menu.style.transition = ".2s ease-in-out"
}

///////////


//Phone

	tel_button.addEventListener("mouseover", function() {
		phone_menu.style.transform = "translate(-50%, 0)"
		phone_menu.style.transition = ".2s ease-in-out"
        info_menu.style.transform = "translate(-50%, -400px)"
        print_menu.style.transform = "translate(-50%, -400px)"
		demat_menu.style.transform = "translate(-50%, -600px)"
		display_menu.style.transform = "translate(-50%, -400px)"
		internet_menu.style.transform = "translate(-50%, -400px)"
		support_menu.style.transform = "translate(-50%, -400px)"
	})
	phone_menu.addEventListener("mouseenter", function() {
		clearTimeout(phone_timer_menu)
	})
	phone_menu.addEventListener("mouseleave", function() {
		clearTimeout(phone_timer_menu)
		phone_timer_menu = setTimeout(phone_resetSubmenuPosition, 1000); //1000 = 1s
	})
	function phone_resetSubmenuPosition(){
		phone_menu.style.transform = "translate(-50%, -400px)"
		phone_menu.style.transition = ".2s ease-in-out"
	}

///////


//Internet

internet_button.addEventListener("mouseover", function() {
	internet_menu.style.transform = "translate(-30%, 0)"
	internet_menu.style.transition = ".2s ease-in-out"
	info_menu.style.transform = "translate(-50%, -400px)"
	print_menu.style.transform = "translate(-50%, -400px)"
	demat_menu.style.transform = "translate(-50%, -600px)"
	display_menu.style.transform = "translate(-50%, -400px)"
	phone_menu.style.transform = "translate(-50%, -400px)"
	support_menu.style.transform = "translate(-50%, -400px)"
})
internet_menu.addEventListener("mouseenter", function() {
	clearTimeout(internet_timer_menu)
})
internet_menu.addEventListener("mouseleave", function() {
	clearTimeout(internet_timer_menu)
	internet_timer_menu = setTimeout(internet_resetSubmenuPosition, 1000); //1000 = 1s
})
function internet_resetSubmenuPosition(){
	internet_menu.style.transform = "translate(-50%, -400px)"
	internet_menu.style.transition = ".2s ease-in-out"
}

///////


//Support

support_button.addEventListener("mouseover", function() {
	support_menu.style.transform = "translate(50%, 0)"
	support_menu.style.transition = ".2s ease-in-out"
	info_menu.style.transform = "translate(-50%, -400px)"
	print_menu.style.transform = "translate(-50%, -400px)"
	demat_menu.style.transform = "translate(-50%, -600px)"
	display_menu.style.transform = "translate(-50%, -400px)"
	phone_menu.style.transform = "translate(-50%, -400px)"
	internet_menu.style.transform = "translate(-50%, -400px)"
})
support_menu.addEventListener("mouseenter", function() {
	clearTimeout(support_timer_menu)
})
support_menu.addEventListener("mouseleave", function() {
	clearTimeout(support_timer_menu)
	support_timer_menu = setTimeout(support_resetSubmenuPosition, 1000); //1000 = 1s
})
function support_resetSubmenuPosition(){
	support_menu.style.transform = "translate(-50%, -400px)"
	support_menu.style.transition = ".2s ease-in-out"
}

///////