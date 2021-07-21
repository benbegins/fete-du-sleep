import { gsap } from "gsap"

// MENU MOBILE
let menuActive = false
const menuBurger = document.querySelector(".site-header__burger")
const siteHeader = document.querySelector(".site-header")
const menuLinks = document.querySelectorAll(".menu-mobile__link")

if (menuBurger) {
	menuBurger.addEventListener("click", () => {
		toggleMenu()
	})
	menuLinks.forEach((link) => {
		link.addEventListener("click", () => {
			toggleMenu()
		})
	})
}

const toggleMenu = () => {
	if (!menuActive) {
		menuActive = true
		siteHeader.classList.add("active")
	} else {
		menuActive = false
		siteHeader.classList.remove("active")
	}
}

// ANiMATION INTRO
const imgHero = document.querySelector(".home-hero__img")
const imgBorder = document.querySelector(".home-hero__img-border")

const animIntro = () => {
	const tl = gsap.timeline({
		defaults: { duration: 1, ease: "Power3.easeOut" },
	})
	tl.fromTo(
		".reveal",
		{
			y: 50,
		},
		{
			y: 0,
			opacity: 1,
			stagger: 0.15,
		}
	)
	tl.fromTo(
		imgHero,
		{
			scale: 1.2,
		},
		{
			opacity: 1,
			scale: 1,
		},
		"-=0.75"
	)
	tl.fromTo(
		imgBorder,
		{
			x: 0,
			y: 0,
		},
		{
			x: 10,
			y: 10,
			opacity: 1,
			duration: 1.2,
		},
		"-=1"
	)
}

window.addEventListener("load", animIntro)
