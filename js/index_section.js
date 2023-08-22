let section_index01 = document.getElementById("index_section_01")
let section_index02 = document.getElementById("index_section_02")
let section_index03 = document.getElementById("index_section_03")
let section_index04 = document.getElementById("index_section_04")
let section_index05 = document.getElementById("index_section_05")
let section_index06 = document.getElementById("index_section_06")

let background_section_index_01 = document.getElementById("index_section_img_01")
let background_section_index_02 = document.getElementById("index_section_img_02")
let background_section_index_03 = document.getElementById("index_section_img_03")
let background_section_index_04 = document.getElementById("index_section_img_04")
let background_section_index_05 = document.getElementById("index_section_img_05")
let background_section_index_06 = document.getElementById("index_section_img_06")

if(window.matchMedia("(min-width: 595px)").matches){
        ///// 1 //////
section_index01.addEventListener("mouseenter", () => {
    background_section_index_01.style.width = "105%"
    background_section_index_01.style.height = "105%"
})
section_index01.addEventListener("mouseleave", () => {
    background_section_index_01.style.width = "100%"
    background_section_index_01.style.height = "100%"
})
/////////////

////// 2 //////
section_index02.addEventListener("mouseenter", () => {
    background_section_index_02.style.width = "105%"
    background_section_index_02.style.height = "105%"
})
section_index02.addEventListener("mouseleave", () => {
    background_section_index_02.style.width = "100%"
    background_section_index_02.style.height = "100%"
})
/////////////

////// 3 /////
section_index03.addEventListener("mouseenter", () => {
    background_section_index_03.style.width = "105%"
    background_section_index_03.style.height = "105%"
})
section_index03.addEventListener("mouseleave", () => {
    background_section_index_03.style.width = "100%"
    background_section_index_03.style.height = "100%"
})
/////////////

////// 4 //////
section_index04.addEventListener("mouseenter", () => {
    background_section_index_04.style.width = "105%"
    background_section_index_04.style.height = "105%"
})
section_index04.addEventListener("mouseleave", () => {
    background_section_index_04.style.width = "100%"
    background_section_index_04.style.height = "100%"
})
/////////////

////// 5 //////
section_index05.addEventListener("mouseenter", () => {
    background_section_index_05.style.width = "105%"
    background_section_index_05.style.height = "105%"
})
section_index05.addEventListener("mouseleave", () => {
    background_section_index_05.style.width = "100%"
    background_section_index_05.style.height = "100%"
})
/////////////

////// 6 //////
section_index06.addEventListener("mouseenter", () => {
    background_section_index_06.style.width = "105%"
    background_section_index_06.style.height = "105%"
})
section_index06.addEventListener("mouseleave", () => {
    background_section_index_06.style.width = "100%"
    background_section_index_06.style.height = "100%"
})
/////////////
}else{
    console.log("small screen >> no animations")
}