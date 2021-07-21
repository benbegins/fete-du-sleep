module.exports = {
	theme: {
		colors: {
			dark: "#515465",
			light: "#F8EFEC",
			terracotta: "#CDA595",
			green: "#8AB597",
		},
		container: {
			padding: {
				DEFAULT: "1.5rem",
				sm: "3rem",
				lg: "9vw",
			},
			center: true,
		},
		fontSize: {
			xs: ["max(calc(0.55rem + 0.25w), 0.625rem)", { lineHeight: "1.6" }],
			sm: ["max(calc(0.6rem + 0.25vw), 0.75rem)", { lineHeight: "1.6" }],
			base: [
				"max(calc(0.7rem + 0.3vw), 0.875rem)",
				{ lineHeight: "2.1" },
			],
			lg: [
				"max(calc(0.95rem + 0.35vw), 1.125rem)",
				{ lineHeight: "1.6" },
			],
			xl: ["max(2.6vw, 1.5rem)", { lineHeight: "1.375" }],
			"2xl": ["max(6.2vw, 3.125rem)", { lineHeight: "1.2" }],
		},
		screens: {
			sm: "640px",
			md: "768px",
			lg: "1024px",
			xl: "1280px",
			xxl: "1480px",
		},
	},
	variants: {},
	plugins: [],
	purge: [
		"./src/**/*.html",
		"./src/**/*.vue",
		"./src/**/*.jsx",
		"./**/*.php",
	],
}
